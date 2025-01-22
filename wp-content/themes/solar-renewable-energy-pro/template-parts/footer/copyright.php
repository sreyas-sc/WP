<?php
if ( get_theme_mod( 'solar_renewable_energy_pro_footer_copy_bgcolor' ) ) {
	$about_backg = 'background-color:' . esc_attr( get_theme_mod( 'solar_renewable_energy_pro_footer_copy_bgcolor' ) ) . ';';
} elseif ( get_theme_mod( 'solar_renewable_energy_pro_footer_copy_bgimage' ) ) {
	$about_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'solar_renewable_energy_pro_footer_copy_bgimage' ) ) . '\')';
} else {
	$about_backg = '';
}
?>
<div class="copyright" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<?php get_template_part( 'template-parts/home/contact-us' ); ?>
		<div class="row copy-text">
			<div class="col-lg-12 col-md-12">
				<p><?php echo esc_html( get_theme_mod( 'solar_renewable_energy_pro_footer_copy' ) ); ?><span class="credit_link"><?php echo esc_html( solar_renewable_energy_pro_credit_link() ); ?></span></p>
			</div>
			<a href="javascript:" id="return-to-top"><i class="fas fa-angle-double-up"></i></a>
		</div>
	</div>
</div>