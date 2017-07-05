<?php
/**
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.min.css', array(), '2.9.2', 'all' );

	wp_enqueue_style( 'appended-stylesheet', get_template_directory_uri() . '/assets/stylesheets/append.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Lora:400,700', '1.0.0', false );

	wp_enqueue_style( 'animate', 'https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css', '3.5.2', false);

	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	wp_enqueue_script( 'modernizr', 'https://cdn.jsdelivr.net/modernizr/3.3.1/modernizr.min.js', '3.3.1', false );

	wp_enqueue_script( 'fastclick', 'https://cdn.jsdelivr.net/fastclick/1.0.6/fastclick.min.js', '1.0.6', false );

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.min.js', array('jquery'), '2.9.2', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;
