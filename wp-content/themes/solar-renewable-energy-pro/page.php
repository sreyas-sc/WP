<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package solar-renewable-energy-pro
 */
get_header(); ?>

<?php do_action( 'solar_renewable_energy_pro_after_page_header' ); ?>
<div class="outer_dpage my-5">
	<div class="container">
		<div class="middle-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template(); }
			endwhile; // end of the loop. ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php do_action( 'solar_renewable_energy_pro_before_page_footer' ); ?>

<?php get_footer(); ?>