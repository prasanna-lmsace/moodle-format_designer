<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains main class for Designer course format.
 *
 * @package   format_designer
 * @copyright 2021 bdecent gmbh <https://bdecent.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot. '/course/format/lib.php');

use core\output\inplace_editable;

/**
 * Main class for the Designer course format.
 *
 * @package   format_designer
 * @copyright 2021 bdecent gmbh <https://bdecent.de>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_designer extends format_base {

    /**
     * Returns true if this course format uses sections.
     *
     * @return bool
     */
    public function uses_sections() {
        return true;
    }

    /**
     * Returns the display name of the given section that the course prefers.
     *
     * Use section name is specified by user. Otherwise use default ("Topic #").
     *
     * @param int|stdClass $section Section object from database or just field section.section
     * @return string Display name that the course format prefers, e.g. "Topic 2"
     */
    public function get_section_name($section) {
        $section = $this->get_section($section);
        if ((string)$section->name !== '') {
            return format_string($section->name, true,
                ['context' => context_course::instance($this->courseid)]);
        } else {
            return $this->get_default_section_name($section);
        }
    }

    /**
     * Returns the default section name for the Designer course format.
     *
     * If the section number is 0, it will use the string with key = section0name from the course format's lang file.
     * If the section number is not 0, the base implementation of format_base::get_default_section_name which uses
     * the string with the key = 'sectionname' from the course format's lang file + the section number will be used.
     *
     * @param stdClass $section Section object from database or just field course_sections section
     * @return string The default value for the section name.
     */
    public function get_default_section_name($section) {
        if ($section->section == 0) {
            // Return the general section.
            return get_string('section0name', 'format_designer');
        } else {
            // Use format_base::get_default_section_name implementation which
            // will display the section name in "Topic n" format.
            return parent::get_default_section_name($section);
        }
    }

    /**
     * The URL to use for the specified course (with section).
     *
     * @param int|stdClass $section Section object from database or just field course_sections.section
     *     if omitted the course view page is returned
     * @param array $options options for view URL. At the moment core uses:
     *     'navigation' (bool) if true and section has no separate page, the function returns null
     *     'sr' (int) used by multipage formats to specify to which section to return
     * @return null|moodle_url
     */
    public function get_view_url($section, $options = []) {
        global $CFG;
        $course = $this->get_course();
        $url = new moodle_url('/course/view.php', ['id' => $course->id]);

        $sr = null;
        if (array_key_exists('sr', $options)) {
            $sr = $options['sr'];
        }
        if (is_object($section)) {
            $sectionno = $section->section;
        } else {
            $sectionno = $section;
        }
        if ($sectionno !== null) {
            if ($sr !== null) {
                if ($sr) {
                    $usercoursedisplay = COURSE_DISPLAY_MULTIPAGE;
                    $sectionno = $sr;
                } else {
                    $usercoursedisplay = COURSE_DISPLAY_SINGLEPAGE;
                }
            } else {
                $usercoursedisplay = $course->coursedisplay;
            }
            if ($sectionno != 0 && $usercoursedisplay == COURSE_DISPLAY_MULTIPAGE) {
                $url->param('section', $sectionno);
            } else {
                if (empty($CFG->linkcoursesections) && !empty($options['navigation'])) {
                    return null;
                }
                $url->set_anchor('section-'.$sectionno);
            }
        }
        return $url;
    }

    /**
     * Returns the information about the ajax support in the given source format.
     *
     * The returned object's property (boolean)capable indicates that
     * the course format supports Moodle course ajax features.
     *
     * @return stdClass
     */
    public function supports_ajax() {
        $ajaxsupport = new stdClass();
        $ajaxsupport->capable = true;
        return $ajaxsupport;
    }

    /**
     * Loads all of the course sections into the navigation.
     *
     * @param global_navigation $navigation
     * @param navigation_node $node The course node within the navigation
     * @return void
     */
    public function extend_course_navigation($navigation, navigation_node $node) {
        global $PAGE;
        // If section is specified in course/view.php, make sure it is expanded in navigation.
        if ($navigation->includesectionnum === false) {
            $selectedsection = optional_param('section', null, PARAM_INT);
            if ($selectedsection !== null && (!defined('AJAX_SCRIPT') || AJAX_SCRIPT == '0') &&
                    $PAGE->url->compare(new moodle_url('/course/view.php'), URL_MATCH_BASE)) {
                $navigation->includesectionnum = $selectedsection;
            }
        }

        // Check if there are callbacks to extend course navigation.
        parent::extend_course_navigation($navigation, $node);

        // We want to remove the general section if it is empty.
        $modinfo = get_fast_modinfo($this->get_course());
        $sections = $modinfo->get_sections();
        if (!isset($sections[0])) {
            // The general section is empty to find the navigation node for it we need to get its ID.
            $section = $modinfo->get_section_info(0);
            $generalsection = $node->get($section->id, navigation_node::TYPE_SECTION);
            if ($generalsection) {
                // We found the node - now remove it.
                $generalsection->remove();
            }
        }
    }

    /**
     * Custom action after section has been moved in AJAX mode.
     *
     * Used in course/rest.php
     *
     * @return array This will be passed in ajax respose
     */
    public function ajax_section_move() {
        global $PAGE;
        $titles = [];
        $course = $this->get_course();
        $modinfo = get_fast_modinfo($course);
        $renderer = $this->get_renderer($PAGE);
        if ($renderer && ($sections = $modinfo->get_section_info_all())) {
            foreach ($sections as $number => $section) {
                $titles[$number] = $renderer->section_title($section, $course);
            }
        }
        return ['sectiontitles' => $titles, 'action' => 'move'];
    }

    /**
     * Returns the list of blocks to be automatically added for the newly created course.
     *
     * @return array of default blocks, must contain two keys BLOCK_POS_LEFT and BLOCK_POS_RIGHT
     *     each of values is an array of block names (for left and right side columns)
     */
    public function get_default_blocks() {
        return [
            BLOCK_POS_LEFT => [],
            BLOCK_POS_RIGHT => [],
        ];
    }

    /**
     * Definitions of the additional options that this course format uses for course.
     *
     * Designer format uses the following options:
     * - coursedisplay
     * - hiddensections
     *
     * @param bool $foreditform
     * @return array of options
     */
    public function course_format_options($foreditform = false) {
        static $courseformatoptions = false;
        if ($courseformatoptions === false) {
            $courseconfig = get_config('moodlecourse');
            $courseformatoptions = [
                'hiddensections' => [
                    'default' => $courseconfig->hiddensections,
                    'type' => PARAM_INT,
                ],
                'coursedisplay' => [
                    'default' => $courseconfig->coursedisplay,
                    'type' => PARAM_INT,
                ],
            ];
        }
        if ($foreditform && !isset($courseformatoptions['coursedisplay']['label'])) {
            $courseformatoptionsedit = [
                'hiddensections' => [
                    'label' => new lang_string('hiddensections'),
                    'help' => 'hiddensections',
                    'help_component' => 'moodle',
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            0 => new lang_string('hiddensectionscollapsed'),
                            1 => new lang_string('hiddensectionsinvisible')
                        ],
                    ],
                ],
                'coursedisplay' => [
                    'label' => new lang_string('coursedisplay'),
                    'element_type' => 'select',
                    'element_attributes' => [
                        [
                            COURSE_DISPLAY_SINGLEPAGE => new lang_string('coursedisplay_single'),
                            COURSE_DISPLAY_MULTIPAGE => new lang_string('coursedisplay_multi'),
                        ],
                    ],
                    'help' => 'coursedisplay',
                    'help_component' => 'moodle',
                ],
            ];
            $courseformatoptions = array_merge_recursive($courseformatoptions, $courseformatoptionsedit);
        }
        return $courseformatoptions;
    }

    /**
     * Adds format options elements to the course/section edit form.
     *
     * This function is called from {@see course_edit_form::definition_after_data()}.
     *
     * @param MoodleQuickForm $mform form the elements are added to.
     * @param bool $forsection 'true' if this is a section edit form, 'false' if this is course edit form.
     * @return array array of references to the added form elements.
     */
    public function create_edit_form_elements(&$mform, $forsection = false) {
        global $COURSE, $PAGE;
        $elements = parent::create_edit_form_elements($mform, $forsection);

        if (!$forsection && (empty($COURSE->id) || $COURSE->id == SITEID)) {
            // Add "numsections" element to the create course form - it will force new course to be prepopulated
            // with empty sections.
            // The "Number of sections" option is no longer available when editing course, instead teachers should
            // delete and add sections when needed.
            $courseconfig = get_config('moodlecourse');
            $max = (int)$courseconfig->maxsections;
            $element = $mform->addElement('select', 'numsections', get_string('numberweeks'), range(0, $max ?: 52));
            $mform->setType('numsections', PARAM_INT);
            if (is_null($mform->getElementValue('numsections'))) {
                $mform->setDefault('numsections', $courseconfig->numsections);
            }
            array_unshift($elements, $element);

        }
        if ($forsection) {
            $options = $this->section_format_options(true);
        } else {
            $options = $this->course_format_options(true);
        }
        foreach ($options as $optionname => $option) {
            if (isset($option['disabledif'])) {
                $disabledif = $option['disabledif'];
                if (isset($disabledif[2])) {
                    $mform->disabledif($optionname, $disabledif[0], $disabledif[1], $disabledif[2]);
                }
            }
        }

        $PAGE->requires->js_init_code('
            require(["core/config"], function(CFG) {
                document.querySelectorAll("input[name$=\"width\"]").forEach((v) => {
                    var px = document.createElement("label");
                    px.classList.add("px-string");
                    px.innerHTML = "Px";
                    v.parentNode.append(px);
                })
            })
        ');

        return $elements;
    }

    /**
     * Definitions of the additional options that this course format uses for section
     *
     * See course_format::course_format_options() for return array definition.
     *
     * Additionally section format options may have property 'cache' set to true
     * if this option needs to be cached in get_fast_modinfo(). The 'cache' property
     * is recommended to be set only for fields used in course_format::get_section_name(),
     * course_format::extend_course_navigation() and course_format::get_view_url()
     *
     * For better performance cached options are recommended to have 'cachedefault' property
     * Unlike 'default', 'cachedefault' should be static and not access get_config().
     *
     * Regardless of value of 'cache' all options are accessed in the code as
     * $sectioninfo->OPTIONNAME
     * where $sectioninfo is instance of section_info, returned by
     * get_fast_modinfo($course)->get_section_info($sectionnum)
     * or get_fast_modinfo($course)->get_section_info_all()
     *
     * All format options for particular section are returned by calling:
     * $this->get_format_options($section);
     *
     * @param bool $foreditform
     * @return array
     */
    public function section_format_options($foreditform = false) {
        global $CFG;
        $sectionoptions = array(
            'sectiontype' => array(
                'type' => PARAM_ALPHA,
                'label' => '',
                'element_type' => 'hidden',
                'default' => 'default',
            ),
        );
        if (format_designer_has_pro()) {
            require_once($CFG->dirroot."/local/designer/lib.php");
            $prosectionoptions = get_pro_section_options();
            $sectionoptions = array_merge($sectionoptions, $prosectionoptions);
        }
        return $sectionoptions;
    }

    /**
     * Updates format options for a section
     *
     * Section id is expected in $data->id (or $data['id'])
     * If $data does not contain property with the option name, the option will not be updated
     *
     * @param stdClass|array $data return value from {@see moodleform::get_data()} or array with data
     * @return bool whether there were any changes to the options values
     */
    public function update_section_format_options($data) {
        global $COURSE;
        $data = (array)$data;
        $coursecontext = context_course::instance($COURSE->id);
        if (format_designer_has_pro()) {
            if (empty($data['sectioncategoriseheader'])) {
                $data['sectioncategoriseheader'] = get_string('categoriseheader', 'format_designer');
            }
            if (empty($data['sectionbackgroundheader'])) {
                $data['sectionbackgroundheader'] = get_string('sectionbackdesignheader', 'format_designer');
            }
            if (empty($data['sectionlayoutheader'])) {
                $data['sectionlayoutheader'] = get_string('sectionlayouts', 'format_designer');
            }
            if (!empty($data['sectiondesignerbackgroundimage'])) {
                $itemid = $data['sectiondesignerbackgroundimage'];
                $filearea = 'sectiondesignbackground';
                $record = new stdClass();
                $record->designerbackground_filemanager = $itemid;
                file_postupdate_standard_filemanager($record, 'designerbackground', array('accepted_types' => 'images',
                'maxfiles' => 1), $coursecontext, 'format_designer', $filearea, $itemid);
            }
        }
        return $this->update_format_options($data, $data['id']);
    }

    /**
     * Updates format options for a course.
     *
     * In case if course format was changed to 'designer', we try to copy options
     * 'coursedisplay' and 'hiddensections' from the previous format.
     *
     * @param stdClass|array $data return value from {@see moodleform::get_data()} or array with data
     * @param stdClass $oldcourse if this function is called from {@see update_course()}
     *     this object contains information about the course before update
     * @return bool whether there were any changes to the options values
     */
    public function update_course_format_options($data, $oldcourse = null) {
        $data = (array)$data;
        if ($oldcourse !== null) {
            $oldcourse = (array)$oldcourse;
            $options = $this->course_format_options();
            foreach ($options as $key => $unused) {
                if (!array_key_exists($key, $data)) {
                    if (array_key_exists($key, $oldcourse)) {
                        $data[$key] = $oldcourse[$key];
                    }
                }
            }
        }
        return $this->update_format_options($data);
    }

    /**
     * Whether this format allows to delete sections.
     *
     * Do not call this function directly, instead use {@see course_can_delete_section()}
     *
     * @param int|stdClass|section_info $section
     * @return bool
     */
    public function can_delete_section($section) {
        return true;
    }

    /**
     * Prepares the templateable object to display section name.
     *
     * @param \section_info|\stdClass $section
     * @param bool $linkifneeded
     * @param bool $editable
     * @param null|lang_string|string $edithint
     * @param null|lang_string|string $editlabel
     * @return inplace_editable
     */
    public function inplace_editable_render_section_name($section, $linkifneeded = true,
            $editable = null, $edithint = null, $editlabel = null) {
        global $USER;
        if ($editable === null) {
            $editable = !empty($USER->editing) && has_capability('moodle/course:update',
                    context_course::instance($section->course));
        }
        if (empty($edithint)) {
            $edithint = new lang_string('editsectionname', 'format_designer');
        }
        if (empty($editlabel)) {
            $title = get_section_name($section->course, $section);
            $editlabel = new lang_string('newsectionname', 'format_designer', $title);
        }
        $style = '';
        if (format_designer_has_pro()) {
            if (isset($section->sectiondesignertextcolor)) {
                if ($section->sectiondesignertextcolor) {
                    $style = "color: $section->sectiondesignertextcolor" . ";";
                }
            }
        }
        $displayvalue = $title = get_section_name($section->course, $section);
        if ($linkifneeded) {
            // Display link under the section name if the course format setting is to display one section per page.
            $url = course_get_url($section->course, $section->section, array('navigation' => true));
            if ($url) {
                $displayvalue = html_writer::link($url, $title, array('style' => $style));
            }
            $itemtype = 'sectionname';
        } else {
            // If $linkifneeded==false, we never display the link (this is used when rendering the section header).
            // Itemtype 'sectionnamenl' (nl=no link) will tell the callback that link should not be rendered -
            // there is no other way callback can know where we display the section name.
            $itemtype = 'sectionnamenl';
        }
        return new \core\output\inplace_editable('format_' . $this->format, $itemtype, $section->id, $editable,
            $displayvalue, $section->name, $edithint, $editlabel);
    }

    /**
     * Indicates whether the course format supports the creation of a news forum.
     *
     * @return bool
     */
    public function supports_news() {
        return true;
    }

    /**
     * Returns whether this course format allows the activity to
     * have "triple visibility state" - visible always, hidden on course page but available, hidden.
     *
     * @param stdClass|cm_info $cm course module (may be null if we are displaying a form for adding a module)
     * @param stdClass|section_info $section section where this module is located or will be added to
     * @return bool
     */
    public function allow_stealth_module_visibility($cm, $section) {
        // Allow the third visibility state inside visible sections or in section 0.
        return !$section->section || $section->visible;
    }

    /**
     * Callback used in WS core_course_edit_section when teacher performs an AJAX action on a section (show/hide).
     *
     * Access to the course is already validated in the WS but the callback has to make sure
     * that particular action is allowed by checking capabilities
     *
     * Course formats should register.
     *
     * @param section_info|stdClass $section
     * @param string $action
     * @param int $sr
     * @return null|array any data for the Javascript post-processor (must be json-encodeable)
     */
    public function section_action($section, $action, $sr) {
        global $PAGE;

        if ($section->section && ($action === 'setmarker' || $action === 'removemarker')) {
            // Format 'designer' allows to set and remove markers in addition to common section actions.
            require_capability('moodle/course:setcurrentsection', context_course::instance($this->courseid));
            course_set_marker($this->courseid, ($action === 'setmarker') ? $section->section : 0);
            return null;
        }

        // For show/hide actions call the parent method and return the new content for .section_availability element.
        $rv = $this->section_action_module($section, $action, $sr);
        $renderer = $PAGE->get_renderer('format_designer');
        $rv['section_availability'] = $renderer->section_availability($this->get_section($section));
        return $rv;
    }

    /**
     * Get the section cm info return to ajax.
     * @param section_info|stdClass $section
     * @param string $action
     * @param int $sr
     * @return null|array any data for the Javascript post-processor (must be json-encodeable)
     */
    public function section_action_module($section, $action, $sr) {
        global $PAGE;
        $course = $this->get_course();
        $coursecontext = context_course::instance($course->id);
        switch($action) {
            case 'hide':
            case 'show':
                require_capability('moodle/course:sectionvisibility', $coursecontext);
                $visible = ($action === 'hide') ? 0 : 1;
                course_update_section($course, $section, array('visible' => $visible));
                break;
            case 'setsectionoption':
                break;
            default:
                throw new moodle_exception('sectionactionnotsupported', 'core', null, s($action));
        }

        $modules = [];
        $prolayouts = get_pro_layouts();
        $modinfo = get_fast_modinfo($course);
        $coursesections = $modinfo->sections;
        $sectiontype = $this->get_section_option($section->id, 'sectiontype') ?: 'default';
        $templatename = 'format_designer/cm/module_layout_' . $sectiontype;
        if (in_array($sectiontype, $prolayouts)) {
            if (format_designer_has_pro()) {
                $templatename = 'layouts_' . $sectiontype . '/cm/module_layout_' . $sectiontype;
            }
        }
        if (array_key_exists($section->section, $coursesections)) {
            $courserenderer = $PAGE->get_renderer('format_designer');
            $completioninfo = new completion_info($course);
            foreach ($coursesections[$section->section] as $cmid) {
                $cm = $modinfo->get_cm($cmid);
                $moduledata = $courserenderer->render_course_module($cm, $sr, []);
                $liclass = $sectiontype;
                $sectionclass = ( ($sectiontype == 'circles') ? 'circle' : $sectiontype);
                $liclass .= ' '.$sectionclass.'-layout';
                $liclass .= ' '.$moduledata['modclasses'];
                $liclass .= (isset($moduledata['isrestricted']) && $moduledata['isrestricted']) ? ' restricted' : '';
                $html = html_writer::start_tag('li', ['class' => $liclass, 'id' => $moduledata['id']]);
                $html .= $courserenderer->render_from_template($templatename, $moduledata);
                $html .= '</li>';
                $modules[] = $html;
            }
        }

        return ['modules' => $modules];
    }

    /**
     * Return the plugin configs for external functions.
     *
     * @return array the list of configuration settings
     * @since Moodle 3.5
     */
    public function get_config_for_external() {
        // Return everything (nothing to hide).
        return $this->get_format_options();
    }

    /**
     * Set any arbitrary/custom option on this format, for a section.
     *
     * @param int $sectionid Course section number to set option for.
     * @param string $name Option name.
     * @param string $value Option value.
     * @return int Option record ID.
     * @throws dml_exception
     */
    public function set_section_option(int $sectionid, string $name, string $value): int {
        global $DB;

        $common = [
            'courseid' => $this->courseid,
            'format' => 'designer',
            'sectionid' => $sectionid,
            'name' => $name
        ];

        if ($existingoption = $DB->get_record('course_format_options', $common)) {
            $existingoption->value = $value;
            $DB->update_record('course_format_options', $existingoption);
            return $existingoption->id;
        } else {
            $option = (object)$common;
            $option->value = $value;
            return $DB->insert_record('course_format_options', $option);
        }
    }

    /**
     * Get section option.
     *
     * @param int $sectionid Course section number to get option for.
     * @param string $name Option name.
     * @return string|null
     * @throws dml_exception
     */
    public function get_section_option(int $sectionid, string $name): ?string {
        global $DB;

        return $DB->get_field('course_format_options', 'value', [
            'courseid' => $this->courseid,
            'format' => 'designer',
            'sectionid' => $sectionid,
            'name' => $name
        ]) ?: null;
    }

    /**
     * Get all options for section.
     *
     * @param int $sectionid
     * @return array Options
     */
    public function get_section_options(int $sectionid): array {
        global $DB;

        return $DB->get_records_menu('course_format_options', [
            'courseid' => $this->courseid,
            'format' => 'designer',
            'sectionid' => $sectionid
        ], '', 'name, value');
    }
}

/**
 * Implements callback inplace_editable() allowing to edit values in-place.
 *
 * @param string $itemtype
 * @param int $itemid
 * @param mixed $newvalue
 * @return inplace_editable
 */
function format_designer_inplace_editable($itemtype, $itemid, $newvalue) {
    global $DB, $CFG;
    require_once($CFG->dirroot . '/course/lib.php');
    if ($itemtype === 'sectionname' || $itemtype === 'sectionnamenl') {
        $section = $DB->get_record_sql(
            'SELECT s.* FROM {course_sections} s JOIN {course} c ON s.course = c.id WHERE s.id = ? AND c.format = ?',
            [$itemid, 'designer'], MUST_EXIST);
        return course_get_format($section->course)->inplace_editable_update_section_name($section, $itemtype, $newvalue);
    }
}

/**
 * Format date based on format defined in settings.
 *
 * @param int $timestamp
 * @return string
 * @throws coding_exception
 * @throws dml_exception
 */
function format_designer_format_date(int $timestamp) {
    if ($format = get_config('format_designer', 'dateformat')) {
        $component = strpos($format, 'strf') === 0 ? '' : 'format_designer';
    } else {
        $format = 'usstandarddate';
        $component = 'format_designer';
    }

    return userdate($timestamp, get_string($format, $component));
}

/**
 * Cut the Course content.
 *
 * @param string $str
 * @param int $n
 * @return string
 */
function format_designer_modcontent_trim_char($str, $n = 25) {
    if (str_word_count($str) < $n) {
        return $str;
    }
    $arrstr = explode(" ", $str);
    $slicearr = array_slice($arrstr, 0, $n);
    $strarr = implode(" ", $slicearr);
    $strarr .= '...';
    return $strarr;
}

/**
 * Check if Designer Pro is installed.
 *
 * @return bool
 */
function format_designer_has_pro() {
    return array_key_exists('designer', core_component::get_plugin_list('local'));
}

/**
 * Get the designer format custom layouts.
 */
function get_pro_layouts() {
    $layouts = array_keys(core_component::get_plugin_list('layouts'));
    return $layouts;
}

/**
 * Get section background image url.
 * @param \section_info $section
 * @param int $courseid
 */
function get_section_designer_background_image($section, $courseid) {
    if (!empty($section->sectiondesignerbackgroundimage)) {
        $coursecontext = context_course::instance($courseid);
        $itemid = $section->sectiondesignerbackgroundimage;
        $filearea = 'sectiondesignbackground';
        $files = get_file_storage()->get_area_files(
            $coursecontext->id, 'format_designer', $filearea,
            $itemid, 'itemid, filepath, filename', false);
        if (empty($files)) {
            return '';
        }
        $file = current($files);
        $fileurl = moodle_url::make_pluginfile_url(
            $file->get_contextid(),
            $file->get_component(),
            $file->get_filearea(),
            $file->get_itemid(),
            $file->get_filepath(),
            $file->get_filename(), false);
        return $fileurl->out(false);
    }
}


/**
 * Serves file from sectiondesignbackground_filearea
 *
 * @param mixed $course course or id of the course
 * @param mixed $cm course module or id of the course module
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options additional options affecting the file serving
 * @return bool false if file not found, does not return if found - just send the file
 */
function format_designer_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    require_login();
    if ($context->contextlevel != CONTEXT_COURSE) {
        return false;
    }

    if ($filearea !== 'sectiondesignbackground') {
        return false;
    }
    $fs = get_file_storage();
    $file = $fs->get_file($context->id, 'format_designer', 'sectiondesignbackground', $args[0], '/', $args[1]);
    if (!$file) {
        return false;
    }
    send_stored_file($file, 0, 0, 0, $options);
}
