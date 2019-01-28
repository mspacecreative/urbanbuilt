<?php

// MAIN STYLESHEET
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
	
	//wp_register_style('para-styles', get_stylesheet_directory_uri() . '/js/dzsparallaxer/dzsparallaxer.css', array(), '1.0', 'all');
	//wp_enqueue_style('para-styles');
	
	wp_register_style('animations', get_stylesheet_directory_uri() . '/css/animations.css', array(), '1.0', 'all');
	wp_enqueue_style('animations');
	
	wp_register_style('typekit', 'https://use.typekit.net/izp1qav.css', array(), '1.0', 'all');
	wp_enqueue_style('typekit');
	
}

// FOOTER SCRIPTS
function footer_scripts() {
	
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('animate', get_stylesheet_directory_uri() . '/js/css3-animate-it.js', array('jquery'), null, true);
	wp_enqueue_script('animate');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_register_script('animate-scroll', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), null, true);
	wp_enqueue_script('animate-scroll');
	
	wp_register_script( 'fancybox-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script('fancybox-cdn');
	
	//wp_register_script('para-script', get_stylesheet_directory_uri() . '/js/dzsparallaxer/dzsparallaxer.js', array('jquery'), null, true);
	//wp_enqueue_script('para-script');
}

// PROJECT GALLERY LOOP
function loopProjects() {
	ob_start();
		get_template_part('includes/loop-projects');
	return ob_get_clean();
}

// ACTIONS, OPTIONS AND FILTERS
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('init', 'footer_scripts');
// PROJECTS LOOP
add_shortcode( 'project_galleries', 'loopProjects' );