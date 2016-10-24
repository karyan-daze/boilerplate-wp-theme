<?php
/**
 * Custom Metaboxes for the Custom Posts in custom-posts.php
 * params are in custom-posts.php
 */


add_filter( 'rwmb_meta_boxes', 'airteam_register_meta_boxes' );
function airteam_register_meta_boxes( $meta_boxes ) {
    $prefix1 = 'testimonial_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'personal_name',
        'title'      => __( 'Personal Information', 'airteam' ),
        'post_types' => array( 'testimonials' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Full name', 'airteam' ),
                'desc'  => 'Format: Full name',
                'id'    => $prefix1 . 'name',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Job Title', 'airteam' ),
                'desc'  => 'Job Title',
                'id'    => $prefix1 . 'job_title',
                'type'  => 'text',
                'std'   => 'Director',
                'class' => 'custom-class',
                'clone' => false,
            ),
        )
    );

    $prefix2 = 'team_';

    $meta_boxes[] = array(
        'id'         => 'team_name',
        'title'      => __( 'Team Information', 'airteam' ),
        'post_types' => array( 'teams' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Full name', 'airteam' ),
                'desc'  => 'Format: Full name',
                'id'    => $prefix2 . 'name',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Job Title', 'airteam' ),
                'desc'  => 'Job Title',
                'id'    => $prefix2 . 'job_title',
                'type'  => 'text',
                'std'   => 'CEO',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name' => __('Link', 'airteam'),
                'desc' => 'Link to the Team member website',
                'id' => $prefix2 . 'link',
                'type' => 'text',
                'std' => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
        )
    );

    $prefix3 = 'page_';

    $meta_boxes[] = array(
        'id'         => 'header_info',
        'title'      => __( 'Header', 'airteam' ),
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Page Title', 'airteam' ),
                'desc'  => 'Format: Title',
                'id'    => $prefix3 . 'title',
                'type'  => 'text',
                'std'   => 'Das ist Airteam',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Youtube Embed Link', 'airteam' ),
                'desc'  => 'Find it by right clicking on youtube video',
                'id'    => $prefix3 . 'embed_link',
                'type'  => 'text',
                'std'   => 'https://www.youtube.com/embed/p2dOfiEGjRI',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Image', 'airteam' ),
                'desc'  => 'Hero Image',
                'id'    => $prefix3 . 'hero_image',
                'type'  => 'image_advanced',
                'class' => 'custom-class',
            ),
            array(
                'name'  => __( 'Video', 'airteam' ),
                'desc'  => 'Hero Image',
                'id'    => $prefix3 . 'hero_video',
                'type'  => 'image_advanced',
                'class' => 'custom-class',
            ),
        )
    );

    // Get the post to Set a Metabox ONLY for the Team page template.
    if ( is_admin() ) {
        if (isset($_GET['post'])) $post_id = $_GET['post'];
        elseif (isset($_POST['post_ID'])) $post_id = $_POST['post_ID'];

        // This causes bug for removing pictures on the page.
        if (isset($post_id)) :
        $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
// check for a template type
        if ($template_file == 'page-templates/team.php') {
            // The current page has the team template assigned
            // do something
            $meta_boxes[] = array(
                'id' => 'team_info',
                'title' => __('Main Team Info', 'airteam'),
                'post_types' => array('page'),
                'context' => 'normal',
                'priority' => 'high',
                'fields' => array(
                    array(
                        'name' => __('Main Team Title', 'airteam'),
                        'desc' => 'Format: Title',
                        'id' => $prefix3 . 'team_title',
                        'type' => 'text',
                        'std' => 'Sed posuere consectetur est at lobortis.',
                        'class' => 'custom-class',
                        'clone' => false,
                    ),
                    array(
                        'name' => __('Team Description', 'airteam'),
                        'desc' => 'Description next to the image',
                        'id' => $prefix3 . 'team_description',
                        'type' => 'textarea',
                        'class' => 'custom-class',
                    ),
                    array(
                        'name' => __('Main Image', 'airteam'),
                        'desc' => 'Team Image Main on the left',
                        'id' => $prefix3 . 'team_image',
                        'type' => 'image_advanced',
                        'class' => 'custom-class',
                    ),
                    array(
                        'name' => __('Full name', 'airteam'),
                        'desc' => 'Full Name of the Main Team member',
                        'id' => $prefix3 . 'team_name',
                        'type' => 'text',
                        'std' => 'Thomas Gorski',
                        'class' => 'custom-class',
                        'clone' => false,
                    ),
                    array(
                        'name' => __('Job Title', 'airteam'),
                        'desc' => 'Job Title of the Main Team member',
                        'id' => $prefix3 . 'team_job_title',
                        'type' => 'text',
                        'std' => 'CEO',
                        'class' => 'custom-class',
                        'clone' => false,
                    ),



                )
            );

        } endif; } else {

        // not in admin? Just always run the metaboxes.
    $meta_boxes[] = array(
        'id' => 'team_info',
        'title' => __('Main Team Info', 'airteam'),
        'post_types' => array('page'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Main Team Title', 'airteam'),
                'desc' => 'Format: Title',
                'id' => $prefix3 . 'team_title',
                'type' => 'text',
                'std' => 'Sed posuere consectetur est at lobortis.',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name' => __('Team Description', 'airteam'),
                'desc' => 'Description next to the image',
                'id' => $prefix3 . 'team_description',
                'type' => 'text',
                'class' => 'custom-class',
            ),
            array(
                'name' => __('Main Image', 'airteam'),
                'desc' => 'Team Image Main on the left',
                'id' => $prefix3 . 'team_image',
                'type' => 'image_advanced',
                'class' => 'custom-class',
            ),
            array(
                'name' => __('Full name', 'airteam'),
                'desc' => 'Full Name of the Main Team member',
                'id' => $prefix3 . 'team_name',
                'type' => 'text',
                'std' => 'Thomas Gorski',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name' => __('Job Title', 'airteam'),
                'desc' => 'Job Title of the Main Team member',
                'id' => $prefix3 . 'team_job_title',
                'type' => 'text',
                'std' => 'CEO',
                'class' => 'custom-class',
                'clone' => false,
            ),


        )
    );

        }


    // Get the post to Set a Metabox ONLY for the Team page template.
    if ( is_admin() ) {
        if (isset($_GET['post'])) $post_id = $_GET['post'];
        elseif (isset($_POST['post_ID'])) $post_id = $_POST['post_ID'];

        // This causes bug for removing pictures on the page.
        if (isset($post_id)) :
            $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
// check for a template type
            if ($template_file == 'page-templates/contact.php') {
                $meta_boxes[] = array(
                    'id' => 'contact_info',
                    'title' => __('Contact Info', 'airteam'),
                    'post_types' => array('page'),
                    'context' => 'normal',
                    'priority' => 'high',
                    'fields' => array(
                        array(
                            'name' => __('Main Title', 'airteam'),
                            'desc' => 'Format: Title',
                            'id' => $prefix3 . 'contact_title',
                            'type' => 'text',
                            'std' => 'Wir freuen uns auf sie',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),
                        array(
                            'name' => __('Phone Number', 'airteam'),
                            'desc' => 'Format: Title',
                            'id' => $prefix3 . 'phone',
                            'type' => 'text',
                            'std' => '+40394309',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),
                        array(
                            'name' => __('Phone Title', 'airteam'),
                            'desc' => 'Text for the phone numbers',
                            'id' => $prefix3 . 'phone_text',
                            'type' => 'textarea',
                            'class' => 'custom-class',
                        ),
                        array(
                            'name' => __('SMS text', 'airteam'),
                            'desc' => 'Text for the SMS field',
                            'id' => $prefix3 . 'sms_text',
                            'type' => 'textarea',
                            'class' => 'custom-class',
                        ),
                        array(
                            'name' => __('SMS number', 'airteam'),
                            'desc' => 'Number for sending SMS to',
                            'id' => $prefix3 . 'sms',
                            'type' => 'text',
                            'std' => '+403-4-0344',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),
                        array(
                            'name' => __('Text for Email', 'airteam'),
                            'desc' => 'thomas.gorski@airteam.cameraEmail text to be displayed',
                            'id' => $prefix3 . 'email_title',
                            'type' => 'text',
                            'std' => 'Schreiben Sie uns',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),
                        array(
                            'name' => __('Email address', 'airteam'),
                            'desc' => 'Email to send too',
                            'id' => $prefix3 . 'email',
                            'type' => 'text',
                            'std' => 'thomas.gorski@airteam.camera',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),
                        array(
                            'name' => __('Company Address Title', 'airteam'),
                            'desc' => 'Title address for the company',
                            'id' => $prefix3 . 'address_text',
                            'type' => 'text',
                            'std' => 'Unsere Adresse',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),
                        array(
                            'name' => __('Company Address', 'airteam'),
                            'desc' => 'Address for the company',
                            'id' => $prefix3 . 'address',
                            'type' => 'text',
                            'std' => 'Rigaerstr. 67 10247 Berlin',
                            'class' => 'custom-class',
                            'clone' => false,
                        ),



                    )
                );
            };
        endif;
        };

    $meta_boxes[] = array(
        'id' => 'media_info',
        'title' => __('Media Upload', 'airteam'),
        'post_types' => array('medias'),
        'context' => 'normal',
        'priority' => 'high',
        'fields' => array(
            array(
                'name' => __('Video or Image', 'airteam'),
                'desc' => 'Upload your video or image',
                'id' => 'media_file',
                'type' => 'file_advanced',
                'std' => 'Sed posuere consectetur est at lobortis.',
                'class' => 'custom-class',
                'clone' => false,
            ),
            array(
                'name' => __('Video ID', 'airteam'),
                'desc' => 'Video ID from youtube',
                'id' => 'media_embed_link',
                'type' => 'text',
                'std' => 'elMlxOuFDak',
                'class' => 'custom-class',
                'clone' => false,
            )


        )
    );

    // 2nd meta box
    return $meta_boxes;
}