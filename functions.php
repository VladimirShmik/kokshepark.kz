<?php
/**
 * ragctheme functions and definitions
 * @package kokshepark
 */

add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails');
add_image_size( 'post_thumb' ,  200 , 250 , true);

function my_scripts_method() {
	wp_enqueue_script( 'jquery' );
	$wp_jquery_ver = $GLOBALS['wp_scripts']->registered['jquery']->ver;
	$jquery_ver = $wp_jquery_ver == '' ? '1.11.0' : $wp_jquery_ver;

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.4.1.min.js' );
	wp_enqueue_script( 'jquery' );
}

function register_styles_scripts() {

	wp_register_style('style', get_template_directory_uri() .
	  '/style.css');
	wp_enqueue_style('style');
  }

function koskepark_scripts_css(){
	wp_enqueue_style( 'reset-css', get_template_directory_uri() . '/assets/css/reset.css');

	wp_enqueue_style( 'template-css', get_template_directory_uri() . '/assets/css/template.css');

	wp_enqueue_style( 'page-css', get_template_directory_uri() . '/assets/css/page.css');

}
add_action( 'wp_enqueue_scripts', 'koskepark_scripts_css' );

		add_action('wp_enqueue_scripts', 'register_styles_scripts');
		function kokshepark_js(){
			wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/easing.js' , array('jquery'), true );

			wp_enqueue_script( 'mousewheel-js', get_template_directory_uri() . '/assets/js/mousewheel.js' , array('jquery'), true );

			wp_enqueue_script( 'watch-js', get_template_directory_uri() . '/assets/js/watch.js');
		}
		add_action( 'wp_enqueue_scripts', 'kokshepark_js' );



require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'koksheparktheme' ),
	'left_menu' => __( 'Left Menu', 'koksheparktheme' )

	) );
	function register_my_widgets(){
		register_sidebar( array(
			'name' => "Левый виджет",
			'id' => 'sidebar-left',
			'description' => 'Материалы виджета слева',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => "</section>\n",
			'before_title'  => '<h2 class="widget-title">',
			'after_title'  => '</h2>',
		) );
		register_sidebar( array(
			'name' => "Правый виджет",
			'id' => 'sidebar-right',
			'description' => 'Материалы виджета справа',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => "</section>\n",
			'before_title'  => '<h2 class="widget-title">',
			'after_title'  => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'register_my_widgets' );

?>