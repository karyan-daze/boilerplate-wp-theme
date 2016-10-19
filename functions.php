<?php
/**
 * understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 *
 *
 */

$GLOBALS['meta_tags'] = 'Airteam, Drohnen';

require get_template_directory() . '/inc/setup.php';

require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/activation.php';
add_action( 'tgmpa_register', 'airteam_register_required_plugins' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Load functions to secure your WP install.
*/
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Load custom WordPress nav walker.
*/
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
* Load custom WordPress gallery.
*/
require get_template_directory() . '/inc/bootstrap-wp-gallery.php';


/**
* Load WooCommerce functions.
*/
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load all the required Custom Posts
 */

require get_template_directory() . '/inc/custom-posts.php';

/**
 * Load all the required Metaboxes for the Custom Posts
 */

require get_template_directory() . '/inc/custom-metaboxes.php';

/**
 * Load all the required Functions for calling the queries
 */

require get_template_directory() . '/inc/queries.php';

require get_template_directory() . '/inc/contact_request.php';

require get_template_directory() . '/inc/helpers.php';

