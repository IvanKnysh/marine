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



/**
* Slider
**/
function slider() {

	$labels = array(
		'name'                => __( 'Slider', 'text-domain' ),
		'all_items'           => __( 'All slides'),
		'add_new'             => _x( 'Add slide', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Enter slide name', 'text-domain' ),
		'edit_item'           => __( 'Edit slide', 'text-domain' ),
		'search_items'        => __( 'Search slides', 'text-domain' ),
		'not_found'           => __( 'No slides', 'text-domain' )
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 27,
		'menu_icon'           => 'dashicons-images-alt2',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title')
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'slider' );



/**
* Team
**/
function team() {

	$labels = array(
		'name'                => __( 'Team', 'text-domain' ),
		'all_items'           => __( 'All cards'),
		'add_new'             => _x( 'Add card', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Enter card name', 'text-domain' ),
		'edit_item'           => __( 'Edit card', 'text-domain' ),
		'search_items'        => __( 'Search card', 'text-domain' ),
		'not_found'           => __( 'No cards', 'text-domain' )
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 28,
		'menu_icon'           => 'dashicons-images-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title')
	);

	register_post_type( 'team', $args );
}

add_action( 'init', 'team' );



/**
* Email
**/
function email() {

	$labels = array(
		'name'                => __( 'Email', 'text-domain' ),
		'all_items'           => __( 'All email'),
		'add_new'             => _x( 'Add email', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Enter email name', 'text-domain' ),
		'edit_item'           => __( 'Edit email', 'text-domain' ),
		'search_items'        => __( 'Search email', 'text-domain' ),
		'not_found'           => __( 'No email', 'text-domain' )
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 99,
		'menu_icon'           => 'dashicons-email-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array('title')
	);

	register_post_type( 'email', $args );
}

add_action( 'init', 'email' );



/**
* Form
**/
function form() {
	
	ob_start();
	
		get_template_part('includes/form');
	
	return ob_get_clean();
}
add_shortcode( 'form', 'form' );



/**
* Form scripts
**/
function form_scripts() {
	wp_enqueue_script( 'jquery-form' );
	wp_enqueue_script('feedback', get_stylesheet_directory_uri() . '/js/feedback.js', array( 'jquery' ), 1.0, true);

	wp_localize_script(
		'feedback',
		'feedback_object',
		array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'feedback-nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'form_scripts' );



/**
* Action callback
**/
function ajax_action_callback() {

	$name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg = strip_tags($_POST['message']);

	if (!empty($name) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$message = "
            Name: $name \r\n
            Email: $email \r\n
            Message: $msg      
        ";
		wp_mail( "mr.rauber.ik@gmail.com", "Contact Form", $message );

		$post_data = array(
			'post_title'    => $name,
			'post_status'   => 'publish',
			'post_type'		=> 'email'
		);
		$insert = wp_insert_post( $post_data );

		update_field('e-mail', $email, $insert);
		update_field('message', $msg, $insert);

		wp_send_json_success();
		wp_die();
	}

}
add_action( 'wp_ajax_feedback_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_feedback_action', 'ajax_action_callback' );