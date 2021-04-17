<?php

namespace includes;

class Theme {
  private static $instance = null;

  private function __construct() {
    self::setup();
  }

  public static function get_instance() {
    if (self::$instance == null) {
      self::$instance = new Theme();
    }
    return self::$instance;
  }

  private static function setup() {
    add_action( 'after_setup_theme', [ \get_called_class(), 'me_register_menus' ] );
  }

  public static function me_register_menus() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'mikaeleriksson' ) );
  }
}