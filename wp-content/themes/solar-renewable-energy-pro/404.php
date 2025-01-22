<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package solar-renewable-energy-pro
 */
get_header(); ?>

<div class="title-box">
	<div class="container">
		<h1><?php the_title();?></h1>	
	</div>
</div>
<div class="content_page">
	<div class="container">
		<div class="page-content">
			<h3><span class="heading3"><?php esc_html_e( '404 Not Found', 'solar-renewable-energy-pro' ); ?></span></h3>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn &hellip; Don\'t worry &hellip; it happens to the best of us.', 'solar-renewable-energy-pro' ); ?></p>
			<div class="read-moresec">
				<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right">
					<?php esc_html_e( 'Back to Home Page', 'solar-renewable-energy-pro' ); ?></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>