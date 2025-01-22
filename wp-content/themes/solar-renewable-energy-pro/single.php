<?php
/**
 * The Template for displaying all single posts.
 *
 * @package solar-renewable-energy-pro
 */
get_header(); 

$postcol1="";
$postcol2="";

if(get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_sidebar',true)=='1')
{
	$postcol1="col-lg-8 col-md-7";
	$postcol2="col-lg-4 col-md-5";
	
}else
{
	$postcol1="col-lg-12 col-md-12";
	$postcol2="";
}

?>
<div class="container">
	<div class="row">
		<div class="content_page <?php echo esc_html($postcol1); ?>">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content_boxes">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="feature-box">
						<img src="<?php the_post_thumbnail_url( 'full' ); ?>">
					</div>
				<?php } ?>
				<div class="metabox">
					<?php if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_date',true) == "1" ) { ?>
					<span class="entry-date">
						<i class="far fa-calendar-alt"></i>
						<?php echo esc_html( get_the_date() ); ?>
					</span>
					<?php } ?>
					
					<?php if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_author',true) == "1" ) { ?>
					<span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
						<i class="fas fa-user"></i>
						<?php the_author(); ?></a></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_comments',true) == "1" ) { ?>
					<span class="entry-comments">
						<i class="far fa-comments"></i>
						<?php comments_number( __( '0 Comments','solar-renewable-energy-pro' ), __( '0 Comments','solar-renewable-energy-pro' ), __( '0 % Comments','solar-renewable-energy-pro' ) ); ?></span>
					<?php } ?>
				</div>
				<div class="single-post-content">
					<?php the_content();?>
				</div>
				<?php if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share',true) == "1" ) { ?>
				<?php do_action('solar_renewable_energy_pro_before_blog_sharing'); ?>
				<div class="share_icon row p-0 m-0"> 
                    <p class="socila_share col-md-12 p-0">
                    	<?php if(get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_facebook',true)==1 || get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_linkedin',true)==1 || get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_googleplus',true)==1 || get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_twitter',true)==1){ ?>
                    		<b><?php _e('Share: ','solar-renewable-energy-pro'); ?></b>

                    	<?php } if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_facebook',true) == "1" ) { ?>
                    		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    	<?php } if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_linkedin',true) == "1" ) { ?>
                    		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    	<?php }if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_googleplus',true) == "1" ) { ?>
                    		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                    	<?php }if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_share_twitter',true) == "1" ) { ?>
                    		<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    	<?php } ?>
                	</p>
                    <p class="col-md-6 post_tag">
                    	<?php
                        if( $tags = get_the_tags() ) {
                            echo '<span class="meta-sep"></span>';
                            foreach( $tags as $tag ) {
                              $sep = ( $tag === end( $tags ) ) ? '' : ' ';
                              echo '<a href="' . esc_url(get_term_link( $tag, $tag->taxonomy )) . '">#' . esc_html($tag->name) . '</a>' . esc_html($sep);
                            }
	                    } ?>
	                </p>
                </div>
                <?php } ?>
                <?php if(get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_category',true)=="1"){ ?>
	                <div class="post_ctg font-weight-bold"><span><?php _e('Categories: ','solar-renewable-energy-pro'); ?></span><?php the_category();?></div>
		
					<?php } ?>

				<?php // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}?>
				<div class="clearfix"></div>
			<?php the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'solar-renewable-energy-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'solar-renewable-energy-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'solar-renewable-energy-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'solar-renewable-energy-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if(get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_sidebar',true)=='1'){ ?>
			<div class="<?php echo esc_html($postcol2); ?>" id="sidebar">
	          <?php dynamic_sidebar('sidebar-1'); ?>
	        </div>
	    <?php } ?>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>