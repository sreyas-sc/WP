<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_newsletter_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_newsletter_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_newsletter_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_newsletter_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_newsletter_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="newsletter" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="newsletter_content">
			<div class="">
			<?php if(get_theme_mod('solar_renewable_energy_pro_newsletter_text')!=''){ ?>
	            <p class="p-0">
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_newsletter_text')); ?>
	            </p>
            <?php } ?>
            <?php if(get_theme_mod('solar_renewable_energy_pro_newsletter_main_heading')!=''){ ?>
	            <h3>
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_newsletter_main_heading')); ?>
	            </h3>
            <?php } ?>
			</div>
			<div class="newsletter_form pt-3">
            <?php if(get_theme_mod('solar_renewable_energy_pro_newsletter_shortcode')!=""){ ?>
				<?php echo do_shortcode(get_theme_mod('solar_renewable_energy_pro_newsletter_shortcode')); ?>
			<?php } ?>
			</div>
		</div>	
	</div>
</section>