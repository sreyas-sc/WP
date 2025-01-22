<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_contribute_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_contribute_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_contribute_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_contribute_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_contribute_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="contribute" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="contribute-head">
			<?php if(get_theme_mod('solar_renewable_energy_pro_contribute_main_heading')!=''){ ?>
	            <h3 class="pb-0 m-0">
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_contribute_main_heading')); ?>
	            </h3>
            <?php } ?>
            <img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_contribute_title_img')); ?>">
		</div>
		<div class="row mt-4">
			<div class="col-lg-6 col-md-6 col-sm-12 mt-4">
				<div class="box">
					<h5 class="title p-0"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_contribute_title')); ?></h5>
	                    <p class="post"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_contribute_text1')); ?></p>
	                    <p class="post"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_contribute_text2')); ?></p>
	                <div class="con_media">
		                <div class="btn-content">
		                	<div class="contribute_btn">
		                    	<span class="btn_span"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_contribute_btn_span')); ?></span>
			                    <a href="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_contribute_btn_url')); ?>" class=""><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_contribute_btn')); ?>
			                    </a>
		                	</div>
		                	<span class="btn_icon"><i class="<?php esc_attr_e(get_theme_mod('solar_renewable_energy_pro_contribute_btn_icon')); ?>"></i></span>
		                </div>
	            	</div>
	            </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="left_side">
					<img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_contribute_right_img')); ?>">
				</div>
			</div>
		</div>
	</div>
</section>