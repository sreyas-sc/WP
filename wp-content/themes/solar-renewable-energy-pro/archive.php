<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package solar-renewable-energy-pro
 */
get_header(); ?>
<div class="container">
	<div class="middle-align">
		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
		</header>
		<div class="row">
			
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile;
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'solar-renewable-energy-pro' ),
							'next_text'          => __( 'Next page', 'solar-renewable-energy-pro' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'solar-renewable-energy-pro' ) . ' </span>',
						));
					else :
						get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<?php get_sidebar( 'page' ); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>