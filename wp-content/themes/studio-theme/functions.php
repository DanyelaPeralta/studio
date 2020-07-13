<?php

// =====================
// = LOGO EN WORDPRESS =
// =====================

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

// ========
// = MENU =
// ========
add_theme_support( 'nav-menus' );
register_nav_menus(array('menu' => __('menu')));

// ===========
// = SIDEBAR =
// ===========

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'			=> 'Footer izquierdo',
		'id' 			=> 'footer_izq',
		'before_widget' => '<div class="side-nav aside_offscreen">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="widgettitle">',
		'after_title' 	=> '</h2>',
	));
	register_sidebar(array(
		'name'			=> 'Footer Centro',
		'id' 			=> 'footer_centro',
		'before_widget' => '<div class="side-nav aside_left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
	));
	
	register_sidebar(array(
		'name'			=> 'Footer Derecho',
		'id' 			=> 'footer_der',
		'before_widget' => '<div class="side-nav aside_left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
	));
	
}





// ==============
// = THUMBNAILS =
// ==============
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100, true );
?>