<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyA2UY-DMmke5CQHhXon5Zuwme_La0ixI-8';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

function employee_init() {
    $args = array(
      'label' => 'Employee',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'employee'),
        'query_var' => true,
        'menu_icon' => 'dashicons-universal-access',
        'menu_icon' => 'dashicons-universal-access',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'employee', $args );
}
add_action( 'init', 'employee_init' );

?>