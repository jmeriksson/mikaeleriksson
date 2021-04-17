<?php
/**
 * Standard header of the mikaeleriksson theme.
 */

if ( ! defined ( 'ABSPATH' ) ) {
  die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php the_title(); ?></title>
  
  <!-- FAVICON -->
  <!-- Generate favicon with https://realfavicongenerator.net/ -->

  <!-- OPEN GRAPH -->
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:description" content="">
  
  <!-- GOOGLE ANALYTICS -->
  <!-- Paste GA script here -->

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="header-wrapper">
        <div class="header-logo">
          <a href="<?php esc_url( home_url() ); ?>">mikaeleriksson.nu</a>
        </div>
        <div class="header-desktop-nav">
          <nav>
            <?php
              $nav_args = [
                'menu'      => 'primary',
                'container' => false,
                'echo'      => true,
              ];
              wp_nav_menu( $nav_args );
            ?>
          </nav>
        </div>
        <div class="header-mobile-nav">
          <div class="mobile-nav-toggle" id="js-mobile-nav-toggle">
            <span class="mobile-nav-toggle__bar"></span>
            <span class="mobile-nav-toggle__bar"></span>
            <span class="mobile-nav-toggle__bar"></span>
          </div>
        </div>
      </div>
    </div>
  </header>
