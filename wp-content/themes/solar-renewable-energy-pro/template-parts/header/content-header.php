<?php
/**
 * Template part for displaying header content
 *
 * @package solar_renewable_energy_pro
 */
?>
<div class="container nav_wrap">
    <div class="main-header-box">
      <div class="row bg-media">
        <div class="col-lg-9 offset-lg-1 col-md-9 col-sm-8 col-4 header-nav">
          <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6  align-self-center">
        	<div class="header_btn">
          		<a href="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_header_section_button_url')); ?>" class=""><?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_header_section_button')); ?></a>
          	</div>
        </div>
      </div>
    </div>
  </div>
</div>