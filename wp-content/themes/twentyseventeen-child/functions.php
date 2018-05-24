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
?>