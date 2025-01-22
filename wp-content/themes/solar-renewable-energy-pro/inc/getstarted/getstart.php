<?php

function solar_renewable_energy_pro_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'solar-renewable-energy-pro'), esc_html__('Get Started', 'solar-renewable-energy-pro'), 'edit_theme_options', 'solar_renewable_energy_pro_guide', 'solar_renewable_energy_pro_mostrar_guide');   
}
add_action( 'admin_menu', 'solar_renewable_energy_pro_gettingstarted' );

function solar_renewable_energy_pro_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Solar Renewable Energy Pro', 'solar-renewable-energy-pro' ) ?> </h2>
			<p><?php esc_html_e( 'Solar Renewable Energy Pro now supports colors, typography custom links for custom post types. Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional website', 'solar-renewable-energy-pro' ) ?></p>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'solar-renewable-energy-pro' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=solar_renewable_energy_pro_guide' ) ); ?>" class="button button-primary get_btn"><?php esc_html_e( 'Get Started With Demo Importer', 'solar-renewable-energy-pro' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'solar_renewable_energy_pro_notice');

function solar_renewable_energy_pro_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getstarted/getstart.css');
}
add_action('admin_enqueue_scripts', 'solar_renewable_energy_pro_admin_theme_style');

function solar_renewable_energy_pro_mostrar_guide() { 
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'solar-renewable-energy-pro' );
?>

<div class="wrapper-info">
	<h2><?php esc_html_e( 'Welcome to Solar Renewable Energy Pro', 'solar-renewable-energy-pro' ); ?> <span class="version"><?php esc_html_e( 'Version', 'solar-renewable-energy-pro' ); ?>: <?php echo esc_html($theme['Version']);?></span></h2>
	<p><?php esc_html_e('Before demo importer first install given plugins, Contact Form 7 and Woocommerce plugin then click on demo importer button to import all the demo contents.','solar-renewable-energy-pro'); ?></p>
	<?php require get_parent_theme_file_path( '/inc/getstarted/demo-importer.php' ); ?>
</div>

<?php } ?>