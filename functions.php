<?php
/**
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 */

/**
 * Nandedemodakara only works in WordPress 4.7 or later.
 */

add_theme_support( 'menus' );

add_theme_support( 'title-tag' );

/**
 * スクリプトとスタイルを正しくエンキューする
 */
function my_enqueue_style() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css' );
	wp_enqueue_style( 'fontawsome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );

register_sidebar(
	array(
		'id'           => 'sidebar-1',
		'before_title' => '<h3>',
		'after_title'  => '</h3>',
	)
);
