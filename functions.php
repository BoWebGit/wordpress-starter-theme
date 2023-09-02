<?php 


function bo_web_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-primary' => esc_html__( 'Primary', 'bo-web' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bo_web_setup' );


function bo_web_scripts() {
	wp_enqueue_style( 'bo-web-style', get_stylesheet_uri(), array());

	wp_enqueue_script( 'bo-web-script', get_template_directory_uri() . '/assets/js/mine.js', array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bo_web_scripts' );


require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/template-custom-post-type.php';


?>