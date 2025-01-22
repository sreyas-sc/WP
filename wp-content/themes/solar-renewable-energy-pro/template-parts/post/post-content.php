<div id="single_post" class="col-lg-6 col-md-6 col-sm-12"> 
  <div class="postbox">
    <div class="postpic">
      <div class="post_pic_inner">
        <?php if (has_post_thumbnail()){ ?>
          <?php the_post_thumbnail(); ?>
        <?php } ?>
      </div>
    </div>
    <div class="postbox-content">
      <?php if (has_post_thumbnail()){ ?>
      <div class="meta_post">
        <?php if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_date',true) == "1" ) { ?>
          <div class="date-box"><span class="date-box-inner"><?php the_time(get_option('date_format')); ?></span></div>
        <?php } ?>
      </div>
      <?php } ?>
      <h4 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <div class="mb-3 post-text"><?php $excerpt = get_the_excerpt(); echo esc_html(solar_renewable_energy_pro_string_limit_words($excerpt,29)); ?></div>
      <?php if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_author',true) == "1" ) { ?>
        <span class="mr-3"><i class="fas fa-user"></i> <?php the_author() ?></span>
      <?php }if ( get_theme_mod('solar_renewable_energy_pro_post_general_settings_post_comments',true) == "1" ){ ?>
        <span><i class="fas fa-comments"></i> <?php echo comments_number( __('no comments','solar-renewable-energy-pro'), __('no comments','solar-renewable-energy-pro'), __('% comments','solar-renewable-energy-pro') ); ?></span>
      <?php } ?>
    </div>
  </div>
</div>
