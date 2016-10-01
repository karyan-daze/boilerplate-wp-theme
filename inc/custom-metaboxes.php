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
                'name'  => __( 'Image', 'airteam' ),
                'desc'  => 'Hero Image',
                'id'    => $prefix3 . 'hero_image',
                'type'  => 'image',
                'class' => 'custom-class',
            ),
        )
    );

    // 2nd meta box
    return $meta_boxes;
}