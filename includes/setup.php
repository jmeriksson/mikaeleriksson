<?php
/**
 * This file handles theme setup including enqueueing scripts and styles, and
 *   registering menus.
 */

if ( ! defined( 'ABSPATH' ) ) {
  die;
}

if ( ! function_exists( 'me_register_menus' ) ) {
  /**
   * Registers theme menu(s).
   *
   * @return void
   */
  function me_register_menus() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'mikaeleriksson' ) );
  }
}
add_action( 'after_setup_theme', 'me_register_menus' );

if ( ! function_exists( 'me_enqueue_theme_style' ) ) {
  function me_enqueue_theme_style() {
    $style_date  = date( 'YmdHi', filemtime( get_template_directory() . '/dist/css/style.css' ) );
    $script_date = date( 'YmdHi', filemtime( get_template_directory() . '/dist/js/main.js' ) );

    wp_enqueue_style(
      'me_theme_style',
      get_stylesheet_uri()
    );

    wp_enqueue_style(
      'me_theme_stylesheet',
      get_template_directory_uri() . '/dist/css/style.css',
      [],
      $style_date
    );

    wp_enqueue_script(
      'me_theme_script',
      get_template_directory_uri() . '/dist/js/main.js',
      [ 'jquery' ],
      $script_date
    );
  }
}
add_action( 'wp_enqueue_scripts', 'me_enqueue_theme_style' );
