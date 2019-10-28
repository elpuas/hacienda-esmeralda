<?php
/**
 * Hacienda Esmeralda Theme
 * Functions.php
 *
 * ===== NOTES ==================================================================
 *
 * Unlike style.css, the functions.php of a child theme does not override its
 * counterpart from the parent. Instead, it is loaded in addition to the parent's
 * functions.php. (Specifically, it is loaded right before the parent's file.)
 *
 * In that way, the functions.php of a child theme provides a smart, trouble-free
 * method of modifying the functionality of a parent theme.
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 * @package haciendaesmeralda
 * =============================================================================== */

/**
 * Add parent styles
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 */
function hs_enqueue_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'hs_enqueue_scripts' );

/**
 * Add custom styles
 *
 * * @author Alfredo Navas <elpuas@gmail.com>
 */
function hs_scripts() {
	$script_filemtime = get_stylesheet_directory() . '/custom.min.js';
	wp_enqueue_style( 'kb-main', get_stylesheet_directory_uri() . '/main.min.css', filemtime( $script_filemtime ), true, 'all' );
	wp_enqueue_script( 'kb--custom-script', get_stylesheet_directory_uri() . '/custom.min.js', array(), filemtime( $script_filemtime ), true );
}
add_action( 'wp_enqueue_scripts', 'hs_scripts' );

/**
 * Add page slugs as class in body
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 *
 * @param string $classes body class attribute.
 * @return string
 */
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/**
 * Add custom styles to the admin
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 */
function admin_style() {
	wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri() . '/admin-css/admin.css', array(), '1.1' );
}
add_action( 'admin_enqueue_scripts', 'admin_style' );

/**
 * Add custom styles to the login page
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 */
function hs_login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/admin-css/admin.css', array(), '1.1' );
}
add_action( 'login_enqueue_scripts', 'hs_login_stylesheet' );

/**
 * Function to hide menu items.
 *
 * @author Alfredo Navas <elpuas@gmail.com>
 */
function remove_admin_menu_links() {
	$user = wp_get_current_user();
	if ( $user && isset( $user->user_email ) && 'elpuas@gmail.com' && 'gian@gianko.com' !== $user->user_email ) {
	remove_menu_page( 'tools.php' );
	remove_menu_page( 'themes.php' );
	remove_menu_page( 'options-general.php' );
	remove_menu_page( 'plugins.php' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'upload.php' );
}
}
add_action( 'admin_menu', 'remove_admin_menu_links' );

/**
 * Add a custom footer
 *
 * @author Giancarlo Villalobos
 */
function custom_footer() {
	echo do_shortcode( '[et_pb_section global_module="882"][/et_pb_section]' );
}
add_action( 'et_after_main_content', 'custom_footer' );
