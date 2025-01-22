<?php
/**
 * Template part for displaying Top Bar Content
 *
 * @package solar-renewable-energy-pro
 */ 

$topbar_section = get_theme_mod( 'solar_renewable_energy_pro_topbar_enable' );
if ( 'Disable' == $topbar_section ) {
  return;
}
?>
<div id="topbar">
  <?php /*--Top Bar--*/
    if( get_theme_mod('solar_renewable_energy_pro_topbar_color') ) { 
      $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_topbar_color')).';';
    }elseif( get_theme_mod('solar_renewable_energy_pro_topbar_image') ){
      $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_topbar_image')).'\')';
    }else{
      $about_backg = '';       
    }
  ?>
  <div class="topbar_section">
    <div class="container">
      <div class="row my-3"> 
        <div class="col-lg-5 col-md-3 col-sm-5 col-12">
          <div class="logo">
            <?php
           if( has_custom_logo() ){  solar_renewable_energy_pro_the_custom_logo();  } 
              $logo= get_theme_mod( 'custom_logo' );
              if($logo){ ?>
                <div class="logo-text">
                  <?php if( get_theme_mod('solar_renewable_energy_pro_display_title', true) != ''){ ?>
                    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h2>
                  <?php }
                    if( get_theme_mod('solar_renewable_energy_pro_display_tagline', true) != ''){ 
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                    <p>
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php endif; } 
                  ?>
                </div>
            <?php } else { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/solar-logo.png" alt="<?php bloginfo( 'name' ); ?>"/></a>  
            <?php }?>          
          </div>
        </div>          
        <div class="col-lg-5 col-md-6 col-sm-7 col-12">
          <div class="topbar-content">
            <div class="row">
              <div class="col-md-0 col-0">
              </div>
              <div class="col-md-6 p-0">
                <ul class="right-side-content">
                  <?php if(get_theme_mod('solar_renewable_energy_pro_topbar_section_email_title')!=''){ ?>
                    <li class="icon">
                      <div class="daimond">
                        <span class="hi_normal"><i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_topbar_section_email_icon')); ?>"></i></span>
                      </div>                      
                    </li>
                    <li class="title"><?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_topbar_section_email_title')); ?></li>
                    <li class="content"><?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_topbar_section_email_id')); ?></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-6 p-0">
                <ul class="right-side-content">
                  <?php if(get_theme_mod('solar_renewable_energy_pro_topbar_section_phone_title')!=''){ ?>
                    <li class="icon">
                      <div class="daimond">
                        <span class="hi_normal"><i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_topbar_section_phone_icon')); ?>"></i> </span>
                      </div>                      
                    </li>
                    <li class="title">
                      <?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_topbar_section_phone_title')); ?>
                    </li>
                    <li class="content">
                      <?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_topbar_section_phone_no')); ?>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12 col-12 social">
            <?php do_action( 'solar_renewable_energy_pro_before_header' ); 
              get_template_part('template-parts/home/social-icons'); 
            ?>
        </div> 
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>