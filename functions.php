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
 * =============================================================================== */
 
function hs_enqueue_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'hs_enqueue_scripts' );

// Custom scripts
add_action( 'wp_enqueue_scripts', 'hs_scripts' );
function hs_scripts() {

	$script_filemtime = get_stylesheet_directory() . '/custom.min.js';

	wp_enqueue_style( 'kb-main', get_stylesheet_directory_uri() . '/main.min.css', filemtime($script_filemtime), true, 'all'  );
	// wp_enqueue_script( 'kb-script', get_stylesheet_directory_uri() . '/vendor.min.js', array(), filemtime($script_filemtime), true );
	wp_enqueue_script( 'kb--custom-script', get_stylesheet_directory_uri() . '/custom.min.js', array(), filemtime($script_filemtime), true );
}

// Page Slug Body Class

function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        }
    return $classes;
    }
add_filter( 'body_class', 'add_slug_body_class' );

// Add Custom Admin Styles

function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/admin-css/admin.css');
  }
  add_action('admin_enqueue_scripts', 'admin_style');

// Add Custom Login Styles

function hs_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/admin-css/admin.css' );
}
add_action( 'login_enqueue_scripts', 'hs_login_stylesheet' );

add_action('admin_menu', 'remove_admin_menu_links');
function remove_admin_menu_links(){
    $user = wp_get_current_user();
    if( $user && isset($user->user_email) && 'elpuas@gmail.com' && 'gian@gianko.com' != $user->user_email ) {
        remove_menu_page('tools.php');
        remove_menu_page('themes.php');
        remove_menu_page('options-general.php');
        remove_menu_page('plugins.php');
        // remove_menu_page('users.php');
        remove_menu_page('edit-comments.php');
        // remove_menu_page('page.php');
        remove_menu_page('upload.php');
        // remove_menu_page( 'edit.php?post_type=page' ); 
        // remove_menu_page( 'edit.php?post_type=videos' );
        // remove_menu_page( 'edit.php' );
		
    }
}

/**
 * Add custom header
*/
/*
function custom_header ( $main_header ) {
        $custom_header .= do_shortcode('[et_pb_section global_module="105"][/et_pb_section]');
	return $custom_header . $main_header;
}

add_filter( 'et_html_main_header', 'custom_header' );
*/

