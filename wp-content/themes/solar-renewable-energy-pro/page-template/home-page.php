<?php
/**
 * Template Name: Home Page
 */
get_header();?>
<?php get_template_part( 'template-parts/home/slider' ); ?>
<?php	
	$section_order ='';

	$section_order = explode( ',', get_theme_mod( 'solar_renewable_energy_pro_section_ordering_settings_repeater') );
	
    foreach( $section_order as $key => $value ){
	   if($value !=''){ 

	   	get_template_part( 'template-parts/home/section', $value );

        }
    } 

get_footer(); ?>