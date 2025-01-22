<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_partner_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_partner_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_partner_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_partner_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_partner_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="partner" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="owl-carousel mt-5">
			<?php $count=get_theme_mod('solar_renewable_energy_pro_partner_number');
			for($i=1;$i<=$count;$i++) { ?>
				<div class="partner_content">
					<img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_partner_image'.$i)); ?>">
	            </div>
			<?php } ?>
		</div>
	</div>
</section>