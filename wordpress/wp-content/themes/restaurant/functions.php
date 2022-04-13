<?php
	
	add_theme_support( 'post-thumbnails' );
	function custom_style()
	{
		wp_enqueue_style('custom-style', get_stylesheet_uri());
		wp_enqueue_style('custom-css-style', get_stylesheet_directory_uri() . '/assets/css/custom.css');
	}
	add_action('wp_enqueue_scripts', 'custom_style');
?>
