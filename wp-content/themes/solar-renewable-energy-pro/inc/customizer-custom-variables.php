<?php

  $wp_customize->add_section('solar_renewable_energy_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','solar-renewable-energy-pro'),
      'description'=> __('Section Ordering.','solar-renewable-energy-pro'),
      'panel' => 'solar_renewable_energy_pro_panel_id',
  ));

  $wp_customize->add_setting( 'solar_renewable_energy_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control( new solar_renewable_energy_pro_Repeater_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','solar-renewable-energy-pro' ),
        'section' => 'solar_renewable_energy_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','solar-renewable-energy-pro' ), 
        )
      )
   ) );
  
  //General Color Pallete
  $wp_customize->add_section('solar_renewable_energy_pro_color_pallette',array(
      'title' => __('Typography / General settings','solar-renewable-energy-pro'),
      'description'=> __('Typography settings','solar-renewable-energy-pro'),
      'panel' => 'solar_renewable_energy_pro_panel_id',
  ));

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting('solar_renewable_energy_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_h1_font_family', array(
    'section'  => 'solar_renewable_energy_pro_color_pallette',
    'label'    => __( 'H1','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_h1_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_h1_font_size',array(
    'label' => __('H1 font size in px','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'setting' => 'solar_renewable_energy_pro_h1_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_h1_color', array(
    'label' => __('H1 color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_h1_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'solar_renewable_energy_pro_h2_font_family', array(
      'section'  => 'solar_renewable_energy_pro_color_pallette',
      'label'    => __( 'H2','solar-renewable-energy-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_h2_font_size',array(
      'label' => __('H2 font size in px','solar-renewable-energy-pro'),
      'section' => 'solar_renewable_energy_pro_color_pallette',
      'setting' => 'solar_renewable_energy_pro_h2_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_h2_color', array(
    'label' => __('H2 color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_h2_color',
  )));

  $wp_customize->add_setting('solar_renewable_energy_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_h3_font_family', array(
    'section'  => 'solar_renewable_energy_pro_color_pallette',
    'label'    => __( 'H3','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_h3_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_h3_font_size',array(
    'label' => __('H3 font size in px','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'setting' => 'solar_renewable_energy_pro_h3_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_h3_color', array(
    'label' => __('H3 color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_h3_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_h4_font_family', array(
    'section'  => 'solar_renewable_energy_pro_color_pallette',
    'label'    => __( 'H4','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_h4_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_h4_font_size',array(
    'label' => __('H4 font size in px','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'setting' => 'solar_renewable_energy_pro_h4_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_h4_color', array(
    'label' => __('H4 color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_h4_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_h5_font_family', array(
    'section'  => 'solar_renewable_energy_pro_color_pallette',
    'label'    => __( 'H5','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_h5_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_h5_font_size',array(
    'label' => __('H5 font size in px','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'setting' => 'solar_renewable_energy_pro_h5_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_h5_color', array(
    'label' => __('H5 color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_h5_color',
  )));
  $wp_customize->add_setting('solar_renewable_energy_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_h6_font_family', array(
    'section'  => 'solar_renewable_energy_pro_color_pallette',
    'label'    => __( 'H6','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_h6_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_h6_font_size',array(
    'label' => __('H6 font size in px','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'setting' => 'solar_renewable_energy_pro_h6_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_h6_color', array(
    'label' => __('H6 Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_h6_color',
  )));
  //paragarph font family
  $wp_customize->add_setting('solar_renewable_energy_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
    'solar_renewable_energy_pro_paragarpah_font_family', array(
    'section'  => 'solar_renewable_energy_pro_color_pallette',
    'label'    => __( 'Paragraph Font Family','solar-renewable-energy-pro'),
    'type'     => 'select',
    'choices'  => $font_array,
  ));
  $wp_customize->add_setting('solar_renewable_energy_pro_para_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('solar_renewable_energy_pro_para_font_size',array(
    'label' => __('Paragraph Font Size in px','solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'setting' => 'solar_renewable_energy_pro_para_font_size',
    'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'solar_renewable_energy_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_para_color', array(
    'label' => __('Paragraph Color', 'solar-renewable-energy-pro'),
    'section' => 'solar_renewable_energy_pro_color_pallette',
    'settings' => 'solar_renewable_energy_pro_para_color',
  )));

?>