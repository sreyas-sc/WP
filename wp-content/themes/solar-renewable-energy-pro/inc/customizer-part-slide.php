<?php
	$wp_customize->add_section('solar_renewable_energy_pro_slider_section',array(
		'title'	=> __('Slider Settings','solar-renewable-energy-pro'),
		'description'	=> __('Add slider images here.','solar-renewable-energy-pro'),
		'priority'	=> null,
		'panel' => 'solar_renewable_energy_pro_panel_id',
	));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_slider_enabledisable',
    array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_slider_enabledisable',
    array(
      'label' => esc_html__( 'Show or Hide Section', 'solar-renewable-energy-pro' ),
      'section' => 'solar_renewable_energy_pro_slider_section'
	)));

    $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_slider_enabledisable', array(
	    'selector' => '.slider-box',
	    'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_slider_enabledisable',
	));

	$wp_customize->add_setting('solar_renewable_energy_pro_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('solar_renewable_energy_pro_slide_number',array(
		'label'	=> __('Number of slides to show','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_slider_section',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('solar_renewable_energy_pro_slide_number');
		
	for($i=1, $j=1; $i<=$count; $i++, $j++) {
		if($j>=5){ $j=1; }

		$wp_customize->add_setting( 'solar_renewable_energy_pro_slider_section_settings'.$i,
		    array(
		    'default' => '',
		    'transport' => 'postMessage',
		    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
		 ));
		 $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_slider_section_settings'.$i,
		    array(
		    'label' => __('Slider Settings ','solar-renewable-energy-pro').$i,
		    'section' => 'solar_renewable_energy_pro_slider_section'
		)));

		$wp_customize->add_setting('solar_renewable_energy_pro_slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'solar_renewable_energy_pro_slide_image'.$i,
	        array(
            'label' => __('Slider Image ','solar-renewable-energy-pro').$i.__(' (1600x562)','solar-renewable-energy-pro'),
            'section' => 'solar_renewable_energy_pro_slider_section',
            'settings' => 'solar_renewable_energy_pro_slide_image'.$i
		)));
		
		$wp_customize->add_setting('solar_renewable_energy_pro_slide_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('solar_renewable_energy_pro_slide_heading'.$i,array(
			'label' => __('Slide Heading','solar-renewable-energy-pro').$i,
			'section' => 'solar_renewable_energy_pro_slider_section',
			'setting'	=> 'solar_renewable_energy_pro_slide_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('solar_renewable_energy_pro_slide_heading_span'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('solar_renewable_energy_pro_slide_heading_span'.$i,array(
			'label' => __('Slide Heading Span','solar-renewable-energy-pro').$i,
			'section' => 'solar_renewable_energy_pro_slider_section',
			'setting'	=> 'solar_renewable_energy_pro_slide_heading_span'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('solar_renewable_energy_pro_slide_text'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('solar_renewable_energy_pro_slide_text'.$i,array(
			'label' => __('Slide Text','solar-renewable-energy-pro').$i,
			'section' => 'solar_renewable_energy_pro_slider_section',
			'setting'	=> 'solar_renewable_energy_pro_slide_text'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('solar_renewable_energy_pro_slide_btn'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('solar_renewable_energy_pro_slide_btn'.$i,array(
			'label' => __('Slide Button','solar-renewable-energy-pro').$i,
			'section' => 'solar_renewable_energy_pro_slider_section',
			'setting'	=> 'solar_renewable_energy_pro_slide_btn'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('solar_renewable_energy_pro_slide_btn_url'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('solar_renewable_energy_pro_slide_btn_url'.$i,array(
			'label' => __('Slide Button Url','solar-renewable-energy-pro').$i,
			'section' => 'solar_renewable_energy_pro_slider_section',
			'setting'	=> 'solar_renewable_energy_pro_slide_btn_url'.$i,
			'type'	=> 'text'
		));
	}

	// Other Settings
	$wp_customize->add_setting('solar_renewable_energy_pro_slide_delay',array(
		'default'	=> '1000',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('solar_renewable_energy_pro_slide_delay',array(
		'label'	=> __('Slide Delay','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_slider_section',
		'description' => __('interval is in milliseconds. 1000 = 1 second -> so 1000 * 10 = 10 seconds', 'solar-renewable-energy-pro'),
		'type'		=> 'number'
	));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_slide_remove_fade',
     array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'solar_renewable_energy_pro_switch_sanitization'
     ));
   
    $wp_customize->add_control( new solar_renewable_energy_pro_Toggle_Switch_Custom_Control( $wp_customize, 'solar_renewable_energy_pro_slide_remove_fade',
       array(
          'label' => esc_html__( 'Remove Fade Effect', 'solar-renewable-energy-pro' ),
          'section' => 'solar_renewable_energy_pro_slider_section'
       )
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_slider_section_color_setting',
		    array(
		    'default' => '',
		    'transport' => 'postMessage',
		    'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
	 ));
	 $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_slider_section_color_setting',
	    array(
	    'label' => __('Slider Color Settings ','solar-renewable-energy-pro'),
	    'section' => 'solar_renewable_energy_pro_slider_section'
	)));

	// This is Slider Heading Color picker setting
	$wp_customize->add_setting( 'solar_renewable_energy_pro_sliderHeading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_sliderHeading_color', array(
		'label' => __('Slider Heading Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_slider_section',
		'settings' => 'solar_renewable_energy_pro_sliderHeading_color',
	)));
	//This is Slider Heading FontFamily picker setting
	$wp_customize->add_setting('solar_renewable_energy_pro_sliderHeading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'solar_renewable_energy_pro_sliderHeading_font_family', array(
	    'section'  => 'solar_renewable_energy_pro_slider_section',
	    'label'    => __( 'Slider Heading Fonts','solar-renewable-energy-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_sliderHeading_span_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_sliderHeading_span_color', array(
		'label' => __('Slider Heading Span Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_slider_section',
		'settings' => 'solar_renewable_energy_pro_sliderHeading_span_color',
	)));
	$wp_customize->add_setting('solar_renewable_energy_pro_sliderHeading_span_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'solar_renewable_energy_pro_sliderHeading_span_font_family', array(
	    'section'  => 'solar_renewable_energy_pro_slider_section',
	    'label'    => __( 'Slider Heading Span Fonts','solar-renewable-energy-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	// This is Slider Text Color picker setting
	$wp_customize->add_setting( 'solar_renewable_energy_pro_slidertext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_slidertext_color', array(
		'label' => __('Slider Text Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_slider_section',
		'settings' => 'solar_renewable_energy_pro_slidertext_color',
	)));
	//This is Slider Text FontFamily picker setting
	$wp_customize->add_setting('solar_renewable_energy_pro_slidertext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'solar_renewable_energy_pro_slidertext_font_family', array(
	    'section'  => 'solar_renewable_energy_pro_slider_section',
	    'label'    => __( 'Slider Text Fonts','solar-renewable-energy-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_slider_btn_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_slider_btn_color', array(
		'label' => __('Slider Button Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_slider_section',
		'settings' => 'solar_renewable_energy_pro_slider_btn_color',
	)));
	$wp_customize->add_setting('solar_renewable_energy_pro_slider_btn_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'solar_renewable_energy_pro_slider_btn_font_family', array(
	    'section'  => 'solar_renewable_energy_pro_slider_section',
	    'label'    => __( 'Slider Button Fonts','solar-renewable-energy-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_slider_btn_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_slider_btn_bgcolor', array(
		'label' => __('Slider Button Background Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_slider_section',
		'settings' => 'solar_renewable_energy_pro_slider_btn_bgcolor',
	)));
?>