<?php
/**
 * FIXME: Edit Title Content
 *
 * FIXME: Edit Description Content
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 * FIXME: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

if ( ! function_exists( 'cyberchimps_core_setup_theme' ) ):
// FIXME: Fix documentation
function cyberchimps_core_setup_theme() {
	
	// FIXME: Fix documentation	
	// Load core functions file
	require_once( get_template_directory() . '/core/functions.php' );
	
	// FIXME: Fix documentation	
	// Load core hooks file
	require_once( get_template_directory() . '/core/inc/hooks.php' );
	
	// FIXME: Fix documentation
	// Load core options file
	require_once( get_template_directory() . '/core/options/options-init.php' );

	// FIXME: Fix documentation	
	// Load default core settings
	require_once( get_template_directory() . '/core/options/options-core.php' );
	
	// FIXME: Fix documentation	
	// Load Meta Box Class
	require_once( get_template_directory() . '/core/inc/meta-box-class.php' );
	
	// FIXME: Fix documentation	
	// Load Meta Boxes Functions
	require_once( get_template_directory() . '/core/inc/meta-box.php' );

	// Core Translations can be filed in the /inc/languages/ directory
	load_theme_textdomain( 'cyberchimps', get_template_directory() . '/lib/languages' );
	
	// Add support for the Aside Post Formats
	add_theme_support( 'post-formats', array( 'aside' ) );
	
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// FIXME: Fix documentation	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cyberchimps' ),
	) );
}
endif; // cyberchimps_core_setup_theme
add_action( 'after_setup_theme', 'cyberchimps_core_setup_theme' );

// FIXME: Fix documentation
// Register our sidebars and widgetized areas.
function cyberchimps_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Left', 'cyberchimps' ),
		'id' => 'sidebar-left',
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar( array(
		'name' => __( 'Sidebar-Right', 'cyberchimps' ),
		'id' => 'sidebar-right',
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar( array(
		'name' => __( 'Footer Widgets', 'cyberchimps' ),
		'id' => 'Cyber Chimps Framework-footer-widgets',
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'cyberchimps_widgets_init' );


// FIXME: Fix documentation
// Load elements
function cyberchimps_load_elements() {
	require_once( get_template_directory() . '/core/elements/widgets.php' );
	require_once( get_template_directory() . '/core/elements/breadcrumbs.php' );
	require_once( get_template_directory() . '/core/elements/callout.php' );
	require_once( get_template_directory() . '/core/elements/carousel.php' );
	require_once( get_template_directory() . '/core/elements/pagination.php' );
	require_once( get_template_directory() . '/core/elements/portfolio.php' );
	require_once( get_template_directory() . '/core/elements/product.php' );
	require_once( get_template_directory() . '/core/elements/slider.php' );
	require_once( get_template_directory() . '/core/elements/twitter-bar.php' );
	require_once( get_template_directory() . '/core/elements/portfolio-lite.php' );
	require_once( get_template_directory() . '/core/elements/recent-posts.php' );
	require_once( get_template_directory() . '/core/elements/slider-lite.php' );
	require_once( get_template_directory() . '/core/elements/featured-posts.php' );
	require_once( get_template_directory() . '/core/elements/magazine.php' );
}
add_action('after_setup_theme', 'cyberchimps_load_elements');

// FIXME: Fix documentation
// Load elements
function cyberchimps_load_post_types() {
	require_once( get_template_directory() . '/core/inc/slides-post-type.php' );
	require_once( get_template_directory() . '/core/inc/portfolio-post-type.php' );
	require_once( get_template_directory() . '/core/inc/carousel-post-type.php' );
	require_once( get_template_directory() . '/core/inc/boxes-post-type.php' );
}
add_action('after_setup_theme', 'cyberchimps_load_post_types');

function cyberchimps_load_hooks() {
	require_once( get_template_directory() . '/core/hooks/wp-head-hooks.php' );
	require_once( get_template_directory() . '/core/hooks/header-hooks.php' );
	require_once( get_template_directory() . '/core/hooks/blog-hooks.php' );
	require_once( get_template_directory() . '/core/hooks/footer-hooks.php' );
}
add_action('after_setup_theme', 'cyberchimps_load_hooks');