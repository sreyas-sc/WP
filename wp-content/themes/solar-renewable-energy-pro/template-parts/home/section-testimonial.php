<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_testimonial_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_testimonial_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_testimonial_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_testimonial_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_testimonial_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="testimonial" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="testimonial_head">
			<?php if(get_theme_mod('solar_renewable_energy_pro_testimonial_main_heading')!=''){ ?>
	            <h3 class="pb-0 m-0">
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_testimonial_main_heading')); ?>
	            </h3>
	        <?php } ?>
	        <img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_testimonail_title_img')); ?>">
    	</div>
        <div class="owl-carousel mt-4">
        	<?php 
        	$testimonial_count = get_theme_mod('solar_renewable_energy_pro_testimonial_count');
        	for($i=1 ; $i<=$testimonial_count ; $i++) { ?>
	        	<div class="testimonial">
	                <div class="pic">
	                    <img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_testimonial_img'.$i)); ?>" alt="">
	                </div>
	                <div class="testimonial-content">
	                    <p class="description">
	                        <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_testimonail_text'.$i)); ?>
	                    </p>
	                    <h5 class="testimonial-title"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_testimonial_title'.$i)); ?></h5>
	                </div>
	            </div>
        	<?php } ?>
        </div>
	</div>
</section>
