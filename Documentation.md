# Introduction:

## Designer Basic

The Format Designer plugin for Moodle is a powerful course format plugin designed to enhance the visual appearance and layout of courses. With Format Designer, you can create engaging and visually appealing course formats that capture learners' attention and improve their learning experience. This plugin offers a wide range of design options and is highly configurable, allowing you to customize the look and feel of your Moodle courses according to your preferences.

Key Features:

1. **Highly Configurable**: Format Designer provides extensive customization options, giving you the flexibility to design your courses exactly the way you want. You can choose from various layout styles such as Text Links, Cards, and List styles, allowing you to create unique and visually appealing course formats.

2. **Course types**: The Format Designer introduces a Course Type feature that allows you to choose from different styles to present your Moodle courses. Each course type offers a unique presentation and layout. The available course types include Kanban Board, Collapsible Sections, Flow.

2. **Section Customization**: With Format Designer, you can customize each section of your course with different layout styles. This enables you to create visually distinct sections, making it easier for learners to navigate through course content and find what they need. Additionally, Format Designer provides users with the ability to view their progress for each course. The progress bar takes into account only the activities that are configured in the course completion conditions when calculating progress.

3. **Course Header Elements**: The plugin allows you to add useful elements to the course header section, allowing for customization and providing helpful information to learners. Elements such as user progress, enrollment start and end dates, completion dates, due dates, and course contact users' profiles can be included in the course header.

4. **Popup Activity Format Support**: Format Designer seamlessly integrates with the Popup Activity format plugin. If you have the Popup Activity format installed, learners will have the option to view course modules in a popup window directly on the course page. This feature provides a more interactive and immersive learning experience.

5. **Hero activitiy**: The Format Designer provides teachers with the option to designate specific activities as "Hero activities". These Hero activities are added to the secondary navigation, making them easily accessible for students.


## Designer Pro

Designer Pro is an extended feature version of Designer Basic, offering enhanced capabilities and additional layout options to further customize the appearance and functionality of Moodle courses. With Designer Pro, you can take your course design to the next level and provide learners with an even richer learning experience.

Key Features:

1. **Expanded Layout Options**: Designer Pro introduces additional layout options, including Vertical Circle and Horizontal Circle. These layouts allow you to create visually captivating course formats that engage learners and present content in a unique and dynamic way.

2. **Prerequisite Course Setup**: One of the standout features of Designer Pro is the ability to set up prerequisite courses for the current course. With this functionality, you can establish dependencies between courses, ensuring that learners meet specific criteria before enrolling in or accessing a particular course.
<!--
Enroll Participants in Prerequisite Courses: Designer Pro simplifies the enrollment process by automatically enrolling participants in prerequisite courses. When learners enroll in the current course, they can be seamlessly enrolled in the necessary prerequisite courses as well, streamlining the learning path and ensuring learners have the required knowledge or skills.

Advanced Prerequisite Options: In addition to enrollment, Designer Pro offers additional options for managing prerequisite courses. You can configure prerequisites to grant completion or access to the current course based on specific criteria, such as course completion status, grades, or user roles. -->

# Installation and Setup:

You can install the Designer plugin using the Moodle plugin installer. Here are the steps to follow:

1. Download the [**Designer**](https://moodle.org/plugins/format_designer) plugin from the Moodle plugins repository or from the [Bdecent](https://bdecent.de/product/designer/) website.
2. Log in to your Moodle site as an administrator.
3. Go to "*`Site administration > Plugins > Install plugins`*".
4. Upload the downloaded plugin ZIP file.
5. Follow the prompts to install the plugin.
6. Once the Designer plugin is installed, you can configure it by going to "*`Site Administration > Plugins > Course formats > Designer`*".
From there, you can configure the course behaviour options, course header content, hero activity, and set the prerequisties courses.

Alternatively, you can also install the Designer plugin manually. Here are the steps to follow:

1. Download the [**Designer**](https://moodle.org/plugins/format_designer) plugin from the Moodle plugins repository
2. Unzip the downloaded file.
3. Upload the designer folder to the "*`moodle/course/format`*" directory on your Moodle server.
4. Log in to your Moodle site as an administrator.
5. Go to "*`Site administration > Notifications`*".
6. Follow the prompts to install the plugin.

### Installation for designer pro.

> Install using Moodle plugin installer, Follow the same steps mentioned in the above installation steps. Use the [**Designer Pro**](https://bdecent.de/product/designer-pro/) source instead of the designer basic

Alternatively, you can also install the Designer Pro plugin manually. Here are the steps to follow:

1. Download the [**Designer Pro**](https://bdecent.de/product/designer-pro/) plugin from the Moodle plugins repository
2. Unzip the downloaded file.
3. Upload the designer folder to the "*`moodle/local`*" directory on your Moodle server.
4. Log in to your Moodle site as an administrator.
5. Go to "*`Site administration > Notifications`*".
6. Follow the prompts to install the plugin.


# Configuration:

## Designer plugin Global Configurations:

The Format Designer plugin for Moodle includes a Global Configuration section where you can customize various settings to applied by default for new courses.
To access the Designer global configuration Go to "*`Site administration > Plugins > Course formats > Designer`*"

### General:

1. **Date format**: Allows you to specify how dates are displayed within the course. You can select from a range of date format options to ensure consistency and clarity in presenting date-related information.
    1. ***%d %m %Y:*** This format displays the date as day-month-year (e.g., 01 01 2023).
    2. ***%D %M %Y:*** This format presents the date as abbreviated day-month-year (e.g., 01 Jan 2023).
    3. ***%Y-%m-%d:*** This format represents the date in the year-month-day format (e.g., 2023-01-01) and more

2. **Flow animation duration**: To change the animation duration of the flow animation for the sections, you can modify the relevant animation settings within the Format Designer.


#### Hero activitiy:

1. **Section-0 activities**:

    On the course view page, the first section is labeled as "Section-0". It provides three options:

    1. ***Disabled***: This option disables the section, making it inaccessible to students.
    2. ***Make hero activity and hide section 0***: This option designates the section title link as a hero activity on the "Secondary navigation" tab and hides the Section-0 label from the view, making it easily accessible for students.
    3. ***Make hero activity and keep section 0 visible***: This option designates the section title link as a hero activity  while still keeping the Section-0 label visible on the "Secondary navigation" tab on the course view page for students.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section-0 activities" option in the course edit page.
    <br><br>

2. **Show as tab** (Hero activity):

    The "Hero activity" option in the "secondary navigation" tab allows you to display the section title link as a tab. It provides three options:

    1. ***Disabled***: This option disables the hero activity for the section-0, meaning the section title link will not be displayed as a tab in the secondary navigation.
    2. ***Everywhere***: This option enables the hero activity to be displayed as a tab in the "secondary navigation" for all pages within the course and activity or other pages.
    3. ***Only on course main page***: This option limits the display of the hero activity tab to the main page of the course. It will not be shown in the "secondary navigation" on the activity or other pages.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Show as tab" option in the course edit page.
    <br><br>

3. **Order**:

    This option allows you to determine the position of the Section-0 activity link on the "Secondary navigation" tab.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Order" option in the course edit page.
    <br><br>

4. **Avoid duplicate entry**:

    ***Disabled***: This option allows you to exclude the "activity link" from appearing on the navtab in the "Secondary navigation" tab when using the "Hero activity" feature. Only the default "activity type" will be displayed on the navtab.

    ***Enabled***: This option allows you to include both the default "activity type" and the activity link on the navtab in the "Secondary navigation" tab when using the "Hero activity" feature.
    
    <br><br>
    <img src="./img/global/general-setting.png" alt="">
    <br><br>


### Course - Designer Pro Plugin Global Configuration

1. **Course type**:
    The "course type" option determines the style of the section activities are displayed on the course view page. It defines how the activities within each section are visually presented to the learners.

    The "Course type" option offers four different styles for displaying section activities on the course view page:

    1. ***Normal***: This is the default style where activities are displayed in a linear format.
    2. ***Kanban Board***: Activities are presented in a kanban board style, allowing for visual organization and easy tracking of progress.
    3. ***Collapsible Sections***: Sections are collapsible, allowing learners to expand and collapse sections as needed.
    4. ***Flow***: Activities are presented in a flow format, guiding learners through the course content in a sequential manner.
    <br>
    These different styles provide flexibility in designing the visual presentation of course activities to enhance the learning experience.
    <br>
    
    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Course type" option in the course edit page.
    <br><br>

2. **Flow animation**:
    The Flow animation option enables a smooth animation effect when revealing the modules within a section. When this option is enabled, the modules will be displayed one by one with a subtle animation, creating a visually engaging experience for learners as they progress through the course content. This option works specifically when the "Flow" course type is selected.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Flow animation" option in the course edit page.
    <br><br>

3. **Accordion**:
    Accordion is a user interface pattern commonly used to display content in a collapsible and expandable manner. It consists of a series of panels or sections, each containing a title and content area.

    1. ***Enable***: "Accordion" used to display content in a collapsible and expandable manner. It consists of a series of panels or sections, each containing a title and content area. By default, only one section is expanded at a time, and clicking on a section's title will collapse or expand its content.

    2. ***Disable***: When the accordion is disabled, it means that all the sections will be expanded by default, displaying their content simultaneously without the ability to collapse or expand them individually. This layout is useful when you want to present all the section content to the users without the need for collapsing or expanding functionality.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Accordion" option in the course edit page.
    <br><br>

4. **Initial State**:
    The Initial State option in the Accordion course type allows you to control the initial visibility of the sections in the Accordion course type.
    
    1. ***First expanded***: The first section will be expanded by default, showing its content.
    2. ***Expanded***: All sections will be expanded by default, showing their respective content.
    3. ***Collapsed***: All sections will be collapsed by default, hiding their content.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Initial State" option in the course edit page.
    <br><br>

5. **List width**:
    The "List width" option allows you to specify the width of the course section list on the course view page. You can adjust the width to best fit your design preferences and content layout. This option works specifically when the "Kanban Board" course type is selected.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "List width" option in the course edit page.
    <br><br>

6. **Course index visibility**:
    The "Course index visibility" option determines whether the left navigation drawer, which contains the course index, is visible or hidden on the course view page.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Course index visibility" option in the course edit page.
    <br><br>

7. **Add course to secondary menu item on all course pages**:
    If this option is enabled, a course link will be added to all pages within the course, appearing in the secondary navigation menu.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Add course to secondary menu item on all course pages" option in the course edit page.
    <br><br>


#### Course header:

1. **Progress bar**:
    The progress bar visually represents the completion status of activities and prerequisites for students. It displays how many activities and prerequisites the student has already completed. A tooltip is provided to list the activities and prerequisites that are still "to do" and those that have been marked as "completed".
    <br>
    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Course index visibility" option in the course edit page.
    <br><br>

2. **Enrolment start date**:
    The current course enrollment start date of the user will be displayed in the course header.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Enrolment start date" option in the course edit page.
    <br><br>

3. **Enrolment end date**:
    The current course enrollment start date of the user will be displayed in the course header.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Enrolment end date" option in the course edit page.
    <br><br>

4. **Course due date**:
    The current course enrollment start date of the user will be displayed in the course header.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Course due date" option in the course edit page.
    <br><br>

5. **Choose the staff role**:
    Please select the staff role from the available options. The staff role is typically assigned to "Teacher, Manager, Non-editing teacher or Student" who have additional privileges and responsibilities within the system.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Choose the staff role" option in the course edit page.
    <br><br>


#### Course prerequisites:

1. **Display course prerequisites**:
    The "Prerequisites display" option provides three choices for displaying prerequisite courses:

    1. ***Disabled***: This option disables the display of prerequisite courses. Prerequisites will not be shown to users.
    2. ***Above course content***: With this option selected, prerequisite courses will be displayed as card above the main course content. Users will see the prerequisite courses listed before they can access the current course.
    3. ***On separate tab***: This option displays the prerequisite courses link in the "Secondary navigation" tab. Users can navigate to the prerequisite tab to view the required courses before accessing the current course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Display course prerequisites" option in the course edit page.
    <br><br>

2. **Prerequisites title**:
    The "Prerequisites title" option allows you to customize the title that is displayed for the prerequisite courses.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Prerequisites title" option in the course edit page.
    <br><br>

3. **Automatically enrol students**:
    The "Automatically enrol students" option enables automatic enrollment of students in prerequisite courses. 

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Automatically enrol students" option in the course edit page.
    <br><br>

4. **Unenrol students from prerequisites**:
    The "Unenrol students from prerequisites" option is used to automatically unenroll students from prerequisite courses. When a course is set as a prerequisite to another course, this option allows for the automatic unenrollment of students who are enrolled in the prerequisite course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Unenrol students from prerequisites" option in the course edit page.
    <br><br>

5. **Group students in prerequisites**:
    This option allows you to automatically add enrolled students to a designated group if they are enrolled in prerequisite courses.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Group students in prerequisites" option in the course edit page.
    <br><br>

6. **Open prerequisites in new tab**:
    The "Open prerequisites in new tab" option enables the functionality to open prerequisite courses in a new tab when students access them from the main course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Open prerequisites in new tab" option in the course edit page.
    <br><br>

7. **Back to main course**:
    The "Back to main course" button is a feature that provides a convenient way for students to navigate back to the main course from a prerequisite course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Back to main course" option in the course edit page.
    <br><br>

8. **Role for automatically enrolled students**:
    The "Role for automatically enrolled students" option allows you to specify the role that will be assigned to students who are automatically enrolled in the prerequisite course.

    <br><br>
    <img src="./img/global/course-setting.png" alt="">
    <br><br>


### Section - Designer Pro Plugin Global Configuration:

#### Section masking

1. **Section masking**:
    The "Section masking image" refers to an image that is used to create a visual mask or overlay effect on a specific section in a course. This image is applied to the section's background to add an extra layer of design or visual interest. It can be a transparent or semi-transparent image that shapes or modifies the appearance of the section's content, giving it a unique and customized look.


#### Layouts:

1. **Section width in Desktop size**:
    The "Section width" option allows you to specify the width at which a section will be displayed on a desktop-size screen. please note that this option only works for one section per page.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section width in Desktop size" option in the course edit page.
    <br><br>

2. **Section width in Tablet size**:
    The "Section width" option allows you to specify the width at which a section will be displayed on a tablet-size screen. please note that this option only works for one section per page.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section width in Tablet size" option in the course edit page.
    <br><br>

3. **Section width in Mobile size**:
    The "Section width" option allows you to specify the width at which a section will be displayed on a mobile-size screen. please note that this option only works for one section per page.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section width in Mobile size" option in the course edit page.
    <br><br>

4. **Minimum height**:
    The "Minimum height" option for the course section allows you to set a minimum height for each section within the course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Minimum height" option in the course edit page.
    <br><br>

5. **Section container**:
    The "Section container width" option provides three choices:

    1. "***Normal***" refers to the default width of the section container, which is determined by the theme or layout settings.
    2. "***Boxed***" will wrap the section content within a boxed container, providing a defined width for the section.
    3. "***Full***" will stretch the section container to the full width of the screen, allowing the content to occupy the entire width of the page.

    By selecting the appropriate option, you can customize the width of the section container to achieve the desired visual presentation for your course sections.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section container" option in the course edit page.
    <br><br>

6. **Section container width**:
    The "Section container width" option determines the width of the container that holds the content of each section in the course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section container width" option in the course edit page.
    <br><br>

7. **Section content**:
    The "Section content" option allows you to choose the layout style for the content within each section of the course. There are two options available:

    1. ***Normal***: This option displays the section content in a regular, unboxed layout. The content will flow naturally within the section without any specific visual constraints.
    2. ***Boxed***: Selecting this option wraps the section content within a boxed container, giving it a defined boundary and creating a more contained appearance. The content will be visually separated from the surrounding elements.

    You can customize the visual presentation of the course sections based on your design preferences and the desired aesthetic for your course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section content" option in the course edit page.
    <br><br>

8. **Section content width**:
    The "Section content width" option allows you to specify the width of the content within each section of the course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Section content width" option in the course edit page.
    <br><br>

9. **Layout columns - Desktop**:
    The "Activity Layout columns - Desktop in section" option refers to the number of columns in which activities are displayed within a section on the course page when viewed on a desktop or larger screen. This setting allows you to customize the layouts of activities, except for the "List layout," within each section to best suit your needs.

    You typically have the following options:

    1. ***Single Column***: Activities within the section are displayed in a single column, with one activity per row. This layout provides a linear list of activities, making it easier to focus on each activity individually.

    2. ***Two Columns***: Activities within the section are displayed in two columns, with multiple activities per row. This layout allows for a more compact presentation of activities within the section, utilizing the available space more efficiently.

    3. ***Three Columns***: Activities within the section are displayed in three columns, with multiple activities per row. This layout further increases the density of activity display within the section, accommodating more activities within the available space.

    4. ***Four Columns***: Activities are displayed in four columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    5. ***Five Columns***: Activities are displayed in five columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Layout columns - Desktop" option in the course edit page.
    <br><br>

10. **Layout columns - Tablet**:
    The "Activity Layout columns - Tablet" option refers to the number of columns in which activities are displayed within a section on the course page when viewed on a tablet devices. This setting allows you to customize the layouts of activities, except for the "List layout," within each section to best suit your needs.

    You typically have the following options:

    1. ***Single Column***: Activities within the section are displayed in a single column, with one activity per row. This layout provides a linear list of activities, making it easier to focus on each activity individually.

    2. ***Two Columns***: Activities within the section are displayed in two columns, with multiple activities per row. This layout allows for a more compact presentation of activities within the section, utilizing the available space more efficiently.

    3. ***Three Columns***: Activities within the section are displayed in three columns, with multiple activities per row. This layout further increases the density of activity display within the section, accommodating more activities within the available space.

    4. ***Four Columns***: Activities are displayed in four columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    5. ***Five Columns***: Activities are displayed in five columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Layout columns - Tablet" option in the course edit page.
    <br><br>

11. **Layout columns - Mobile**:
    The "Activity Layout columns - Mobile" option refers to the number of columns in which activities are displayed within a section on the course page when viewed on a Mobile devices. This setting allows you to customize the layouts of activities, except for the "List layout," within each section to best suit your needs.

    You typically have the following options:

    1. ***Single Column***: Activities within the section are displayed in a single column, with one activity per row. This layout provides a linear list of activities, making it easier to focus on each activity individually.

    2. ***Two Columns***: Activities within the section are displayed in two columns, with multiple activities per row. This layout allows for a more compact presentation of activities within the section, utilizing the available space more efficiently.

    3. ***Three Columns***: Activities within the section are displayed in three columns, with multiple activities per row. This layout further increases the density of activity display within the section, accommodating more activities within the available space.

    4. ***Four Columns***: Activities are displayed in four columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    5. ***Five Columns***: Activities are displayed in five columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Layout columns - Mobile" option in the course edit page.
    <br><br>

12. **Circle size**:
    In the circle layout for activities, the "Circle Size" option allows you to specify the size of the circles containing the activity image.

    The different size options:

    1. ***Small***: This option sets the image circle size to a smaller dimension, resulting in smaller circles for the activity images. It provides a compact and space-efficient display.
    2. ***Medium***: This option sets the image circle size to a moderate dimension, providing a balanced visual representation of the activity images with a moderate amount of space utilization.
    3. ***Large***: This option sets the image circle size to a larger dimension, resulting in bigger circles for the activity images. It offers a more prominent and visually impactful display.

    You can choose the appropriate image circle size based on your design preferences and the desired visual presentation of the activity images within the circle layout.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Circle size" option in the course edit page.
    <br><br>


#### Design:

1. **Hide section title**:
    The "Hide Section Title" option allows you to hide the title of a section in the course view page. When this option is enabled, the section title will not be displayed to students, providing a cleaner and more streamlined appearance for the course content.
    <br>
    
    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Hide Section Title" option in the course edit page.
    <br><br>

2. **Apply Background Color**:
    The "Apply Background Color" option allows you to apply a background color to specific elements in your design. It provides two choices: "Section Header" and "Whole Section".

    1. ***Section Header***: When "Section Header" is selected, the background color will be applied specifically to the section headers in the course view page. This allows you to highlight the section headers with a distinct background color, making them visually stand out.

    2. ***Whole Section***: When "Whole Section" is selected, the background color will be applied to the entire section, including the header and content area. This option provides a more comprehensive background color for each section, creating a visual separation between sections of your course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Apply Background Color" option in the course edit page.
    <br><br>

3. **Background color**: The "Background color" option allows you to choose and apply a specific color as the background for an element or section in your design.
    This color will be applied to either the section header or the entire section, depending on your selection in the above option "Apply background color". You can pick a color from a color palette or enter a specific color code to customize the background color to your preference.
    <br><br>

4. **Use different background for completion**: 
    When you select the option to "Use different background for completion" in the Format Designer, you can specify a background image that will be displayed specifically for completed sections. This allows you to visually distinguish completed items from the rest of the course content.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Use different background for completion" option in the course edit page.
    <br><br>

5. **Background image (completed)**:
    The "Background image (completed)" option allows you to set a specific background image for the section that have been marked as completed. You can choose an image file to serve as the background for completed sections. This image will be displayed when an section is marked as completed by the student.
    <br><br>

6. **Background Position**:
    The "Background Position" option allows you to specify the position of the background image within the section. You can choose from various positions such as "top left", "top center", "top right", "center left", "center", "center right", "bottom left", "bottom center", and "bottom right". This allows you to precisely control the placement of the background image to achieve the desired visual effect.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background Position" option in the course edit page.
    <br><br>

7. **Background Size**:
    The "Background Size" option allows you to define the size of the background image within the section. You can choose from different options such as "auto" (the default size), "cover" (the image is scaled to cover the entire element), "contain" (the image is scaled to fit within the element while maintaining its aspect ratio), or you can specify a specific size using pixels (e.g., "500px" for a width of 500 pixels). This allows you to control how the background image is displayed in relation to the section.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background Size" option in the course edit page.
    <br><br>

8. **Background Repeat**:
    The "Background Repeat" option allows you to specify how the background image should be repeated within the section.

    1. ***Yes***: This option is selected for the "Background Repeat" and it does not fit the section block, it will be displayed repeatedly. This repetition occurs both horizontally and vertically, ensuring that the entire section block is covered with the image.

    2. ***No***: The background image will not be repeated. It will be displayed only once within the section block. If the image is larger than the section block, it may be cropped or scaled to fit.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background Repeat" option in the course edit page.
    <br><br>

9. **Background gradient**:
    The "Background Gradient" option allows you to apply a gradient effect to the background of the section block. A gradient is a smooth transition between two or more colors, creating a visually pleasing and dynamic background.

    When enabling the "Background Gradient" option, you can specify the colors, direction, and type of gradient to be applied. You can choose from various gradient types, such as linear, radial, or diagonal, and define the starting and ending colors for the gradient.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background gradient" option in the course edit page.
    <br><br>

10. **Mask image**:
    The "Mask Image" option allows you to apply a mask to the section block's background image. A mask image is an additional image that defines the shape or pattern through which the background image is displayed.

    ***None***: No mask image will be applied. This means that the background image will be displayed as is, without any additional masking effect.

    ***Uploaded mask image file***: When an image is uploaded in the "Section mask image" option, the uploaded file will be visible as an option in the "Mask image" select box. By selecting the uploaded image from the "Mask image" option, the corresponding mask image will be applied to the section, creating a masked effect based on the selected image.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Mask image" option in the course edit page.
    <br><br>

11. **Mask size**:
    The "Mask image size" option allows you to adjust the size of the mask image applied to the section. You can specify the desired size in terms of width and height to control how the mask image is scaled and displayed within the section.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Mask size" option in the course edit page.
    <br><br>

12. **Mask position**:
    The "Mask position" option allows you to define the positioning of the mask image within the section. By adjusting the mask position, you can control how the mask image is aligned or displayed within the section block. This gives you flexibility in customizing the visual appearance of the section and achieving the desired design effect.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Mask position" option in the course edit page.
    <br><br>

13. **Text color**:
    The "Text color" option is applied specifically to the section title and section summary. It allows you to customize the color of the text within these elements, ensuring that they stand out and are easily readable. Other text within the section, such as activity descriptions or content, may not be affected by this setting.


#### Section type (Categorize section block)

1. **Title**:
    The "Title" refers to group and categorize a specific section within a course. It provides a way to organize and classify sections based on specific criteria or themes, making it easier for learners to navigate and locate the content they need. This feature helps create a more structured and organized course layout.
    <br>

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Title" option in the course edit page.
    <br><br>

2. **Background color**:
    The "Background color" option allows you to set a specific background color for the Categorize section block that contains the categorized sections. By selecting a background color, you can visually differentiate the categorize section block from other sections and enhance the overall appearance of your course.
    <br><br>

3. **Text color**:
    The "Text color" option allows you to set a specific text color for the block that contains the categorized sections. By selecting a text color, you can customize the appearance of the text within the categorize section block and ensure optimal readability and visual consistency with the rest of your course design.

    <br><br>
    <img src="./img/global/section-setting.png" alt="">
    <br><br>
    

### Activity - Designer Pro Plugin Global Configuration:

1. **Activity icon**:
    The "Activity icon" option provides several choices for displaying or hiding activity icons within your course.
    Here are the available options:

    1. ***Show***: This option displays the activity icons for all activities in the course.
    2. ***Hide***: This option hides the activity icons for all activities in the course.
    3. ***Show on hover***: This option shows the activity icons when the mouse cursor hovers over the activity.
    4. ***Hide on hover***: This option hides the activity icons when the mouse cursor hovers over the activity.
    5. ***Remove***: This option completely removes the activity icons from the course.

    You can choose the desired option based on your preferences and the desired visual presentation of the activities in your course.
    <br><br>

2. **Activity visits**:
    The "Activity visits" option allows you to control the visibility of activity visit indicators within your course.
    Here are the available options:

    1. **Show**: This option displays the activity visit indicators for all activities in the course.
    2. **Hide**: This option hides the activity visit indicators for all activities in the course.
    3. **Show on hover**: This option shows the activity visit indicators when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity visit indicators when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity visit indicators from the course.

    You can choose the desired option based on your preferences and the desired display of activity visit information in your course.
    <br><br>

3. **Activity call to action**:
    The "Activity call to action" option allows you to control the visibility of call-to-action buttons for activities within your course.
    Here are the available options:

    1. **Show**: This option displays the call-to-action buttons for all activities in the course.
    2. **Hide**: This option hides the call-to-action buttons for all activities in the course.
    3. **Show on hover**: This option shows the call-to-action buttons when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the call-to-action buttons when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the call-to-action buttons from the course.
    
    You can choose the desired option based on your preferences and the desired display of call-to-action buttons for activities in your course.
    <br><br>
    
4. **Activity title**:
    The "Activity title" option allows you to control the visibility of activity titles within your course. Here are the available options:

    1. **Show**: This option displays the activity titles for all activities in the course.
    2. **Hide**: This option hides the activity titles for all activities in the course.
    3. **Show on hover**: This option shows the activity titles when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity titles when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity titles from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity titles in your course.
    <br><br>

5. **Activity description**:
    The "Activity description" option allows you to control the visibility of activity descriptions within your course. Here are the available options:

    1. **Show**: This option displays the activity descriptions for all activities in the course.
    2. **Hide**: This option hides the activity descriptions for all activities in the course.
    3. **Show on hover**: This option shows the activity descriptions when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity descriptions when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity descriptions from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity descriptions in your course.
    <br><br>

6. **Activity mod name**:
    The "Activity mod name" option allows you to control the visibility of activity module names within your course. Here are the available options:

    1. **Show**: This option displays the activity module names for all activities in the course.
    2. **Hide**: This option hides the activity module names for all activities in the course.
    3. **Show on hover**: This option shows the activity module names when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity module names when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity module names from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity module names in your course.
    <br><br>

7. **Activity completion badge**:
    The "Activity completion badge" option allows you to control the visibility of completion badges for activities in your course. Here are the available options:

    1. **Show**: This option displays the completion badges for all activities in the course.
    2. **Hide**: This option hides the completion badges for all activities in the course.
    3. **Show on hover**: This option shows the completion badges when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the completion badges when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the completion badges from the activities in the course.
    
    You can choose the desired option based on your preferences and the desired display of completion badges for activities in your course.

#### Activity masking

1. **Activity mask image**:
    The "Activty masking image" refers to an image that is used to create a visual mask or overlay effect on a specific activty in a course. This image is applied to the activty's background to add an extra layer of design or visual interest. It can be a transparent or semi-transparent image that shapes or modifies the appearance of the activity's content, giving it a unique and customized look. Please note that you will need to upload the desired image file to be used as the mask image.
    <br><br>

2. **Activity mask size**:
    The "Mask image size" option allows you to adjust the size of the mask image applied to the activty. You can specify the desired size in terms of width and height to control how the mask image is scaled and displayed within the activty.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Mask size" option in the course edit page.
    <br><br>

3. **Activity mask position**:
    The "Mask position" option allows you to define the positioning of the mask image within the activty. By adjusting the mask position, you can control how the mask image is aligned or displayed within the activty block. This gives you flexibility in customizing the visual appearance of the activty and achieving the desired design effect.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Mask position" option in the course edit page.
    <br><br>

4. **Use different background for completion**:
    When you select the option to "Use different background for completion" in the Format Designer, you can specify a background image that will be displayed specifically for completed activity. This allows you to visually distinguish completed items from the rest of the course content.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Use different background for completion" option in the course edit page.
    <br><br>

5. **Background image (completed)**:
    The "Background image (completed)" option allows you to set a specific background image for the activity that have been marked as completed. You can choose an image file to serve as the background for completed activity. This image will be displayed when an activty is marked as completed by the student.
    <br><br>

6. **Background Position**:
    The "Background Position" option allows you to specify the position of the background image within the activity. You can choose from various positions such as "top left", "top center", "top right", "center left", "center", "center right", "bottom left", "bottom center", and "bottom right". This allows you to precisely control the placement of the background image to achieve the desired visual effect.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background Position" option in the course edit page.
    <br><br>

7. **Background Size**:
    The "Background Size" option allows you to define the size of the background image within the activity. You can choose from different options such as "auto" (the default size), "cover" (the image is scaled to cover the entire element), "contain" (the image is scaled to fit within the element while maintaining its aspect ratio), or you can specify a specific size using pixels (e.g., "500px" for a width of 500 pixels). This allows you to control how the background image is displayed in relation to the activity.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background Size" option in the course edit page.
    <br><br>

8. **Background Repeat**:
    The "Background Repeat" option allows you to specify how the background image should be repeated within the activty.

    1. ***Yes***: This option is selected for the "Background Repeat" and it does not fit the activty block, it will be displayed repeatedly. This repetition occurs both horizontally and vertically, ensuring that the entire activty block is covered with the image.

    2. ***No***: The background image will not be repeated. It will be displayed only once within the activty block. If the image is larger than the activty block, it may be cropped or scaled to fit.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background Repeat" option in the course edit page.
    <br><br>

9. **Background gradient**:
    The "Background Gradient" option allows you to apply a gradient effect to the background of the activty block. A gradient is a smooth transition between two or more colors, creating a visually pleasing and dynamic background.

    When enabling the "Background Gradient" option, you can specify the colors, direction, and type of gradient to be applied. You can choose from various gradient types, such as linear, radial, or diagonal, and define the starting and ending colors for the gradient.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Background gradient" option in the course edit page.
    <br><br>

10. **Mask image**:
    The "Mask Image" option allows you to apply a mask to the activity background image. A mask image is an additional image that defines the shape or pattern through which the background image is displayed.

    ***None***: No mask image will be applied. This means that the background image will be displayed as is, without any additional masking effect.

    ***Uploaded mask image file***: When an image is uploaded in the "Activty mask image" option, the uploaded file will be visible as an option in the "Mask image" select box. By selecting the uploaded image from the "Mask image" option, the corresponding mask image will be applied to the activty, creating a masked effect based on the selected image.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Mask image" option in the course edit page.
    <br><br>

11. **Minimum height**:
    The "Minimum height" option for the course activty allows you to set a minimum height for each activty within the course.

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Minimum height" option in the course edit page.
    <br><br>

13. **Text color**:
    The "Text color" option is applied specifically to the activity title and activity summary. It allows you to customize the color of the text within these elements, ensuring that they stand out and are easily readable. Other text within the activity, such as activity descriptions or content, may not be affected by this setting.
    <br><br>

14. **Use activity image**:
    The "Use activity image" option allows you to specify whether to display the activity image for activities in your course. You can choose the desired option based on your preferences and the desired display of activity images for activities in your course.
    <br><br>

15. **Display Progress**:
    The "Display Progress" option determines whether to show the progress of activities in the course. You can choose the appropriate option based on your preference and the desired visibility of activity progress in your course.

    <br><br>
    <img src="./img/global/activity-setting.png" alt="">
    <br><br>


# Course configurations:

## Course type:

The Format Designer plugin introduces a Course Type feature, offering various styles to present your Moodle courses. With this feature, you can select from different course types, each providing a unique presentation and layout for your courses.

1. **Kanban Board Course Type**: The Kanban Board course type presents course sections and activities in a visually appealing board-like layout. It is inspired by the popular project management methodology and allows learners to visualize the progress of different activities or topics at a glance.

2. **Collapsible Sections Course Type**: The Collapsible Sections course type enhances course navigation by allowing learners to expand or collapse individual sections. This provides them with greater control over their learning experience, particularly useful for courses with a large number of sections or modules.

3. **Flow Course Type**: The "Flow" course type presents sections and activities in a flow-like format, enabling learners to scroll horizontally for navigation. It offers smooth transitions between sections and activities, enhancing the ease of progression through the course.

By choosing a specific course type, you can customize the appearance and layout of your Moodle courses, creating engaging and user-friendly learning environments that align with your instructional objectives and the preferences of your learners.
<br>


## Feature: Kanban Board

In the Kanban Board course type, course sections and activities are represented as cards on a board. Each card typically corresponds to a specific section or activity in the course. Learners can drag and drop these cards across different columns or lanes to indicate their progress or status. The columns on the board represent different stages or categories, allowing learners to visualize the flow and progression of their learning.

The Kanban Board course type is particularly useful for project-based courses, task-oriented learning, or courses that involve sequential progression. It provides a clear overview of the course content and enables learners to manage their tasks effectively.

Overall, the Kanban Board course type in Moodle offers a dynamic and interactive approach to course navigation and organization. It empowers learners to take control of their learning journey and provides a visually engaging environment for effective learning and collaboration.

<br><br>
<img src="./img/.png" alt="">
<br><br>


### Kanban Board Feature settings:

1. **Course layout**:
    When the "Kanban Board" course type is selected, the course layout options for displaying "all sections on one page" or "one section per page" will be disabled. In the Kanban Board layout, the sections are presented in a visual board-like format, and the concept of displaying sections on separate pages or all on one page is not applicable.

    <br><br>
    <img src="./img/course/kanban-board-format-setting.png" alt="">
    <br><br>

2. **List Width**:
    When the Kanban Board course type is selected, the "List width" option becomes available. The List width option allows you to specify the width of the columns or lists in the Kanban Board layout. It determines how much space each column occupies on the screen.

    The List width option in the Kanban Board course type gives you flexibility in customizing the layout according to your preferences and the specific requirements of your course. You can choose the option that best suits your content and design preferences, ensuring an optimal visual representation of your Kanban Board.

    In the Kanban Board course type, the minimum width for the columns or lists is set to 400 pixels. This means that each column in the Kanban Board layout will have a minimum width of 400 pixels to ensure that the content within the column is displayed properly and not cramped. The minimum width ensures that the columns have enough space to accommodate the necessary information, such as activity titles, descriptions, and progress indicators.


## Feature: Collapsible Sections

In the Collapsible Sections course type, each section is initially collapsed, displaying only the section title. Learners can then expand a section to reveal its content by clicking on the section title. This collapsible feature allows learners to focus on one section at a time and easily navigate through the course materials.

It promotes a more structured and organized learning experience. The collapsible nature of the sections encourages learners to engage with the course content in a sequential manner, progressing through one section at a time. 

The collapsible sections make it easier for learners to locate and access specific course materials. Instead of scrolling through a long list of content, learners can expand the relevant section and quickly find the desired activity or resource.
    <br><br>
    <img src="./img/collapsible-sections.png" alt="">
    <br><br>


1. **Accordion**:
    Accordion is a user interface pattern commonly used to display content in a collapsible and expandable manner. It consists of a series of panels or sections, each containing a title and content area.

    1. ***Enable***: "Accordion" used to display content in a collapsible and expandable manner. It consists of a series of panels or sections, each containing a title and content area. By default, only one section is expanded at a time, and clicking on a section's title will collapse or expand its content.

    2. ***Disable***: When the accordion is disabled, it means that all the sections will be expanded by default, displaying their content simultaneously without the ability to collapse or expand them individually. This layout is useful when you want to present all the section content to the users without the need for collapsing or expanding functionality.

2. **Initial State**:
    The Initial State option in the Accordion course type allows you to control the initial visibility of the sections in the Accordion course type.
    
    1. ***First expanded***: The first section will be expanded by default, showing its content.
    2. ***Expanded***: All sections will be expanded by default, showing their respective content.
    3. ***Collapsed***: All sections will be collapsed by default, hiding their content.

    <br><br>
    <img src="./img/course/collapsible-section-format-setting.png" alt="">
    <br><br>


## Feature: Flow

The "Flow" course type is aims to simplify the layout of course pages. It offers a unique presentation style where sections and activities are displayed as squares, providing a visually appealing and intuitive learning experience. The "Flow" course type enhances the usability of Moodle courses by introducing collapsible sections that resemble activities, making it easy for learners to navigate and access course content.

In flow type, sections and activities are presented as squares, creating a cohesive and visually distinct layout. Sections can be expanded or collapsed, similar to collapsible sections. However, a section must contain at least one activity to be expandable.
Collapsed sections with activities are displayed as a stack, ensuring an organized and compact view of course content when expanding a new section, the screen automatically scrolls to make the opened section visible to the learner.

The section layout switcher is removed when using the "Flow" course type, ensuring that all activities are displayed as squares uniformly. If a course has no sections or only activities in the general section, only the activities are displayed as squares.

<br><br>
<img src="./img/.png" alt="">
<br><br>

1. **Accordion**:
    Accordion is a user interface pattern commonly used to display content in a collapsible and expandable manner. It consists of a series of panels or sections, each containing a title and content area.

    1. ***Enable***: "Accordion" used to display content in a collapsible and expandable manner. It consists of a series of panels or sections, each containing a title and content area. By default, only one section is expanded at a time, and clicking on a section's title will collapse or expand its content.

    2. ***Disable***: When the accordion is disabled, it means that all the sections will be expanded by default, displaying their content simultaneously without the ability to collapse or expand them individually. This layout is useful when you want to present all the section content to the users without the need for collapsing or expanding functionality.


2. **Initial State**:
    The Initial State option in the Accordion course type allows you to control the initial visibility of the sections in the Accordion course type.
    
    1. ***First expanded***: The first section will be expanded by default, showing its content.
    2. ***Expanded***: All sections will be expanded by default, showing their respective content.
    3. ***Collapsed***: All sections will be collapsed by default, hiding their content.


3. **Flow animation**:
    The expansion and collapsing of sections are animated, providing a smooth and visually appealing transition between states.
    
    An option to disable animation is available as a configurable setting. A global setting allows the configuration of the animation speed, use the **Flow Animation** config in course settings to setup different animation time  for each course.

    <br><br>
    <img src="./img/course/flow-format-setting.png" alt="">
    <br><br>

> Note: Except for "minimum height", "layout columns" and "Circle size" the layout settings of sections are disabled when using the "Flow" course type.

> When using the "Flow" course type, most of the layout settings for sections are disabled. The only available settings are "Minimum height," "Layout columns," and "Circle size." These settings allow you to customize the minimum height of sections, the number of columns in the layout, and the size of the circles used in the flow animation. Other section layout options, such as section container width, section content width, and Section width in different screen size are not applicable in the flow layout and are therefore disabled.


#### Course header:

1. **Progress bar**:
    The progress bar visually represents the completion status of activities and prerequisites for students. It displays how many activities and prerequisites the student has already completed. A tooltip is provided to list the activities and prerequisites that are still "to do" and those that have been marked as "completed".
    <br><br>

2. **Enrolment start date**:
    The current course enrollment start date of the user will be displayed in the course header.
    <br><br>

3. **Enrolment end date**:
    The current course enrollment start date of the user will be displayed in the course header.
    <br><br>

4. **Course due date**:
    The current course enrollment start date of the user will be displayed in the course header.
    <br><br>

5. **Choose the staff role**:
    Please select the staff role from the available options. The staff role is typically assigned to "Teacher, Manager, Non-editing teacher or Student" who have additional privileges and responsibilities within the system.

    <br><br>
    <img src="./img/course/course-header.png" alt="">
    <br><br>

#### Hero activitiy:

1. **Section-0 activities**:

    On the course view page, the first section is labeled as "Section-0". It provides three options:

    1. ***Disabled***: This option disables the section, making it inaccessible to students.
    2. ***Make hero activity and hide section 0***: This option designates the section title link as a hero activity on the "Secondary navigation" tab and hides the Section-0 label from the view, making it easily accessible for students.
    3. ***Make hero activity and keep section 0 visible***: This option designates the section title link as a hero activity  while still keeping the Section-0 label visible on the "Secondary navigation" tab on the course view page for students.
    <br><br>

2. **Show as tab** (Hero activity):

    The "Hero activity" option in the "secondary navigation" tab allows you to display the section title link as a tab. It provides three options:

    1. ***Disabled***: This option disables the hero activity for the section-0, meaning the section title link will not be displayed as a tab in the secondary navigation.
    2. ***Everywhere***: This option enables the hero activity to be displayed as a tab in the "secondary navigation" for all pages within the course and activity or other pages.
    3. ***Only on course main page***: This option limits the display of the hero activity tab to the main page of the course. It will not be shown in the "secondary navigation" on the activity or other pages.
    <br><br>

3. **Order**:

    This option allows you to determine the position of the "Section-0" activity link on the "Secondary navigation" tab.
    <br><br>

4. **Avoid duplicate entry**:

    ***Disabled***: This option allows you to exclude the "activity link" from appearing on the navtab in the "Secondary navigation" tab when using the "Hero activity" feature. Only the default "activity type" will be displayed on the navtab.

    ***Enabled***: This option allows you to include both the default "activity type" and the activity link on the navtab in the "Secondary navigation" tab when using the "Hero activity" feature.

    <br><br>
    <img src="./img/course/course-hero-activity.png" alt="">
    <br><br>


#### Course prerequisites - Designer Pro Course setting

1. **Display course prerequisites**:
    The "Prerequisites display" option provides three choices for displaying prerequisite courses:

    1. ***Disabled***: This option disables the display of prerequisite courses. Prerequisites will not be shown to users.
    2. ***Above course content***: With this option selected, prerequisite courses will be displayed as card above the main course content. Users will see the prerequisite courses listed before they can access the current course.
    3. ***On separate tab***: This option displays the prerequisite courses link in the "Secondary navigation" tab. Users can navigate to the prerequisite tab to view the required courses before accessing the current course.
    <br><br>

2. **Prerequisites title**:
    The "Prerequisites title" option allows you to customize the title that is displayed for the prerequisite courses.
    <br><br>

3. **Automatically enrol students**:
    The "Automatically enrol students" option enables automatic enrollment of students in prerequisite courses. 

    ***- Advanced option***:
    The advanced option allows you to create a "Show more / less" toggle link that controls the visibility of the "Automatically enrol students" option in the course edit page.
    <br><br>

4. **Unenrol students from prerequisites**:
    The "Unenrol students from prerequisites" option is used to automatically unenroll students from prerequisite courses. When a course is set as a prerequisite to another course, this option allows for the automatic unenrollment of students who are enrolled in the prerequisite course.
    <br><br>

5. **Group students in prerequisites**:
    This option allows you to automatically add enrolled students to a designated group if they are enrolled in prerequisite courses.
    <br><br>

6. **Open prerequisites in new tab**:
    The "Open prerequisites in new tab" option enables the functionality to open prerequisite courses in a new tab when students access them from the main course.
    <br><br>

7. **Back to main course**:
    The "Back to main course" button is a feature that provides a convenient way for students to navigate back to the main course from a prerequisite course.
    <br><br>
    <img src="./img/course/course-prerequisite.png" alt="">
    <br><br>


# Section Configuration

## Layouts

#### Layout setting:

1. **Section width in Desktop size**:
    The "Section width" option allows you to specify the width at which a section will be displayed on a "Desktop-size" screen. please note that this option only works for one section per page.
    <br>

2. **Section width in Tablet size**:
    The "Section width" option allows you to specify the width at which a section will be displayed on a "Tablet-size" screen. please note that this option only works for one section per page.
    <br>

3. **Section width in Mobile size**:
    The "Section width" option allows you to specify the width at which a section will be displayed on a "Mobile-size" screen. please note that this option only works for one section per page.
    <br>

    <br><br>
    <img src="./img/section/layout-setting.png" alt="">
    <br><br>


#### Layouts - Designer Pro Section setting

4. **Minimum height**:
    The "Minimum height" option for the course section allows you to set a minimum height for each section within the course.
    <br>

5. **Section container**:
    The "Section container width" option provides three choices:

    1. "***Normal***" refers to the default width of the section container, which is determined by the theme or layout settings.
    2. "***Boxed***" will wrap the section content within a boxed container, providing a defined width for the section.
    3. "***Full***" will stretch the section container to the full width of the screen, allowing the content to occupy the entire width of the page.

    By selecting the appropriate option, you can customize the width of the section container to achieve the desired visual presentation for your course sections.
    <br>

6. **Section container width**:
    The "Section container width" option determines the width of the container that holds the content of each section in the course.
    <br>

7. **Section content**:
    The "Section content" option allows you to choose the layout style for the content within each section of the course. There are two options available:

    1. ***Normal***: This option displays the section content in a regular, unboxed layout. The content will flow naturally within the section without any specific visual constraints.
    2. ***Boxed***: Selecting this option wraps the section content within a boxed container, giving it a defined boundary and creating a more contained appearance. The content will be visually separated from the surrounding elements.

    You can customize the visual presentation of the course sections based on your design preferences and the desired aesthetic for your course.
    <br><br>

8. **Section content width**:
    The "Section content width" option allows you to specify the width of the content within each section of the course.
    <br>

9. **Layout columns - Desktop**:
    The "Activity Layout columns - Desktop in section" option refers to the number of columns in which activities are displayed within a section on the course page when viewed on a desktop or larger screen. This setting allows you to customize the layouts of activities, except for the "List layout," within each section to best suit your needs.

    You typically have the following options:

    1. ***Single Column***: Activities within the section are displayed in a single column, with one activity per row. This layout provides a linear list of activities, making it easier to focus on each activity individually.

    2. ***Two Columns***: Activities within the section are displayed in two columns, with multiple activities per row. This layout allows for a more compact presentation of activities within the section, utilizing the available space more efficiently.

    3. ***Three Columns***: Activities within the section are displayed in three columns, with multiple activities per row. This layout further increases the density of activity display within the section, accommodating more activities within the available space.

    4. ***Four Columns***: Activities are displayed in four columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    5. ***Five Columns***: Activities are displayed in five columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.
    <br><br>

10. **Layout columns - Tablet**:
    The "Activity Layout columns - Tablet" option refers to the number of columns in which activities are displayed within a section on the course page when viewed on a tablet devices. This setting allows you to customize the layouts of activities, except for the "List layout," within each section to best suit your needs.

    You typically have the following options:

    1. ***Single Column***: Activities within the section are displayed in a single column, with one activity per row. This layout provides a linear list of activities, making it easier to focus on each activity individually.

    2. ***Two Columns***: Activities within the section are displayed in two columns, with multiple activities per row. This layout allows for a more compact presentation of activities within the section, utilizing the available space more efficiently.

    3. ***Three Columns***: Activities within the section are displayed in three columns, with multiple activities per row. This layout further increases the density of activity display within the section, accommodating more activities within the available space.

    4. ***Four Columns***: Activities are displayed in four columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    5. ***Five Columns***: Activities are displayed in five columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.
    <br><br>

11. **Layout columns - Mobile**:
    The "Activity Layout columns - Mobile" option refers to the number of columns in which activities are displayed within a section on the course page when viewed on a Mobile devices. This setting allows you to customize the layouts of activities, except for the "List layout," within each section to best suit your needs.

    You typically have the following options:

    1. ***Single Column***: Activities within the section are displayed in a single column, with one activity per row. This layout provides a linear list of activities, making it easier to focus on each activity individually.

    2. ***Two Columns***: Activities within the section are displayed in two columns, with multiple activities per row. This layout allows for a more compact presentation of activities within the section, utilizing the available space more efficiently.

    3. ***Three Columns***: Activities within the section are displayed in three columns, with multiple activities per row. This layout further increases the density of activity display within the section, accommodating more activities within the available space.

    4. ***Four Columns***: Activities are displayed in four columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.

    5. ***Five Columns***: Activities are displayed in five columns, with multiple activities per row. This layout allows for multiple activities to be shown in each row, increasing the density of the activity display and accommodating a larger number of activities within the available space.
    <br><br>

12. **Circle size**:
    In the circle layout for activities, the "Circle Size" option allows you to specify the size of the circles containing the activity image.

    The different size options:

    1. ***Small***: This option sets the image circle size to a smaller dimension, resulting in smaller circles for the activity images. It provides a compact and space-efficient display.
    2. ***Medium***: This option sets the image circle size to a moderate dimension, providing a balanced visual representation of the activity images with a moderate amount of space utilization.
    3. ***Large***: This option sets the image circle size to a larger dimension, resulting in bigger circles for the activity images. It offers a more prominent and visually impactful display.

    You can choose the appropriate image circle size based on your design preferences and the desired visual presentation of the activity images within the circle layout.

    <br><br>
    <img src="./img/section/layout-pro-setting.png" alt="">
    <br><br>


*Flow course type - Section layout setting*:
    When the Flow format is selected, some of the layout settings for sections are disabled, including options like "Section container width," "Section content width," "Background color," and others. However, the settings for "Minimum height," "Layout columns," and "Circle size" remain enabled, allowing you to customize these specific aspects of the section layout in the Flow format.
    <br><br>
    <img src="./img/section/layout-setting-flow-format.png" alt="">
    <br><br>


> When using the "Flow" course type, most of the layout settings for sections are disabled. The only available settings are "Minimum height," "Layout columns," and "Circle size." These settings allow you to customize the minimum height of sections, the number of columns in the layout, and the size of the circles used in the flow animation. Other section layout options, such as section container width, section content width, and Section width in different screen size are not applicable in the flow layout and are therefore disabled.


### Design - Designer Pro Activity setting

1. **Hide section title**:
    The "Hide Section Title" option allows you to hide the title of a section in the course view page. When this option is enabled, the section title will not be displayed to students, providing a cleaner and more streamlined appearance for the course content.
    <br><br>

2. **Apply Background Color**:
    The "Apply Background Color" option allows you to apply a background color to specific elements in your design. It provides two choices: "Section Header" and "Whole Section".

    1. ***Section Header***: When "Section Header" is selected, the background color will be applied specifically to the section headers in the course view page. This allows you to highlight the section headers with a distinct background color, making them visually stand out.

    2. ***Whole Section***: When "Whole Section" is selected, the background color will be applied to the entire section, including the header and content area. This option provides a more comprehensive background color for each section, creating a visual separation between sections of your course.
    <br><br>

3. **Background color**: The "Background color" option allows you to choose and apply a specific color as the background for an element or section in your design.
    This color will be applied to either the section header or the entire section, depending on your selection in the above option "Apply background color". You can pick a color from a color palette or enter a specific color code to customize the background color to your preference.
    <br><br>

4. **Use different background for completion**:
    When you select the option to "Use different background for completion" in the Format Designer, you can specify a background image that will be displayed specifically for completed sections. This allows you to visually distinguish completed items from the rest of the course content.
    <br><br>

5. **Background image (completed)**:
    The "Background image (completed)" option allows you to set a specific background image for the section that have been marked as completed. You can choose an image file to serve as the background for completed sections. This image will be displayed when an section is marked as completed by the student.
    <br><br>

6. **Background Position**:
    The "Background Position" option allows you to specify the position of the background image within the section. You can choose from various positions such as "top left", "top center", "top right", "center left", "center", "center right", "bottom left", "bottom center", and "bottom right". This allows you to precisely control the placement of the background image to achieve the desired visual effect.
    <br><br>

7. **Background Size**:
    The "Background Size" option allows you to define the size of the background image within the section. You can choose from different options such as "auto" (the default size), "cover" (the image is scaled to cover the entire element), "contain" (the image is scaled to fit within the element while maintaining its aspect ratio), or you can specify a specific size using pixels (e.g., "500px" for a width of 500 pixels). This allows you to control how the background image is displayed in relation to the section.
    <br><br>

8. **Background Repeat**:
    The "Background Repeat" option allows you to specify how the background image should be repeated within the section.

    1. ***Yes***: This option is selected for the "Background Repeat" and it does not fit the section block, it will be displayed repeatedly. This repetition occurs both horizontally and vertically, ensuring that the entire section block is covered with the image.

    2. ***No***: The background image will not be repeated. It will be displayed only once within the section block. If the image is larger than the section block, it may be cropped or scaled to fit.
    <br><br>

9. **Background gradient**:
    The "Background Gradient" option allows you to apply a gradient effect to the background of the section block. A gradient is a smooth transition between two or more colors, creating a visually pleasing and dynamic background.

    When enabling the "Background Gradient" option, you can specify the colors, direction, and type of gradient to be applied. You can choose from various gradient types, such as linear, radial, or diagonal, and define the starting and ending colors for the gradient.
    <br><br>

10. **Mask image**:
    The "Mask Image" option allows you to apply a mask to the section block's background image. A mask image is an additional image that defines the shape or pattern through which the background image is displayed.

    ***None***: No mask image will be applied. This means that the background image will be displayed as is, without any additional masking effect.

    ***Uploaded mask image file***: When an image is uploaded in the "Section mask image" option, the uploaded file will be visible as an option in the "Mask image" select box. By selecting the uploaded image from the "Mask image" option, the corresponding mask image will be applied to the section, creating a masked effect based on the selected image.
    <br><br>

11. **Mask size**:
    The "Mask image size" option allows you to adjust the size of the mask image applied to the section. You can specify the desired size in terms of width and height to control how the mask image is scaled and displayed within the section.
    <br><br>

12. **Mask position**:
    The "Mask position" option allows you to define the positioning of the mask image within the section. By adjusting the mask position, you can control how the mask image is aligned or displayed within the section block. This gives you flexibility in customizing the visual appearance of the section and achieving the desired design effect.
    <br><br>

13. **Text color**:
    The "Text color" option is applied specifically to the section title and section summary. It allows you to customize the color of the text within these elements, ensuring that they stand out and are easily readable. Other text within the section, such as activity descriptions or content, may not be affected by this setting.

    <br><br>
    <img src="./img/section/design-setting.png" alt="">
    <br><br>


#### Section type [Categorize section block] - Designer Pro Activity setting

1. **Title**:
    The "Title" refers to group and categorize a specific section within a course. It provides a way to organize and classify sections based on specific criteria or themes, making it easier for learners to navigate and locate the content they need. This feature helps create a more structured and organized course layout.
    <br><br>

2. **Background color**:
    The "Background color" option allows you to set a specific background color for the Categorize section block that contains the categorized sections. By selecting a background color, you can visually differentiate the categorize section block from other sections and enhance the overall appearance of your course.
    <br><br>

3. **Text color**:
    The "Text color" option allows you to set a specific text color for the block that contains the categorized sections. By selecting a text color, you can customize the appearance of the text within the categorize section block and ensure optimal readability and visual consistency with the rest of your course design.

    <br><br>
    <img src="./img/section/section-type.png" alt="">
    <br><br>


# Activity Configuration

## Design
### Activity Elements Visibility Styles

1. **Activity icon**:
    The "Activity icon" option provides several choices for displaying or hiding activity icons within your course.
    Here are the available options:

    1. ***Show***: This option displays the activity icons for all activities in the course.
    2. ***Hide***: This option hides the activity icons for all activities in the course.
    3. ***Show on hover***: This option shows the activity icons when the mouse cursor hovers over the activity.
    4. ***Hide on hover***: This option hides the activity icons when the mouse cursor hovers over the activity.
    5. ***Remove***: This option completely removes the activity icons from the course.
    
    You can choose the desired option based on your preferences and the desired visual presentation of the activities in your course.
    <br><br>

2. **Activity visits**:
    The "Activity visits" option allows you to control the visibility of activity visit indicators within your course.
    Here are the available options:

    1. **Show**: This option displays the activity visit indicators for all activities in the course.
    2. **Hide**: This option hides the activity visit indicators for all activities in the course.
    3. **Show on hover**: This option shows the activity visit indicators when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity visit indicators when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity visit indicators from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity visit information in your course.
    <br><br>

3. **Activity call to action**:
    The "Activity call to action" option allows you to control the visibility of call-to-action buttons for activities within your course.
    Here are the available options:

    1. **Show**: This option displays the call-to-action buttons for all activities in the course.
    2. **Hide**: This option hides the call-to-action buttons for all activities in the course.
    3. **Show on hover**: This option shows the call-to-action buttons when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the call-to-action buttons when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the call-to-action buttons from the course.
    
    You can choose the desired option based on your preferences and the desired display of call-to-action buttons for activities in your course.
    <br><br>
    
4. **Activity title**:
    The "Activity title" option allows you to control the visibility of activity titles within your course. Here are the available options:

    1. **Show**: This option displays the activity titles for all activities in the course.
    2. **Hide**: This option hides the activity titles for all activities in the course.
    3. **Show on hover**: This option shows the activity titles when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity titles when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity titles from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity titles in your course.
    <br><br>

5. **Activity description**:
    The "Activity description" option allows you to control the visibility of activity descriptions within your course. Here are the available options:

    1. **Show**: This option displays the activity descriptions for all activities in the course.
    2. **Hide**: This option hides the activity descriptions for all activities in the course.
    3. **Show on hover**: This option shows the activity descriptions when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity descriptions when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity descriptions from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity descriptions in your course.
    <br>

6. **Activity mod name**:
    The "Activity mod name" option allows you to control the visibility of activity module names within your course. Here are the available options:

    1. **Show**: This option displays the activity module names for all activities in the course.
    2. **Hide**: This option hides the activity module names for all activities in the course.
    3. **Show on hover**: This option shows the activity module names when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the activity module names when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the activity module names from the course.
    
    You can choose the desired option based on your preferences and the desired display of activity module names in your course.
    <br><br>

7. **Activity completion badge**:
    The "Activity completion badge" option allows you to control the visibility of completion badges for activities in your course. Here are the available options:

    1. **Show**: This option displays the completion badges for all activities in the course.
    2. **Hide**: This option hides the completion badges for all activities in the course.
    3. **Show on hover**: This option shows the completion badges when the mouse cursor hovers over the activity.
    4. **Hide on hover**: This option hides the completion badges when the mouse cursor hovers over the activity.
    5. **Remove**: This option completely removes the completion badges from the activities in the course.
    
    You can choose the desired option based on your preferences and the desired display of completion badges for activities in your course.

     <br><br>
    <img src="./img/activity/design-setting.png" alt="">
    <br><br>


### Module Background Styles - Designer Pro Activity setting

1. **Background image**:
    The "Background image" option allows you to set a specific background image for the activity. You can choose an image file to serve as the background for the activity.
    <br><br>
2. **Use different background for completion**:
    When you select the option to "Use different background for completion" in the Format Designer, you can specify a background image that will be displayed specifically for completed activity. This allows you to visually distinguish completed items from the rest of the course content. When the "Use different background for completion" option is enabled, the "Background image (completed)" option will become visible.
    <br><br>

3. **Background image (completed)**:
    The "Background image (completed)" option allows you to set a specific background image for the activity that have been marked as completed. You can choose an image file to serve as the background for completed activity. This image will be displayed when an activty is marked as completed by the student. The "Background image (completed)" option will become visible, only when the "Use different background for completion" option is enabled.
    <br><br>

4. **Background Position**:
    The "Background Position" option allows you to specify the position of the background image within the activity. You can choose from various positions such as "top left", "top center", "top right", "center left", "center", "center right", "bottom left", "bottom center", and "bottom right". This allows you to precisely control the placement of the background image to achieve the desired visual effect.
    <br><br>

5. **Background Size**:
    The "Background Size" option allows you to define the size of the background image within the activity. You can choose from different options such as "auto" (the default size), "cover" (the image is scaled to cover the entire element), "contain" (the image is scaled to fit within the element while maintaining its aspect ratio), or you can specify a specific size using pixels (e.g., "500px" for a width of 500 pixels). This allows you to control how the background image is displayed in relation to the activity.
    <br><br>

6. **Background Repeat**:
    The "Background Repeat" option allows you to specify how the background image should be repeated within the activty.

    1. ***Yes***: This option is selected for the "Background Repeat" and it does not fit the activty block, it will be displayed repeatedly. This repetition occurs both horizontally and vertically, ensuring that the entire activty block is covered with the image.

    2. ***No***: The background image will not be repeated. It will be displayed only once within the activty block. If the image is larger than the activty block, it may be cropped or scaled to fit.
    <br><br>

7. **Background gradient**:
    The "Background Gradient" option allows you to apply a gradient effect to the background of the activty block. A gradient is a smooth transition between two or more colors, creating a visually pleasing and dynamic background.

    When enabling the "Background Gradient" option, you can specify the colors, direction, and type of gradient to be applied. You can choose from various gradient types, such as linear, radial, or diagonal, and define the starting and ending colors for the gradient.


### Module Background MASK Styles - Designer Pro Activity setting

1. **Mask image**:
    The "Mask Image" option allows you to apply a mask to the activity background image. A mask image is an additional image that defines the shape or pattern through which the background image is displayed. You can upload the "Mask images" in the Global settings and select the "mask image" in the course edit settings.

    1. ***None***: No mask image will be applied. This means that the background image will be displayed as is, without any additional masking effect.

    2. ***Uploaded mask image file***: When an image is uploaded in the "Activty mask image" option, the uploaded file will be visible as an option in the "Mask image" select box. By selecting the uploaded image from the "Mask image" option, the corresponding mask image will be applied to the activty, creating a masked effect based on the selected image.
    <br><br>

2. **Activity mask size**:
    The "Mask image size" option allows you to adjust the size of the mask image applied to the activty. You can specify the desired size in terms of width and height to control how the mask image is scaled and displayed within the activty.
    <br><br>

3. **Activity mask position**:
    The "Mask position" option allows you to define the positioning of the mask image within the activty. By adjusting the mask position, you can control how the mask image is aligned or displayed within the activty block. This gives you flexibility in customizing the visual appearance of the activty and achieving the desired design effect.


### Module General Styles - Designer Pro Activity setting

1. **Text color**:
    The "Text color" option is applied specifically to the section title and section summary. It allows you to customize the color of the text within these elements, ensuring that they stand out and are easily readable. Other text within the section, such as activity descriptions or content, may not be affected by this setting.

2. **Minimum height**:
    The "Minimum height" option for the course activity allows you to set a minimum height for each activity within the section in the course.
    <br><br>


### Secondary menu

1. **Secondary menu title**:
    The "Secondary menu title" option allows you to set the title of an activity, activity type, or a custom link in the secondary menu of your course. When you choose the "custom" option, an additional option called "Custom title" becomes visible.

2.  **Custom Title**:
    When you select the "custom" option in the "Secondary menu title" setting, the "Custom title" option becomes visible.
    The "Custom title" option provides two enable options:

    1. ***Use custom name in course index***: Enabling this option will display the custom name in the "secondary menu" on the course index, providing a personalized title for the link.
    2. ***Use custom name on course / section pages***: Enabling this option will show the custom name in the "secondary menu" on the course and section pages.

    <br><br>
    <img src="./img/activity/design-pro-setting.png" alt="">
    <br><br>


### Hero activitiy

1. **Show as tab** (Hero activity):

    The "Hero activity" option in the "secondary navigation" tab allows you to display the section title link as a tab. It provides three options:

    1. ***Disabled***: This option disables the hero activity for the section-0, meaning the section title link will not be displayed as a tab in the secondary navigation.
    2. ***Everywhere***: This option enables the hero activity to be displayed as a tab in the "secondary navigation" for all pages within the course and activity or other pages.
    3. ***Only on course main page***: This option limits the display of the hero activity tab to the main page of the course. It will not be shown in the "secondary navigation" on the activity or other pages.
    <br><br>

2. **Order**:

    This option allows you to determine the position of the Section-0 activity link on the "Secondary navigation" tab.

    <br><br>
    <img src="./img/activity/hero-activity.png" alt="">
    <br><br>

# Activity Layout

1. **Text links (Default)**
    The Text Links activity layout is a minimalist approach to displaying activities within a course. It presents activities as simple text-based links, typically showcasing the activity title or a brief description. This layout is often used when a clean and straightforward presentation is desired, allowing learners to easily navigate and access the activity content. The text links may be organized in a list format, a grid, or other arrangements based on the course design. This layout prioritizes simplicity and ease of use, providing learners with a clear and concise overview of the available activities.

    <br><br>
    <img src="./img/section-layout-links.png" alt="">
    <br><br>

2. **List**
    The List activity layout is a traditional and commonly used format for displaying activities within a course. In this layout, activities are presented in a vertical list, typically showing the activity title along with additional information such as the activity type, due date, or completion status. Each activity is listed one below the other, making it easy for learners to scroll through and navigate the activities in a sequential manner. The List layout provides a clear and organized view of the activities, allowing learners to easily locate and access specific activities within the course.

    <br><br>
    <img src="./img/section-layout-list.png" alt="">
    <br><br>    

3. **Cards**
    The Cards activity layout is a visually appealing and modern format for displaying activities within a course. In this layout, activities are presented as individual cards, each representing a specific activity. Each card typically includes the activity title, a brief description, and additional information such as the activity type, due date, or completion status. The Cards layout allows for a more interactive and engaging display, with the ability to showcase activity images or icons. Learners can easily navigate through the activities by scrolling horizontally or vertically, depending on the design. The Cards layout provides a visually rich and intuitive way for learners to interact with and access the activities in the course.

    <br><br>
    <img src="./img/section-layout-cards.png" alt="">
    <br><br>

4. **Vertical Circles - Design Pro Plugin**
    In the Vertical Circles activity layout, the circles are primarily intended for displaying the activity images. Each activity is represented by a circular container that includes the activity image. The other activity details such as the title, description, and any additional information are typically displayed below to the circle.

    The circles are arranged in a column, allowing learners to scroll through the activities vertically. This layout provides a compact and visually engaging representation of the activities, making it easy for learners to navigate through the course content.

    <br><br>
    <img src="./img/circle-layout.png" alt="">
    <br><br>

5. **Horizontal Circles - Design Pro Plugin**
    In the Horizontal Circles activity layout, the circles are arranged horizontally to display the activity images. Each activity is represented by a circular container that includes the activity image. The circles are placed side by side, allowing learners to scroll horizontally to view the activities. The other activity details such as the title, description, and additional information are typically displayed adjacent to the circles. This layout provides a visually appealing and interactive way to navigate through the activities in a horizontal manner.

    <br><br>
    <img src="./img/circle-layout.png" alt="">
    <br><br>


# Designing Course Formats:

1. Explain the process of designing course formats using the Format Designer plugin.
2. Describe the various layout elements and components that can be customized, such as headers, footers, sidebars, etc.
3. Provide examples and use cases to demonstrate how different configurations can be applied to create visually appealing course formats.

# Managing Templates:

1. Explain how to create and manage templates within the Format Designer plugin.
2. Describe the template creation process and available customization options.
3. Provide guidance on how to apply templates to specific courses or categories.

# Best Practices and Tips:

1. Offer best practices for designing effective and user-friendly course formats using the Format Designer plugin.
2. Provide tips and recommendations for selecting appropriate colors, fonts, and layout structures.
3. Suggest ways to optimize the plugin's performance and ensure compatibility with different Moodle versions.

# Troubleshooting and Support:

1. Include a section addressing common issues or errors that users may encounter while using the Format Designer plugin.

    **Plugin Installation and Activation**:

    1. Ensure that you have installed and activated the Format Designer plugin correctly.
    2. Double-check that you are using a compatible version of the plugin with your learning management system (LMS) or content management system (CMS).

    **Compatibility**:

    Verify that your Moodle version is compatible with the Format Designer plugin. Some older versions may not support all features or may experience compatibility issues.
    
    **Cache Issues**:

    Clear your browser cache and refresh the page if you encounter any display or functionality issues. Cached files may interfere with the proper functioning of the plugin.

    **Configuration Errors**:

    1. Review your settings and configurations within the Format Designer plugin. Ensure that you have selected the desired options and applied the changes correctly.
    2. Double-check the documentation or user guide for the plugin to ensure that you have followed the recommended configuration steps.

    **Course not running**
    If a course is not running as expected in Moodle, there are several steps you can take to troubleshoot the issue:

    1. Course Configuration: Double-check the course settings and configuration to ensure that everything is properly set up. Verify that the course start date is accurate and aligned with your intended schedule. Make sure that all necessary resources and activities are available and accessible to the students.

    2. Access Restrictions: Review the access restrictions in place for the course and its resources. Ensure that there are no conflicting restrictions or permissions that might prevent students from accessing the course. Check if any enrollment or enrollment key requirements are correctly configured.

    3. Course Visibility: Confirm that the course is visible and available to the intended audience. Check the course visibility settings to ensure that it is not hidden or restricted from view. Verify that students have the necessary enrollment or access rights to join the course.

    **No students enrolled**:

    If you are experiencing the issue of no students enrolled in your Moodle course, here are some troubleshooting steps you can take:

    1. Course Enrollment Settings: Double-check the course enrollment settings to ensure that students are allowed to enroll. Navigate to the course administration settings and verify that the enrollment method is set correctly (e.g., self-enrollment, manual enrollment, cohort enrollment). Make sure that the enrollment duration and access restrictions are appropriately configured.

    2. Enrollment Restrictions: Review any enrollment restrictions that may be in place. Check if there are any enrollment keys or passwords required for students to enroll in the course. Ensure that the enrollment restrictions align with your intended enrollment process.

    3. User Enrollment Process: Confirm that students have been properly guided or instructed on how to enroll in the course. Provide clear instructions, enrollment keys (if applicable), and any necessary steps for students to follow in order to enroll. Communicate with students through announcements, emails, or other communication channels to ensure they are aware of the enrollment process.

    **Course end date**:
    
    Check that the course end date is correctly set and that all course activities and resources are available until the end of the course. Verify that any access restrictions or conditions are properly configured to allow students to complete the course on time.


2. Offer information on how users can seek further support, such as contacting the plugin developer or visiting relevant Moodle community forums.
 
    If users require further support while using the Format Designer plugin, there are several avenues they can explore:

    **Plugin Documentation**:
    
    Users should refer to the official documentation or user guide provided by the Format Designer plugin. It often contains detailed instructions, troubleshooting tips, and frequently asked questions that can help resolve common issues.

    **Plugin Support Forums**:
    
    Many plugin developers maintain support forums where users can ask questions, seek assistance, and interact with the community. Users can visit the Format Designer plugin's official support forum or discussion board to find answers to their queries or post their own questions.

    **Contacting the Plugin Developer**:
    
    If users encounter complex issues or need direct assistance, they can contact the developer of the Format Designer plugin. Developers usually provide contact information, such as an email address or support ticket system, through which users can reach out for personalized support.

    **Moodle Community Forums**:
    
    Moodle, being a widely used learning management system, has an active community of users and developers. Users can visit Moodle community forums or discussion boards to seek help from experienced Moodle users and experts who may have encountered similar issues or have valuable insights to share.


# Version History and Updates:

1. **Updates and Bug Fixes**:

    Keep your Format Designer plugin up to date with the latest version. Developers often release updates and bug fixes to improve stability and address known issues.

    <br>

2. **Changelog**:

    Changelogs typically provide a list of changes, bug fixes, new features, and improvements made in each version of the software or plugin.

    <br>
    
    **Version: 1.0**:
        
    1. **Section Layout Switcher**:
        The Section Layout Switcher is a feature that allows users to change the layout or presentation style of sections within a course. It provides options to switch between different section layouts, such as a ***Link layout***, ***List layout***, ***Card layout*** and ***Circles layout***  supported by the course plugin.
            
    2. **Elements**:
        1. ***Module type***:
        Module type refers to the different types or formats of activities or resources available within a course

        2. ***Description***:
        Module description refers to the descriptive information that provides an details about a specific module or activity within a course.
        
        3. ***Visit count***:
        Visit count refers to the number of times a specific resource within a course has been accessed or viewed by users.
        
        4. ***Activity completion***:
        Activity completion refers to the tracking and recording of learners' progress and completion status for specific activities within a course/
        
        5. ***Call to action***:
        The purpose of an Call to action is to guide learners in engaging with the learning content.

    <br>


    **Version: 1.1**:

    1. Section type ***(New)***

    2. Section progress ***(New)***

    3. Activity design ***(New)***

    4. Section layout ***(New)***

    5. Text link, List layout and Card layout improvements.

    6. Circles Layout ***(New)***

    7. Section design ***(New)***

    8. Collapsible sections ***(New)***

    <br>
    
    **Versiopn 1.2**:

    1. Background image for completed section/activity ***(New)***

    2. Background image settings ***(New)***

    3. Min height for section & activity ***(New)***

    4. Activity design — show/hide elements ***(New)***

    5. Section width ***(New)***

    6. Whole activity clickable when using list or card layout

    7. Activity and section image overlays/masks ***(New)***

    8. Kanban mode ***(New)***

    9. Integrate time management

    <br>


    **Version: 1.3**:

    1. Display activities in modal ***(New)***

    2. Improve course settings page ***(New)***

    3. Course index show/hide option ***(New)***

    4. New course type: collapsible sections ***(New)***

    5. Circles improvements ***(New)***

    6. New course type: Flow ***(New)***

    7. Kanban improvements ***(New)***

    8. Show/hide element improvement ***(New)***

    9. Global settings ***(New)***

    10. Video Time Integration

    <br>

------------------ End of Revised ------------------