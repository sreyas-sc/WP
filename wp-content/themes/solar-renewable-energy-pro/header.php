<?php
/**
 * The Header for our theme.
 *
 * @package solar-renewable-energy-pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
<?php
  if ( function_exists( 'wp_body_open' ) ) {
      wp_body_open();
  } else {
      do_action( 'wp_body_open' );
  }
?>
<?php if( get_theme_mod('solar_renewable_energy_pro_theme_loader') == 1 ) { ?>
  <div class="preloader">
    <div class="load">
      <hr/><hr/><hr/><hr/>
    </div>
  </div>
<?php }?>
<header id="masthead" class="site-header">
  <div id="header">
    <div class="container">
      <div class="header-wrap">
        <?php 
          get_template_part('template-parts/header/topbar'); 
          get_template_part('template-parts/header/content-header'); 
        ?>
      </div>
    </div>
  </div>
</header>