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

add_filter( 'show_admin_bar', '__return_false' );
