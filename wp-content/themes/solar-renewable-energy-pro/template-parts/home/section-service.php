<?php 
$about_section = get_theme_mod( 'solar_renewable_energy_pro_service_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('solar_renewable_energy_pro_service_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('solar_renewable_energy_pro_service_bgcolor')).';';
}elseif( get_theme_mod('solar_renewable_energy_pro_service_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('solar_renewable_energy_pro_service_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="service" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="row">
      <div class="owl-carousel">
        <?php 
        $service_count = get_theme_mod('solar_renewable_energy_pro_service_count');
        for($i=1 ; $i<=$service_count ; $i++) { ?>
            <div class="box">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-4 text-lg-right align-self-center">
                  <div class="service_icon">                    
                    <?php if(get_theme_mod('solar_renewable_energy_pro_service_icon'.$i)!=''){ ?>
                      <i class="<?php echo esc_html(get_theme_mod('solar_renewable_energy_pro_service_icon'.$i)); ?> serv-icn"></i>
                    <?php } ?>                    
                  </div>
                </div>
                <div class="col-lg-9 col-md-9 col-8 align-self-center">
                   <h5 class="title pb-0"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_service_heading'.$i)); ?></h5>
                    <p class="post"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_service_text'.$i)); ?></p>
                </div>
              </div>
            </div>
        <?php } ?>
      </div>  
    </div>
  </div>
</section>