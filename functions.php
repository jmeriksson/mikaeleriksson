<?php
/**
 * Main function file of the mikaeleriksson theme
 */

if ( ! defined ( 'ABSPATH' ) ) {
  die;
}

require get_stylesheet_directory() . '/includes/Theme.php';

$theme = includes\Theme::get_instance();
