<?php         
  /* ----------------------- Service  ---------------------- */

  $wp_customize->add_section('solar_renewable_energy_pro_service',array(
    'title' => __('Service','solar-renewable-energy-pro'),
    'description' => __('Add Service Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  
  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
   
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_service_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_service'
    )));

  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_service_enable', array(
    'selector' => '#service .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_service_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_service_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_service_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service',
    'settings' => 'solar_renewable_energy_pro_service_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_service_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_service_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimension 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service',
    'settings' => 'solar_renewable_energy_pro_service_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_service_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_service_count',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_service_count',array(
    'label' => __('Service Box Number','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service',
    'setting' => 'solar_renewable_energy_pro_service_count',
    'type'    => 'number'
  ));
  $service_count = get_theme_mod('solar_renewable_energy_pro_service_count');

  for($i=1; $i<=$service_count; $i++) {

    $wp_customize->add_setting('solar_renewable_energy_pro_service_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_service_icon'.$i,
          array(
            'label' => __('Service Icon Image ','solar-renewable-energy-pro').$i,
            'description' => __('Dimension 63 * 62','solar-renewable-energy-pro').$i,
            'section' => 'solar_renewable_energy_pro_service',
            'settings' => 'solar_renewable_energy_pro_service_icon'.$i
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_service_heading'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_service_heading'.$i,array(
      'label' => __('Service Title ','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_service',
      'setting' => 'solar_renewable_energy_pro_service_heading'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_service_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_service_text'.$i,array(
      'label' => __('Service Text ','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_service',
      'setting' => 'solar_renewable_energy_pro_service_text'.$i,
      'type'  => 'textarea'
    ));
  }

  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_service_color_settings',
      array(
      'label' => __('Services Color Settings ','solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_service'
  )));
 
  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_service_title_color', array(
    'label' => __('Service Heading Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service',
    'settings' => 'solar_renewable_energy_pro_service_title_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_service_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_service_title_font_family', array(
      'section'  => 'solar_renewable_energy_pro_service',
      'label'    => __( 'Service Heading Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_service_text_color', array(
    'label' => __('Service Text Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service',
    'settings' => 'solar_renewable_energy_pro_service_text_color',
  )));
  //This is Slider Text FontFamily picker setting
  $wp_customize->add_setting('solar_renewable_energy_pro_service_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_service_text_font_family', array(
      'section'  => 'solar_renewable_energy_pro_service',
      'label'    => __( 'Service Text Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_service_bg_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_service_bg_color', array(
    'label' => __('Service Box Background Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_service',
    'settings' => 'solar_renewable_energy_pro_service_bg_color',
  )));

  // -------------- Featured Product ----------------

  $wp_customize->add_section('solar_renewable_energy_pro_featured_product',array(
    'title' => __('Featured Product','solar-renewable-energy-pro'),
    'description' => __('Add Featured Product Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
   
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_featured_product'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_featured_product_enable', array(
    'selector' => '#featured_product .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_featured_product_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_featured_product'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_featured_product',
    'settings' => 'solar_renewable_energy_pro_featured_product_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_featured_product_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_featured_product',
    'settings' => 'solar_renewable_energy_pro_featured_product_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_featured_product'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_featured_product_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_featured_product',
    'setting' => 'solar_renewable_energy_pro_featured_product_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_title_img',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_featured_product_title_img',
        array(
          'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
          'description' => __('Dimension 123 * 35'),
          'section' => 'solar_renewable_energy_pro_featured_product',
          'settings' => 'solar_renewable_energy_pro_featured_product_title_img'
  )));
  $args = array(
    'type'                     => 'product',
    'child_of'                 => 0,
    'parent'                   => '',
    'orderby'                  => 'term_group',
    'order'                    => 'ASC',
    'hide_empty'               => false,
    'hierarchical'             => 1,
    'number'                   => '',
    'taxonomy'                 => 'product_cat',
    'pad_counts'               => false
    );
    $categories = get_categories( $args );
    $cats = array();
    foreach($categories as $category){
      $cats[$category->slug] = $category->name;
    }
  $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_category',array(
        'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_featured_product_category',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Product Category','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_featured_product',
  ));

  $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_featured_product_btn',array(
    'label' => __('Button Text','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_featured_product',
    'setting' => 'solar_renewable_energy_pro_featured_product_btn',
    'type'  => 'text'
  ));
 
  $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_color_settings',
        array(
        'label' => __('Section Color Settings ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_featured_product'
    )));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_main_heading_color', array(
      'label' => __('Featured Product Main Heading Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_main_heading_color',
    )));
   $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_featured_product_main_heading_font_family', array(
        'section'  => 'solar_renewable_energy_pro_featured_product',
        'label'    => __( 'Featured Product Main Heading Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
   $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_title_color', array(
      'label' => __('Featured Product Title Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_title_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_featured_product_title_font_family', array(
        'section'  => 'solar_renewable_energy_pro_featured_product',
        'label'    => __( 'Featured Product Title Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_text_color', array(
      'label' => __('Featured Product Text Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_text_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_featured_product_text_font_family', array(
        'section'  => 'solar_renewable_energy_pro_featured_product',
        'label'    => __( 'Featured Product Text Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_button_color', array(
      'label' => __('Featured Product Button Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_button_color',
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_featured_product_button_font_family', array(
        'section'  => 'solar_renewable_energy_pro_featured_product',
        'label'    => __( 'Featured Product Button Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_button_bgcolor', array(
      'label' => __('Featured Product Button Background', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_button_bgcolor',
    )));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_btn_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_btn_icon_color', array(
      'label' => __('Featured Product Button Icon Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_btn_icon_color',
    )));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_discount_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_discount_color', array(
      'label' => __('Featured Button Discount Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_discount_color',
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_featured_product_discount_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_featured_product_discount_font_family', array(
        'section'  => 'solar_renewable_energy_pro_featured_product',
        'label'    => __( 'Featured Button Discount Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_featured_product_discount_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_featured_product_discount_bgcolor', array(
      'label' => __('Featured Product Discount Background', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_featured_product',
      'settings' => 'solar_renewable_energy_pro_featured_product_discount_bgcolor',
    )));

  // -------------- Category -----------------

  $wp_customize->add_section('solar_renewable_energy_pro_category',array(
    'title' => __('Category','solar-renewable-energy-pro'),
    'description' => __('Add Category Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
   
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_category_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_category'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_category_enable', array(
    'selector' => '#category .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_category_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_category_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_category_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category',
    'settings' => 'solar_renewable_energy_pro_category_bgcolor',
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_bgcolor_opacity', array(
    'default' => '0.6',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_category_bgcolor_opacity', array(
    'label' => __('Section Background Color Opacity', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category',
    'settings' => 'solar_renewable_energy_pro_category_bgcolor_opacity',
    'type' => 'text'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_remove_image',
     array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
     ));
   
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_category_remove_image',
       array(
          'label' => esc_html__( 'Remove Background Image', 'solar-renewable-energy-pro' ),
          'section' => 'solar_renewable_energy_pro_category'
       )
    ));
  $wp_customize->add_setting('solar_renewable_energy_pro_category_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_category_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category',
    'settings' => 'solar_renewable_energy_pro_category_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_category_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_category_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_category_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category',
    'setting' => 'solar_renewable_energy_pro_category_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_category_title_img',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_category_title_img',
    array(
      'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
      'description' => __('Dimension 123 * 35'),
      'section' => 'solar_renewable_energy_pro_category',
      'settings' => 'solar_renewable_energy_pro_category_title_img'
  )));

$wp_customize->add_setting('solar_renewable_energy_pro_category_increase',array(
    'default' => '6',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_category_increase',array(
    'label' => __('No Of Category To Show','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_category',
    'setting' => 'solar_renewable_energy_pro_category_increase',
    'type'    => 'number'
  ));

  $category_number=get_theme_mod('solar_renewable_energy_pro_category_increase');
  for($i=1; $i<=$category_number; $i++) {


    $wp_customize->add_setting('solar_renewable_energy_pro_category_image'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_category_image'.$i,
          array(
            'label' => __('Category Image ','solar-renewable-energy-pro').$i,
            'description' => __('Dimension 84 * 67' , 'solar-renewable-energy-pro'),
            'section' => 'solar_renewable_energy_pro_category',
            'settings' => 'solar_renewable_energy_pro_category_image'.$i
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_category_image_url'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_category_image_url'.$i,array(
      'label' => __('Category Image Url ','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_category',
      'setting' => 'solar_renewable_energy_pro_category_image_url'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_category_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_category_title'.$i,array(
      'label' => __('Category Title','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_category',
      'setting' => 'solar_renewable_energy_pro_category_title'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_category_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_category_text'.$i,array(
      'label' => __('Category Text','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_category',
      'setting' => 'solar_renewable_energy_pro_category_text'.$i,
      'type'  => 'text'
    ));
  }
  $wp_customize->add_setting( 'solar_renewable_energy_pro_category_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_category_color_settings',
        array(
        'label' => __('Category Section Color Settings ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_category'
    )));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_category_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_category_main_heading_color', array(
      'label' => __('Category Main Heading Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_category',
      'settings' => 'solar_renewable_energy_pro_category_main_heading_color',
    )));
   
   $wp_customize->add_setting('solar_renewable_energy_pro_category_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_category_main_heading_font_family', array(
        'section'  => 'solar_renewable_energy_pro_category',
        'label'    => __( 'Category Main Heading Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
   $wp_customize->add_setting( 'solar_renewable_energy_pro_category_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_category_title_color', array(
      'label' => __('Category Title Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_category',
      'settings' => 'solar_renewable_energy_pro_category_title_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_category_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_category_title_font_family', array(
        'section'  => 'solar_renewable_energy_pro_category',
        'label'    => __( 'Category Title Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_category_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_category_text_color', array(
      'label' => __('Category Text Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_category',
      'settings' => 'solar_renewable_energy_pro_category_text_color',
    )));

   
    $wp_customize->add_setting('solar_renewable_energy_pro_category_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_category_text_font_family', array(
        'section'  => 'solar_renewable_energy_pro_category',
        'label'    => __( 'Category Text Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_category_box_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_category_box_color', array(
      'label' => __('Category Box Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_category',
      'settings' => 'solar_renewable_energy_pro_category_box_color',
    )));

  // -------------- Best Product ----------------

  $wp_customize->add_section('solar_renewable_energy_pro_best_product',array(
    'title' => __('Best Product','solar-renewable-energy-pro'),
    'description' => __('Add Best Product Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
   
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_best_product'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_best_product_enable', array(
    'selector' => '#best_product .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_best_product_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_best_product'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_best_product',
    'settings' => 'solar_renewable_energy_pro_best_product_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_best_product_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_best_product_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_best_product',
    'settings' => 'solar_renewable_energy_pro_best_product_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_best_product'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_best_product_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_best_product_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_best_product',
    'setting' => 'solar_renewable_energy_pro_best_product_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_best_product_title_img',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_best_product_title_img',
    array(
      'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
      'description' => __('Dimension 123 * 35' , 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_title_img'
  )));
    $args = array(
        'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
    $categories = get_categories( $args );
    $cats = array();
    $i = 0;
    foreach($categories as $category){
      $cats[$category->slug] = $category->name;
    }
  $wp_customize->add_setting('solar_renewable_energy_pro_best_product_category',array(
        'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_best_product_category',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Product Category','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_best_product',
  ));

  $wp_customize->add_setting('solar_renewable_energy_pro_best_product_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_best_product_btn',array(
    'label' => __('Button Text','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_best_product',
    'setting' => 'solar_renewable_energy_pro_best_product_btn',
    'type'  => 'text'
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_color_settings',
        array(
        'label' => __('Section Color Settings ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_best_product'
    )));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_main_heading_color', array(
      'label' => __('Best Product Main Heading Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_main_heading_color',
    )));
   $wp_customize->add_setting('solar_renewable_energy_pro_best_product_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_best_product_main_heading_font_family', array(
        'section'  => 'solar_renewable_energy_pro_best_product',
        'label'    => __( 'Best Product Main Heading Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
   $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_title_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_title_color', array(
      'label' => __('Best Product Title Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_title_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_best_product_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_best_product_title_font_family', array(
        'section'  => 'solar_renewable_energy_pro_best_product',
        'label'    => __( 'Best Product Title Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_text_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_text_color', array(
      'label' => __('Best Product Text Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_text_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_best_product_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_best_product_text_font_family', array(
        'section'  => 'solar_renewable_energy_pro_best_product',
        'label'    => __( 'Best Product Text Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_button_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_button_color', array(
      'label' => __('Best Product Button Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_button_color',
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_best_product_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_best_product_button_font_family', array(
        'section'  => 'solar_renewable_energy_pro_best_product',
        'label'    => __( 'Best Product Button Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_button_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_button_bgcolor', array(
      'label' => __('Best Product Button Background', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_button_bgcolor',
    )));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_btn_icon_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_btn_icon_color', array(
      'label' => __('Best Product Button Icon Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_btn_icon_color',
    )));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_discount_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_discount_color', array(
      'label' => __('Featured Button Discount Color', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_discount_color',
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_best_product_discount_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_best_product_discount_font_family', array(
        'section'  => 'solar_renewable_energy_pro_best_product',
        'label'    => __( 'Featured Button Discount Fonts','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_best_product_discount_bgcolor', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_best_product_discount_bgcolor', array(
      'label' => __('Best Product Discount Background', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_best_product',
      'settings' => 'solar_renewable_energy_pro_best_product_discount_bgcolor',
    )));

  // --------------Latest News -----------------

  $wp_customize->add_section('solar_renewable_energy_pro_latest_news',array(
    'title' => __('Latest News','solar-renewable-energy-pro'),
    'description' => __('Add Latest News Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
   
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_latest_news'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_latest_news_enable', array(
    'selector' => '#latest_news .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_latest_news_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_latest_news_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_latest_news_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'setting' => 'solar_renewable_energy_pro_latest_news_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_latest_title_img',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_latest_title_img',
    array(
      'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
      'description' => __('Dimension 123 * 35'),
      'section' => 'solar_renewable_energy_pro_latest_news',
      'settings' => 'solar_renewable_energy_pro_latest_title_img'
  )));
  for($i=1; $i<=4; $i++) {

    $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_comment_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_latest_news_comment_icon'.$i,array(
      'label' => __('Comments Icon ','solar-renewable-energy-pro').$i,
      'description' => __('Add Font Awesome Class Here' , 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_latest_news',
      'setting' => 'solar_renewable_energy_pro_latest_news_comment_icon'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_btn'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_latest_news_btn'.$i,array(
      'label' => __('Latest Button','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_latest_news',
      'setting' => 'solar_renewable_energy_pro_latest_news_btn'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_btn_icon'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_latest_news_btn_icon'.$i,array(
      'label' => __('Latest Button Icon','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_latest_news',
      'setting' => 'solar_renewable_energy_pro_latest_news_btn_icon'.$i,
      'type'  => 'text'
    ));
  }
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_color_settings',
        array(
        'label' => __('Latest News Section Color Settings ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_latest_news'
    )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_main_heading_color', array(
    'label' => __('Latest News Main Heading Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_main_heading_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_latest_news_main_heading_font_family', array(
      'section'  => 'solar_renewable_energy_pro_latest_news',
      'label'    => __( 'Latest News Main Heading Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_title_color', array(
    'label' => __('Latest News Title Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_title_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_latest_news_title_font_family', array(
      'section'  => 'solar_renewable_energy_pro_latest_news',
      'label'    => __( 'Latest News Title Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_text_color', array(
    'label' => __('Latest News Text Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_text_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_latest_news_text_font_family', array(
      'section'  => 'solar_renewable_energy_pro_latest_news',
      'label'    => __( 'Latest News Text Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_meta_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_meta_icon_color', array(
    'label' => __('Latest News Meta Icon Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_meta_icon_color',
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_meta_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_meta_color', array(
    'label' => __('Latest News Icon Title Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_meta_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_meta_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_latest_news_meta_font_family', array(
      'section'  => 'solar_renewable_energy_pro_latest_news',
      'label'    => __( 'Latest News Icon Title Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
 
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_date_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_date_color', array(
    'label' => __('Latest News date Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_date_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_latest_news_date_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_latest_news_date_font_family', array(
      'section'  => 'solar_renewable_energy_pro_latest_news',
      'label'    => __( 'Latest News Date Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_latest_news_date_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_latest_news_date_bgcolor', array(
    'label' => __('Latest News Date Background', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_latest_news',
    'settings' => 'solar_renewable_energy_pro_latest_news_date_bgcolor',
  )));

  // -------------- Partner -----------------

  $wp_customize->add_section('solar_renewable_energy_pro_partner',array(
    'title' => __('Partner','solar-renewable-energy-pro'),
    'description' => __('Add Partner Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_partner_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_partner_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_partner'
  )));

  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_partner_enable', array(
    'selector' => '#partner .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_partner_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_partner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_partner_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_partner'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_partner_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_partner_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_partner',
    'settings' => 'solar_renewable_energy_pro_partner_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_partner_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_partner_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_partner',
    'settings' => 'solar_renewable_energy_pro_partner_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_partner_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_partner_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_partner'
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_partner_number',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_partner_number',array(
    'label' => __('Partner Number','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_partner',
    'setting' => 'solar_renewable_energy_pro_partner_number',
    'type'    => 'number'
  )); 
  $partner_count = get_theme_mod('solar_renewable_energy_pro_partner_number');

  for($i=1; $i<=$partner_count; $i++) {

    $wp_customize->add_setting('solar_renewable_energy_pro_partner_image'.$i,array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_partner_image'.$i,array(
      'label' => __('Partner Image','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_partner',
      'settings' => 'solar_renewable_energy_pro_partner_image'.$i
    )));
  }
  
  // -------------- Deal Product ----------------

  $wp_customize->add_section('solar_renewable_energy_pro_deal',array(
    'title' => __('Deal Product','solar-renewable-energy-pro'),
    'description' => __('Add Deal Product Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_product_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_deal_product_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_deal'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_deal_product_enable', array(
    'selector' => '#deal_product .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_deal_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_deal_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_deal_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_deal_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_deal_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_deal_product_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_deal_product_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'setting' => 'solar_renewable_energy_pro_deal_product_main_heading',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_deal_product_title_img',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_deal_product_title_img',
    array(
      'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
      'description' => __('Dimension 123 * 35', 'solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_deal',
      'settings' => 'solar_renewable_energy_pro_deal_product_title_img'
  )));
    $args = array(
        'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
    $categories = get_categories( $args );
    $cats = array();
    $i = 0;
    foreach($categories as $category){
      $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting('solar_renewable_energy_pro_deal_product_category',array(
          'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_deal_product_category',array(
          'type'    => 'select',
          'choices' => $cats,
          'label' => __('Select Product Category','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_deal',
    ));

    $wp_customize->add_setting('solar_renewable_energy_pro_deal_product_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_deal_product_btn',array(
    'label' => __('Button Text','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'setting' => 'solar_renewable_energy_pro_deal_product_btn',
    'type'  => 'text'
  ));
    
    $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_deal_color_settings',
        array(
        'label' => __('Section Color Settings ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_deal'
    )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_main_heading_color', array(
    'label' => __('Deal Product Main Heading Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_main_heading_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_deal_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_deal_main_heading_font_family', array(
      'section'  => 'solar_renewable_energy_pro_deal',
      'label'    => __( 'Deal Product Main Heading Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_title_color', array(
    'label' => __('Deal Product Title Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_title_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_deal_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_deal_title_font_family', array(
      'section'  => 'solar_renewable_energy_pro_deal',
      'label'    => __( 'Deal Product Title Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_text_color', array(
    'label' => __('Deal Product Text Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_text_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_deal_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_deal_text_font_family', array(
      'section'  => 'solar_renewable_energy_pro_deal',
      'label'    => __( 'Deal Product Text Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_button_color', array(
    'label' => __('Deal Product Button Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_button_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_deal_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_deal_button_font_family', array(
      'section'  => 'solar_renewable_energy_pro_deal',
      'label'    => __( 'Deal Product Button Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_button_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_button_bgcolor', array(
    'label' => __('Deal Product Button Background', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_button_bgcolor',
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_button_border', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_button_border', array(
    'label' => __('Deal Product Button Border', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_button_border',
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_deal_btn_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_deal_btn_icon_color', array(
    'label' => __('Deal Product Button Icon Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_deal',
    'settings' => 'solar_renewable_energy_pro_deal_btn_icon_color',
  )));

  // -------------- Contribute Farm ------------

  $wp_customize->add_section('solar_renewable_energy_pro_contribute',array(
    'title' => __('Contribute','solar-renewable-energy-pro'),
    'description' => __('Add Contribute Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_contribute'
  )));

  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_contribute_enable', array(
    'selector' => '#contribute .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_contribute_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_contribute_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_main_heading',
    'type'    => 'text'
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_title_img',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_contribute_title_img',
    array(
      'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
      'description' => __('Dimension 123 * 35'),
      'section' => 'solar_renewable_energy_pro_contribute',
      'settings' => 'solar_renewable_energy_pro_contribute_title_img'
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_title',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_title',array(
    'label' => __('Contribute Title','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_title',
    'type'  => 'text'
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_text1',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_text1',array(
    'label' => __('Contribute Text 1','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_text1',
    'type'  => 'text'
  ));  
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_text2',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_text2',array(
    'label' => __('Contribute Text 2','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_text2',
    'type'  => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_btn',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_btn',array(
    'label' => __('Contribute Button','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_btn',
    'type'  => 'text'
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_btn_span',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_btn_span',array(
    'label' => __('Contribute Button Span','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_btn_span',
    'type'  => 'text'
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_btn_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_btn_url',array(
    'label' => __('Contribute Button Url','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_btn_url',
    'type'  => 'text'
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_btn_icon',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_contribute_btn_icon',array(
    'label' => __('Contribute Button Icon','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'setting' => 'solar_renewable_energy_pro_contribute_btn_icon',
    'type'  => 'text'
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_right_img',array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_contribute_right_img',
        array(
          'label' => __('Contribute Right Image ','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contribute',
          'settings' => 'solar_renewable_energy_pro_contribute_right_img'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_color_settings',
      array(
      'label' => __('Section Color Settings ','solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_contribute'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_main_heading_color', array(
    'label' => __('Main Heading Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_main_heading_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_main_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_contribute_main_heading_font_family', array(
    'section'  => 'solar_renewable_energy_pro_contribute',
    'label'    => __( 'Main Heading Fonts','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_title_color', array(
    'label' => __('Contribute Title Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_title_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_contribute_title_font_family', array(
    'section'  => 'solar_renewable_energy_pro_contribute',
    'label'    => __( 'Contribute Title Fonts','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_text_color', array(
    'label' => __('Contribute Text Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_text_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_contribute_text_font_family', array(
    'section'  => 'solar_renewable_energy_pro_contribute',
    'label'    => __( 'Contribute Text Fonts','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_button_color', array(
    'label' => __('Contribute Button Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_button_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_contribute_button_font_family', array(
    'section'  => 'solar_renewable_energy_pro_contribute',
    'label'    => __( 'Contribute Button Fonts','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_button_span_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_button_span_color', array(
    'label' => __('Contribute Button Span Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_button_span_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_contribute_button_span_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_contribute_button_span_font_family', array(
    'section'  => 'solar_renewable_energy_pro_contribute',
    'label'    => __( 'Contribute Button Span Fonts','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_button_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_button_bgcolor', array(
    'label' => __('Contribute Button Background', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_button_bgcolor',
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_icon_color', array(
    'label' => __('Contribute Icon Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_icon_color',
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_contribute_icon_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contribute_icon_bgcolor', array(
    'label' => __('Contribute Icon Background Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_contribute',
    'settings' => 'solar_renewable_energy_pro_contribute_icon_bgcolor',
  )));

  // -------------- Testimonial ------------

  $wp_customize->add_section('solar_renewable_energy_pro_testimonial',array(
    'title' => __('Testimonial','solar-renewable-energy-pro'),
    'description' => __('Add Testimonial Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_testimonial'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_testimonial_enable', array(
    'selector' => '#testimonial .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_testimonial_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_testimonial_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_testimonial_main_heading',array(
    'label' => __('Section Main Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'setting' => 'solar_renewable_energy_pro_testimonial_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('solar_renewable_energy_pro_testimonail_title_img',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_testimonail_title_img',
    array(
      'label' => __('Section Heading Image ','solar-renewable-energy-pro'),
      'description' => __('Dimension 123 * 35'),
      'section' => 'solar_renewable_energy_pro_testimonial',
      'settings' => 'solar_renewable_energy_pro_testimonail_title_img'
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_count',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_testimonial_count',array(
    'label' => __('No of Testimonials To show','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'setting' => 'solar_renewable_energy_pro_testimonial_count',
    'type'    => 'Number'
  ));

  $testimonial_count = get_theme_mod('solar_renewable_energy_pro_testimonial_count');

  for($i=1; $i<=$testimonial_count; $i++) {

    $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_img'.$i,array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_testimonial_img'.$i,
          array(
            'label' => __('Testimonial Image ','solar-renewable-energy-pro').$i,
            'section' => 'solar_renewable_energy_pro_testimonial',
            'settings' => 'solar_renewable_energy_pro_testimonial_img'.$i
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_testimonail_text'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_testimonail_text'.$i,array(
      'label' => __('Testimonial Text ','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_testimonial',
      'setting' => 'solar_renewable_energy_pro_testimonail_text'.$i,
      'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_title'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_testimonial_title'.$i,array(
      'label' => __('Testimonial Title ','solar-renewable-energy-pro').$i,
      'section' => 'solar_renewable_energy_pro_testimonial',
      'setting' => 'solar_renewable_energy_pro_testimonial_title'.$i,
      'type'  => 'text'
    ));
  }

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_color_settings',
      array(
      'label' => __('Section Color Settings ','solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_testimonial'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_main_heading_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_main_heading_color', array(
    'label' => __('Main Heading Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_main_heading_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_testimonial_main_heading_font_family', array(
      'section'  => 'solar_renewable_energy_pro_testimonial',
      'label'    => __( 'Main Heading Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_title_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_title_color', array(
    'label' => __('Testimonial Title Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_title_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_title_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_testimonial_title_font_family', array(
      'section'  => 'solar_renewable_energy_pro_testimonial',
      'label'    => __( 'Testimonial Title Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  
  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_text_color', array(
    'label' => __('Testimonial List Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_text_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_testimonial_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_testimonial_text_font_family', array(
      'section'  => 'solar_renewable_energy_pro_testimonial',
      'label'    => __( 'Testimonial List Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_icon_color', array(
    'label' => __('Testimonial Icon Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_icon_color',
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_icon_color', array(
    'label' => __('Testimonial Nav Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_icon_color',
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_nav_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_nav_bgcolor', array(
    'label' => __('Testimonial Nav Background Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_nav_bgcolor',
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_testimonial_border_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_testimonial_border_color', array(
    'label' => __('Testimonial Border Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_testimonial',
    'settings' => 'solar_renewable_energy_pro_testimonial_border_color',
  )));

  // ------------ Newsletter --------------

  $wp_customize->add_section('solar_renewable_energy_pro_newsletter',array(
    'title' => __('Newsletter','solar-renewable-energy-pro'),
    'description' => __('Add Newsletter Content Here','solar-renewable-energy-pro'),
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_enable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_enable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_newsletter'
  )));
  $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_newsletter_enable', array(
    'selector' => '#newsletter .container',
    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_newsletter_enable',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_settings',
    array(
    'label' => __('Section Background Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter'
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_bgcolor', array(
    'label' => __('Section Background Color', 'solar-renewable-energy-pro'),
    'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_bgcolor',
  )));
  
  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_bgimage',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'solar_renewable_energy_pro_newsletter_bgimage',array(
    'label' => __('Section Background Image','solar-renewable-energy-pro'),
    'description' => __('Dimention 1600 * 800','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_bgimage'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_content_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
  ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_content_settings',
    array(
    'label' => __('Section Content Settings','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter'
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_text',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_newsletter_text',array(
    'label' => __('Newsletter Text','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'setting' => 'solar_renewable_energy_pro_newsletter_text',
    'type'    => 'text'
  )); 
  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_main_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_newsletter_main_heading',array(
    'label' => __('Newsletter Heading','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'setting' => 'solar_renewable_energy_pro_newsletter_main_heading',
    'type'    => 'text'
  ));

  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_shortcode',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('solar_renewable_energy_pro_newsletter_shortcode',array(
    'label' => __('Newsletter Shortcode','solar-renewable-energy-pro'),
    'description' => __('Add Contact Form Shortcode Here','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'setting' => 'solar_renewable_energy_pro_newsletter_shortcode',
    'type'    => 'text'
  )); 

  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_color_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
  $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_color_settings',
        array(
        'label' => __('Newsletter Section Color Settings ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_newsletter'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_main_heading_color', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_main_heading_color', array(
    'label' => __('Newsletter Main Heading Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_main_heading_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_main_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_newsletter_main_heading_font_family', array(
      'section'  => 'solar_renewable_energy_pro_newsletter',
      'label'    => __( 'Newsletter Main Heading Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_text_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_text_color', array(
    'label' => __('Newsletter Text Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_text_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_text_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_newsletter_text_font_family', array(
      'section'  => 'solar_renewable_energy_pro_newsletter',
      'label'    => __( 'Newsletter Text Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_button_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_button_color', array(
    'label' => __('Newsletter Button Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_button_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_newsletter_button_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_newsletter_button_font_family', array(
      'section'  => 'solar_renewable_energy_pro_newsletter',
      'label'    => __( 'Newsletter Button Fonts','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_button_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_button_bgcolor', array(
    'label' => __('Newsletter Button Background', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_button_bgcolor',
  )));
  $wp_customize->add_setting( 'solar_renewable_energy_pro_newsletter_box_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_newsletter_box_bgcolor', array(
    'label' => __('Newsletter Box Background', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_newsletter',
    'settings' => 'solar_renewable_energy_pro_newsletter_box_bgcolor',
  )));
  
  // --------------- Post General Settings ---------------

  $wp_customize->add_section('solar_renewable_energy_pro_post_general_settings',array(
    'title' => __('Post Settings','solar-renewable-energy-pro'),
    'description'   => __('Change Your Setting','solar-renewable-energy-pro'),
    'priority'  => null,
    'panel' => 'solar_renewable_energy_pro_panel_id',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_date',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_date',
     array(
        'label' => esc_html__( 'Show or Hide Post Date', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
  )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_comments',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
  ));
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_comments',
     array(
        'label' => esc_html__( 'Show or Hide Comments', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_author',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_author',
     array(
        'label' => esc_html__( 'Show or Hide Author', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_share',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   ));
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_share',
     array(
        'label' => esc_html__( 'Show or Hide Share Icons', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_share_facebook',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_share_facebook',
     array(
        'label' => esc_html__( 'Post Share Facebook', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_share_linkedin',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_share_linkedin',
     array(
        'label' => esc_html__( 'Post Share Linkedin', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_share_googleplus',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_share_googleplus',
     array(
        'label' => esc_html__( 'Post Share Google Plus', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_share_twitter',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_share_twitter',
     array(
        'label' => esc_html__( 'Post Share Twitter', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_category',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_category',
     array(
        'label' => esc_html__( 'Show or Hide Category', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_post_general_settings_post_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_post_general_settings_post_sidebar',
     array(
        'label' => esc_html__( 'Show or Hide Sidebar', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_theme_loader',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
   )
  );
 
  $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_theme_loader',
     array(
        'label' => esc_html__( 'Show or Hide Loader', 'solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_post_general_settings'
     )
  ));

?>