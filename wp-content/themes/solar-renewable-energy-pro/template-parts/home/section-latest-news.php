<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_latest_news_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_latest_news_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_latest_news_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_latest_news_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_latest_news_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="latest_news" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="latest-news-head">
			<?php if(get_theme_mod('solar_renewable_energy_pro_latest_news_main_heading')!=''){ ?>
	            <h3 class="pb-0 m-0">
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_latest_news_main_heading')); ?>
	            </h3>
            <?php } ?>
            <img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_latest_title_img')); ?>">
		</div>
		<div class="row mt-3">
			<?php
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => get_theme_mod('solar_renewable_energy_pro_latest_news_number')
			);
			$new = new WP_Query($args); 
			$loop_index = 0; $i=1;
			while ( $new->have_posts() ){
				$new->the_post(); ?>
				<div class="col-lg-6 col-md-6 mt-4">
					<div class="post-slide">
	                    <div class="post-img">
	                        <?php the_post_thumbnail(); ?>
							<span class="date"><?php echo get_the_date('M j Y') ?></span>
	                    </div>
	                    <div class="post-review">
	                    	<h5 class="post-title m-0 p-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h5>
	                    	<ul>
								<li><span class="entry-author mr-2"><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span></li>

								<li><span class="entry-comments"><i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_latest_news_comment_icon'.$i)); ?>"></i> <?php comments_number( __('0 Comments','solar-renewable-energy-pro'), __('0 Comments','solar-renewable-energy-pro'), __('% Comments','solar-renewable-energy-pro')); ?></span></li>

							</ul>
	                        <p class="post-description">
	                            <?php $excerpt = get_the_excerpt(); echo esc_html(solar_renewable_energy_pro_string_limit_words($excerpt,18)); ?>
	                        </p>
	                        <div class="latest_btn">
				               	<a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>">
			                      <?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_latest_news_btn'.$i)); ?><i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_latest_news_btn_icon'.$i)); ?>"></i>
			                    </a>
				           	</div>
	                    </div>
	                </div>
            	</div>
			<?php }
               wp_reset_query(); ?>
		</div>
	</div>
</section>