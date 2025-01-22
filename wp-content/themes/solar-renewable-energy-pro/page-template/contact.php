<?php
/**
 * Template Name: Contact
*/

get_header(); ?>
<?php do_action('solar_renewable_energy_pro_before_contact_title'); ?>
<div class="contact-box">
	<div class="container">
		<div class="contact-page-details">
			<div class="row">
				<?php if ( get_theme_mod('solar_renewable_energy_pro_address_title') != "" ) { ?>
					<div class="col-lg-4">
						<div class="contact-address">
							<div class="inner-cont">
								<i class="<?php echo esc_attr(get_theme_mod('solar_renewable_energy_pro_contactpage_address_icon')); ?>"></i>
								<div class="c_content media-small">
									<span class=""><?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_address_title')); ?></span>
									<p class="m-0"><?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_address')); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
				<?php if ( get_theme_mod('solar_renewable_energy_pro_contactpage_email_title') != "" ) { ?>
					<div class="col-lg-4">
						<div class="contact-email">
							<div class="inner-cont">
								<i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_contactpage_email_icon')); ?>"></i>
								<div class="c_content media-small">
									<span class="w-100"><?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_contactpage_email_title')); ?></span>
									<p class="m-0"><?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_contactpage_email_one')); ?></p>
									<p class="m-0"><?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_contactpage_email_two')); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php }?>		
				<?php if ( get_theme_mod('solar_renewable_energy_pro_contactpage_phone_title') != "" ) { ?>
					<div class="col-lg-4">
						<div class="contact-phone">
							<div class="inner-cont">
								<i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_contactpage_phone_icon')); ?>"></i>
								<div class="c_content media-small">
					 				<span class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_contactpage_phone_title')); ?>"><?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_contactpage_phone_title')); ?></span>
					 				<p class="m-0"><?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_contactpage_phone_one')); ?></p>
					 				<p class="m-0"><?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_contactpage_phone_two')); ?></p>
					 			</div>
					 		</div>
			 			</div>
			 		</div>
	 			<?php }?>
			</div>
		</div>
		<div class="contact-color-bg row mb-5">
			<div class="contac_form col-lg-6 col-md-12">

				<?php if(get_theme_mod('solar_renewable_energy_pro_contactpage_form_title',true) != ''){ ?>
					<h3>
						<?php echo esc_html_e(get_theme_mod('solar_renewable_energy_pro_contactpage_form_title')); ?>
					</h3>
				<?php } ?>
				<?php while ( have_posts() ) : the_post(); ?>
		        	<?php the_content(); ?>
		    	<?php endwhile; // end of the loop. ?>
			</div>
			<div class="col-lg-6 col-md-12">
				<?php do_action('solar_renewable_energy_pro_before_map'); ?>
					<div class="google-map p-0" id="map">
						<?php if ( get_theme_mod('solar_renewable_energy_pro_address_latitude',true) != "" && get_theme_mod('solar_renewable_energy_pro_address_longitude',true) != "" ) {?>
						  	<embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('solar_renewable_energy_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('solar_renewable_energy_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
						<?php }?>
					</div>
				<?php do_action('solar_renewable_energy_pro_after_map'); ?>
			</div>
		</div>
	</div>	
	
</div>
<?php do_action('solar_renewable_energy_pro_before_footer'); ?>

<?php get_footer(); ?>