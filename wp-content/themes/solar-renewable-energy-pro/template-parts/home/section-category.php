<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_category_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_category_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_category_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="category" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="category-head">
			<?php if(get_theme_mod('solar_renewable_energy_pro_category_main_heading')!=''){ ?>
	            <h3 class="p-0">
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_category_main_heading')); ?>
	            </h3>
            <?php } ?>
            <img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_category_title_img')); ?>">
		</div>
		<div class="row mt-2">
			<?php $category=get_theme_mod('solar_renewable_energy_pro_category_increase');
              for($i=1 ; $i<=$category; $i++) { ?>			
				<div class="col-lg-4 col-sm-6">
          <div class="our-category mt-4">
            <div class="pic">
                <a href="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_category_image_url'.$i)); ?>"><img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_category_image'.$i)); ?>"></a>
            </div>
            <div class="content">
                  <h5 class="m-0"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_category_title'.$i)); ?></h5>
                   <p class="mb-0"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_category_text'.$i)); ?></p>
            </div>
        	</div>
      	</div>
			<?php } ?>
		</div>
	</div>
</section>