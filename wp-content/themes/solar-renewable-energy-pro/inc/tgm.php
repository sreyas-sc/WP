<?php

	require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function solar_renewable_energy_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'solar-renewable-energy-pro' ),
			'slug'             => 'contact-form-7',
			'source'           => 'https://downloads.wordpress.org/plugin/contact-form-7.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'solar-renewable-energy-pro' ),
			'slug'             => 'woocommerce',
			'source'           => 'https://downloads.wordpress.org/plugin/woocommerce.zip',
			'required'         => true,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'solar_renewable_energy_pro_register_recommended_plugins' );