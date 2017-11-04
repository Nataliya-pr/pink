<?php
// Theme css & js

function pink_scripts_styles() {
	// wp_enqueue_style( 'pacifico-font', '//fonts.googleapis.com/css?family=Pacifico|Open+Sans:300,400,700,800' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'pink-styles', get_template_directory_uri() . '/css/all.css' );
	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '' );
	wp_enqueue_script( 'pink-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'pink_scripts_styles' );