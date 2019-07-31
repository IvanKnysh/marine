<?php
/**
 * Register style and script
 **/
function add_style_and_scrips() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js' );
    wp_enqueue_script( 'slick.js', get_template_directory_uri() . '/js/slick.js' );
    wp_enqueue_script( 'animate-plus.min.js', get_template_directory_uri() . '/js/animate-plus.min.js' );
    wp_enqueue_style( 'reset.css', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'slick-theme.css', get_template_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'add_style_and_scrips' );



/**
 * ACF Options Page
 */
$args = array(
    'page_title' => 'Theme settings',
    'menu_title' => 'Theme settings',
    'menu_slug' => 'theme_settings',
    'position' => 101,
    'icon_url' => get_theme_file_uri('img/settings.png'),
    'update_button'		=> __('Update', 'acf'),
    'updated_message'	=> __("Theme settings updated", 'acf'),

);
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( $args );
}



/**
 * Register menu
 **/
register_nav_menus(array(
    'main_menu'    => 'Мenu'
));
