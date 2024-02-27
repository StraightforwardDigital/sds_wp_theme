<?php 
/* Proper way to enqueue scripts and styles */
function sds_styles() {
	wp_enqueue_style('style-name', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'sds_styles');

/* Enqueue scripts */
function my_theme_enqueue_scripts() {
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

