<?php

// Register Nav
function tr_register_menus() {
    register_nav_menus(
        array(
	    'primary-menu' => __( 'Primary Menu', 'tr' ),
	   )
    );
}
add_action( 'init', 'tr_register_menus' );

// title tag
add_theme_support( 'title-tag' );

// remove update now
if (!current_user_can('edit_users')) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}

// Designedby Filter
function remove_footer_admin () {
    echo 'Designed & Developed By Thirdrail Creative';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Admin: Remove Admin Bar Items
function remove_admin_bar_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_logo');

// Hide ACF admin
// add_filter('acf/settings/show_admin', '__return_false');
