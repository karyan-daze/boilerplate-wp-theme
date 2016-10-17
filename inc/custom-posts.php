<?php
/**
 * Loading the custom posts
 * Benefits:
 * @params: benefit_image: url
 * @params benefit_description: text
 * Partners:
 * @params: partner_image: url
 * @params:
 * Media
 * @params: media_caption: text
 * @params: media_image: url
 * @params: media_video: url
 * register taxonomy
 * @category: (taxonomy): image or video
 *
 * Testimonials
 * @params: customer_description: text
 * @params: customer_name: text
 * @params: customer_job_title: text
 * @params: customer_image: url
 *
 * Teams
 * @params team_name
 * @params team_picture ( featured_image so post thumbnail )
 * @params team_position
 * @params
 *
 */

if ( ! function_exists( 'media_taxonomy' ) ) {

// Register Custom Taxonomy
    function media_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Media Category', 'Taxonomy General Name', 'airteam' ),
            'singular_name'              => _x( 'Media Category', 'Taxonomy Singular Name', 'airteam' ),
            'menu_name'                  => __( 'Media Category', 'airteam' ),
            'all_items'                  => __( 'All Categories', 'airteam' ),
            'parent_item'                => __( 'Parent Item', 'airteam' ),
            'parent_item_colon'          => __( 'Parent Item:', 'airteam' ),
            'new_item_name'              => __( 'New Category', 'airteam' ),
            'add_new_item'               => __( 'Add New Category', 'airteam' ),
            'edit_item'                  => __( 'Edit Category', 'airteam' ),
            'update_item'                => __( 'Update Category', 'airteam' ),
            'view_item'                  => __( 'View Category', 'airteam' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'airteam' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'airteam' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'airteam' ),
            'popular_items'              => __( 'Popular Items', 'airteam' ),
            'search_items'               => __( 'Search Items', 'airteam' ),
            'not_found'                  => __( 'Not Found', 'airteam' ),
            'no_terms'                   => __( 'No items', 'airteam' ),
            'items_list'                 => __( 'Items list', 'airteam' ),
            'items_list_navigation'      => __( 'Items list navigation', 'airteam' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => false,
            'rewrite'                    => false,
        );
        register_taxonomy( 'media_category', array( 'medias' ), $args );

    }
    add_action( 'init', 'media_taxonomy', 0 );

}

if ( ! function_exists('register_benefits') ) {

// Register the benefits
    function register_benefits() {

        $labels = array(
            'name'                  => _x( 'Benefits', 'Post Type General Name', 'airteam' ),
            'singular_name'         => _x( 'benefit', 'Post Type Singular Name', 'airteam' ),
            'menu_name'             => __( 'Benefits', 'airteam' ),
            'name_admin_bar'        => __( 'Benefits', 'airteam' ),
            'archives'              => __( 'Item Archives', 'airteam' ),
            'parent_item_colon'     => __( 'Parent Item:', 'airteam' ),
            'all_items'             => __( 'All Benefits', 'airteam' ),
            'add_new_item'          => __( 'Add New Benefit', 'airteam' ),
            'add_new'               => __( 'Add New Benefit', 'airteam' ),
            'new_item'              => __( 'New Benefit', 'airteam' ),
            'edit_item'             => __( 'Edit Benefit', 'airteam' ),
            'update_item'           => __( 'Update Benefit', 'airteam' ),
            'view_item'             => __( 'View Benefit', 'airteam' ),
            'search_items'          => __( 'Search Item', 'airteam' ),
            'not_found'             => __( 'Not found', 'airteam' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'airteam' ),
            'featured_image'        => __( 'Featured Image', 'airteam' ),
            'set_featured_image'    => __( 'Set featured image', 'airteam' ),
            'remove_featured_image' => __( 'Remove featured image', 'airteam' ),
            'use_featured_image'    => __( 'Use as featured image', 'airteam' ),
            'insert_into_item'      => __( 'Insert into item', 'airteam' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'airteam' ),
            'items_list'            => __( 'Items list', 'airteam' ),
            'items_list_navigation' => __( 'Items list navigation', 'airteam' ),
            'filter_items_list'     => __( 'Filter items list', 'airteam' ),
        );
        $args = array(
            'label'                 => __( 'benefit', 'airteam' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 10,
            'menu_icon'             => 'dashicons-megaphone',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
        );
        register_post_type( 'benefits', $args );

    }
    add_action( 'init', 'register_benefits', 0 );

}

if ( ! function_exists('register_partners') ) {

// Register Custom Post Type
    function register_partners() {

        $labels = array(
            'name'                  => _x( 'Partners', 'Post Type General Name', 'airteam' ),
            'singular_name'         => _x( 'partner', 'Post Type Singular Name', 'airteam' ),
            'menu_name'             => __( 'Partners', 'airteam' ),
            'name_admin_bar'        => __( 'Partners', 'airteam' ),
            'archives'              => __( 'Item Archives', 'airteam' ),
            'parent_item_colon'     => __( 'Parent Item:', 'airteam' ),
            'all_items'             => __( 'All Partners', 'airteam' ),
            'add_new_item'          => __( 'Add New Item', 'airteam' ),
            'add_new'               => __( 'Add New Partner', 'airteam' ),
            'new_item'              => __( 'New Partner', 'airteam' ),
            'edit_item'             => __( 'Edit Partner', 'airteam' ),
            'update_item'           => __( 'Update Partner', 'airteam' ),
            'view_item'             => __( 'View Partner', 'airteam' ),
            'search_items'          => __( 'Search Item', 'airteam' ),
            'not_found'             => __( 'Not found', 'airteam' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'airteam' ),
            'featured_image'        => __( 'Featured Image', 'airteam' ),
            'set_featured_image'    => __( 'Set featured image', 'airteam' ),
            'remove_featured_image' => __( 'Remove featured image', 'airteam' ),
            'use_featured_image'    => __( 'Use as featured image', 'airteam' ),
            'insert_into_item'      => __( 'Insert into item', 'airteam' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'airteam' ),
            'items_list'            => __( 'Items list', 'airteam' ),
            'items_list_navigation' => __( 'Items list navigation', 'airteam' ),
            'filter_items_list'     => __( 'Filter items list', 'airteam' ),
        );
        $args = array(
            'label'                 => __( 'partner', 'airteam' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 10,
            'menu_icon'             => 'dashicons-admin-users',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
        );
        register_post_type( 'partners', $args );

    }
    add_action( 'init', 'register_partners', 0 );

}

if ( ! function_exists('register_media') ) {

// Register Custom Post Type
    function register_media() {

        $labels = array(
            'name'                  => _x( 'Media', 'Post Type General Name', 'airteam' ),
            'singular_name'         => _x( 'media', 'Post Type Singular Name', 'airteam' ),
            'menu_name'             => __( 'Multimedia', 'airteam' ),
            'name_admin_bar'        => __( 'Multimedia', 'airteam' ),
            'archives'              => __( 'Item Archives', 'airteam' ),
            'parent_item_colon'     => __( 'Parent Item:', 'airteam' ),
            'all_items'             => __( 'All Items', 'airteam' ),
            'add_new_item'          => __( 'Add New Item', 'airteam' ),
            'add_new'               => __( 'Add New Media', 'airteam' ),
            'new_item'              => __( 'New Media', 'airteam' ),
            'edit_item'             => __( 'Edit Media', 'airteam' ),
            'update_item'           => __( 'Update Media', 'airteam' ),
            'view_item'             => __( 'View Media', 'airteam' ),
            'search_items'          => __( 'Search Item', 'airteam' ),
            'not_found'             => __( 'Not found', 'airteam' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'airteam' ),
            'featured_image'        => __( 'Featured Image', 'airteam' ),
            'set_featured_image'    => __( 'Set featured image', 'airteam' ),
            'remove_featured_image' => __( 'Remove featured image', 'airteam' ),
            'use_featured_image'    => __( 'Use as featured image', 'airteam' ),
            'insert_into_item'      => __( 'Insert into item', 'airteam' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'airteam' ),
            'items_list'            => __( 'Items list', 'airteam' ),
            'items_list_navigation' => __( 'Items list navigation', 'airteam' ),
            'filter_items_list'     => __( 'Filter items list', 'airteam' ),
        );
        $args = array(
            'label'                 => __( 'media', 'airteam' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'revisions', 'custom-fields', ),
            'hierarchical'          => false,
            'taxonomy'              => array(''),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 10,
            'menu_icon'             => 'dashicons-images-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
        );
        register_post_type( 'medias', $args );

    }
    add_action( 'init', 'register_media', 0 );

}

if ( ! function_exists('register_testimonials') ) {

// Register Custom Post Type
    function register_testimonials() {

        $labels = array(
            'name'                  => _x( 'Testimonial', 'Post Type General Name', 'airteam' ),
            'singular_name'         => _x( 'testimonial', 'Post Type Singular Name', 'airteam' ),
            'menu_name'             => __( 'Testimonials', 'airteam' ),
            'name_admin_bar'        => __( 'Testimonials', 'airteam' ),
            'archives'              => __( 'Item Archives', 'airteam' ),
            'parent_item_colon'     => __( 'Parent Item:', 'airteam' ),
            'all_items'             => __( 'All Items', 'airteam' ),
            'add_new_item'          => __( 'Add New Item', 'airteam' ),
            'add_new'               => __( 'Add New Testimonial', 'airteam' ),
            'new_item'              => __( 'New Testimonial', 'airteam' ),
            'edit_item'             => __( 'Edit Testimonial', 'airteam' ),
            'update_item'           => __( 'Update Testimonial', 'airteam' ),
            'view_item'             => __( 'View Testimonial', 'airteam' ),
            'search_items'          => __( 'Search Item', 'airteam' ),
            'not_found'             => __( 'Not found', 'airteam' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'airteam' ),
            'featured_image'        => __( 'Featured Image', 'airteam' ),
            'set_featured_image'    => __( 'Set featured image', 'airteam' ),
            'remove_featured_image' => __( 'Remove featured image', 'airteam' ),
            'use_featured_image'    => __( 'Use as featured image', 'airteam' ),
            'insert_into_item'      => __( 'Insert into item', 'airteam' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'airteam' ),
            'items_list'            => __( 'Items list', 'airteam' ),
            'items_list_navigation' => __( 'Items list navigation', 'airteam' ),
            'filter_items_list'     => __( 'Filter items list', 'airteam' ),
        );
        $args = array(
            'label'                 => __( 'testimonial', 'airteam' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 10,
            'menu_icon'             => 'dashicons-format-chat',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => false,
            'capability_type'       => 'page',
        );
        register_post_type( 'testimonials', $args );

    }
    add_action( 'init', 'register_testimonials', 0 );

}

if ( ! function_exists('register_teams') ) {

// Register Custom Post Type
    function register_teams() {

        $labels = array(
            'name'                  => _x( 'Teams', 'Post Type General Name', 'airteam' ),
            'singular_name'         => _x( 'team', 'Post Type Singular Name', 'airteam' ),
            'menu_name'             => __( 'Team', 'airteam' ),
            'name_admin_bar'        => __( 'Team', 'airteam' ),
            'archives'              => __( 'Item Archives', 'airteam' ),
            'parent_item_colon'     => __( 'Parent Item:', 'airteam' ),
            'all_items'             => __( 'All Team Members', 'airteam' ),
            'add_new_item'          => __( 'Add New Item', 'airteam' ),
            'add_new'               => __( 'Add New Team Member', 'airteam' ),
            'new_item'              => __( 'New Team Member', 'airteam' ),
            'edit_item'             => __( 'Edit Team Member', 'airteam' ),
            'update_item'           => __( 'Update Team Member', 'airteam' ),
            'view_item'             => __( 'View Team Member', 'airteam' ),
            'search_items'          => __( 'Search Team Member', 'airteam' ),
            'not_found'             => __( 'Not found', 'airteam' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'airteam' ),
            'featured_image'        => __( 'Featured Image', 'airteam' ),
            'set_featured_image'    => __( 'Set featured image', 'airteam' ),
            'remove_featured_image' => __( 'Remove featured image', 'airteam' ),
            'use_featured_image'    => __( 'Use as featured image', 'airteam' ),
            'insert_into_item'      => __( 'Insert into item', 'airteam' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'airteam' ),
            'items_list'            => __( 'Items list', 'airteam' ),
            'items_list_navigation' => __( 'Items list navigation', 'airteam' ),
            'filter_items_list'     => __( 'Filter items list', 'airteam' ),
        );
        $args = array(
            'label'                 => __( 'team', 'airteam' ),
            'description'           => __( 'Team', 'airteam' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-users',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'teams', $args );

    }
    add_action( 'init', 'register_teams', 0 );

}

// Register Custom Post Type
function register_faqs() {

    $labels = array(
        'name'                  => _x( 'FAQS', 'Post Type General Name', 'airteam' ),
        'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'airteam' ),
        'menu_name'             => __( 'FAQS', 'airteam' ),
        'name_admin_bar'        => __( 'FAQS', 'airteam' ),
        'archives'              => __( 'Item Archives', 'airteam' ),
        'parent_item_colon'     => __( 'Parent Item:', 'airteam' ),
        'all_items'             => __( 'FAQs', 'airteam' ),
        'add_new_item'          => __( 'Add New Item', 'airteam' ),
        'add_new'               => __( 'Add New FAQ', 'airteam' ),
        'new_item'              => __( 'New FAQ item', 'airteam' ),
        'edit_item'             => __( 'Edit FAQ', 'airteam' ),
        'update_item'           => __( 'Update FAQ', 'airteam' ),
        'view_item'             => __( 'View FAQ', 'airteam' ),
        'search_items'          => __( 'Search Item', 'airteam' ),
        'not_found'             => __( 'Not found', 'airteam' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'airteam' ),
        'featured_image'        => __( 'Featured Image', 'airteam' ),
        'set_featured_image'    => __( 'Set featured image', 'airteam' ),
        'remove_featured_image' => __( 'Remove featured image', 'airteam' ),
        'use_featured_image'    => __( 'Use as featured image', 'airteam' ),
        'insert_into_item'      => __( 'Insert into item', 'airteam' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'airteam' ),
        'items_list'            => __( 'Items list', 'airteam' ),
        'items_list_navigation' => __( 'Items list navigation', 'airteam' ),
        'filter_items_list'     => __( 'Filter items list', 'airteam' ),
    );
    $args = array(
        'label'                 => __( 'FAQ', 'airteam' ),
        'description'           => __( 'FAQ info', 'airteam' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', ),
        'taxonomies'            => array(''),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-info',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'page',
    );
    register_post_type( 'faq', $args );

}
add_action( 'init', 'register_faqs', 0 );