<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_deal_product_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_deal_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_deal_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_deal_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_deal_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="deal_product" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="deal_product_head text-center">
            <?php if(get_theme_mod('solar_renewable_energy_pro_deal_product_main_heading')!=''){ ?>
	            <h3 class="pb-0 m-0">
	              <?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_deal_product_main_heading')); ?>
	            </h3>
            <?php } ?>
			<img src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_deal_product_title_img')); ?>">
		</div>
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
	      <div class="row mt-3">
	        <?php 
	          $args = array( 
	            'post_type' => 'product',
	            'posts_per_page' => 6,
	            'product_cat' => get_theme_mod('solar_renewable_energy_pro_deal_product_category')
	            );
	            $loop = new WP_Query( $args );
	            $loop_index = 0;               
	             while ( $loop->have_posts() ) : $loop->the_post(); global $product;
	        ?>
	        <div class="col-lg-4 col-md-6 mt-4">
		        <div class="deal_product_content"> 
	        		<div class="post-img">              
	            		<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" alt="Placeholder" />'; 
	            		?>
	            	</div>
	            	<div class="post-review">
	            		<h5 class="p-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		            	<p class="mb-0"><?php echo esc_html(get_post_meta($post->ID,'deal-custom-field',true)); ?>
	           				<?php $rating_value = $product->get_average_rating();
	           				if($rating_value > 0){
	           					echo '<span><i class="fas fa-star"></i>'.$rating_value.'</span>';
	           				} ?>
	           			</p>
		            	<span>
		            		<?php echo $product->get_price_html(); ?>
		            	</span>
			            <div class="deal_product_btn">
			               	<a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_deal_product_btn_icon')); ?>"></i>
		                      <?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_deal_product_btn')); ?>
		                    </a>
			           	</div>
	            	</div>
		        </div>
	    	</div>
	        <?php endwhile; wp_reset_query(); ?>
	      </div>
	    <?php } ?>
	</div>
</section>
