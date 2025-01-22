<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package solar-renewable-energy-pro
 */
get_header(); ?>
<div class="container">
	<?php the_archive_title( '<h1>', '</h1>' ); ?>
</div>
<div class="feature-box">
	<div class="container">
		<div class="col-md-12">
			<div class="bradcrumbs">
				<?php solar_renewable_energy_pro_the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
		<div class="col-lg-8 col-md-12">
			<div class="row">
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/post/post-content' );
					endwhile; ?>
	            <?php else : ?>
	                <?php get_template_part( 'no-results', 'archive' ); ?>
	            <?php endif; ?>
	            <div class="navigation">
					<?php // Previous/next page navigation.
			            the_posts_pagination( array(
			                'prev_text'  => __( 'Previous page', 'solar-renewable-energy-pro' ),
			                'next_text'  => __( 'Next page', 'solar-renewable-energy-pro' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'solar-renewable-energy-pro' ) . ' </span>',
			            ));
					?>
				</div>
			</div>
        </div>
		<div id="sidebar" class="col-lg-4 col-md-12">
			<?php get_sidebar( 'page' ); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer(); ?>