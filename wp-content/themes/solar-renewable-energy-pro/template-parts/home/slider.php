<?php 
$section_hide = get_theme_mod( 'solar_renewable_energy_pro_slider_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}

$number = get_theme_mod('solar_renewable_energy_pro_slide_number'); 
$slide_delay = get_theme_mod('solar_renewable_energy_pro_slide_delay'); 
  if($number != ''){
?>
<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide <?php if ( get_theme_mod('solar_renewable_energy_pro_slide_remove_fade',true) == 1 ) { ?> carousel-fade <?php } ?>" data-ride="carousel" data-interval="<?php echo esc_attr($slide_delay); ?>">
    <div class="carousel-inner" role="listbox">
      <?php for ($i=1,$j=1; $i<=$number; $i++,$j++) { 
        if($j>3){ $j=1; } ?>
        <?php if(get_theme_mod('solar_renewable_energy_pro_slide_image'.$i) != ''){ ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php if ( get_theme_mod('solar_renewable_energy_pro_slide_image',true) != "" ) {?>
              <img  src="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_slide_image'.$i)); ?>" alt="<?php esc_attr_e(get_theme_mod('solar_renewable_energy_pro_slide_title'.$i, true)); ?>" title="#slidecaption<?php echo esc_html($i); ?>">
            <?php } ?>
            <?php if ( get_theme_mod('solar_renewable_energy_pro_slide_heading'.$i,true) != "" && get_theme_mod('solar_renewable_energy_pro_slide_text'.$i,true) != "") {?>
            <div class="carousel-caption d-md-block mt-5">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="inner_carousel">
                    <div class="slider-box">                     
                      <h1 class="font-weight-bold py-3"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_slide_heading'.$i)); ?>                        
                      </h1>
                      <div class="prop_desc"><p><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_slide_text'.$i)); ?></p></div>
                      <div class="slide_btn">
                        <a href="<?php echo esc_url(get_theme_mod('solar_renewable_energy_pro_slide_btn_url'.$i)); ?>"><?php esc_html_e(get_theme_mod('solar_renewable_energy_pro_slide_btn'.$i)); ?></a>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>  
            <?php } ?>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div> 
  <div class="clearfix"></div>
</section>
<?php } ?>