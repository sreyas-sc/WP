<?php
	
	// ------------- Topbar ----------------

	$wp_customize->add_section('solar_renewable_energy_pro_topbar_section',array(
		'title'	=> __('Topbar','solar-renewable-energy-pro'),
		'description'	=> __('Topbar Settings','solar-renewable-energy-pro'),
		'priority'	=> null,
		'panel' => 'solar_renewable_energy_pro_panel_id',
	));
	
	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_section_phone_icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_topbar_section_phone_icon',array(
		'label'	=> __('Phone Icon','solar-renewable-energy-pro'),
		'description'	=> __('Add Font Awesome Class Here','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_topbar_section',
		'setting'	=> 'solar_renewable_energy_pro_topbar_section_phone_icon',
		'type'		=> 'text'
	));	
	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_section_phone_no',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_topbar_section_phone_no',array(
		'label'	=> __('Add Phone Number','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_topbar_section',
		'setting'	=> 'solar_renewable_energy_pro_topbar_section_phone_no',
		'type'		=> 'text'
	));	
	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_section_phone_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_topbar_section_phone_title',array(
		'label'	=> __('Phone Title','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_topbar_section',
		'setting'	=> 'solar_renewable_energy_pro_topbar_section_phone_title',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_section_email_icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_topbar_section_email_icon',array(
		'label'	=> __('Email Icon','solar-renewable-energy-pro'),
		'description'	=> __('Add Font Awesome Class Here','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_topbar_section',
		'setting'	=> 'solar_renewable_energy_pro_topbar_section_email_icon',
		'type'		=> 'text'
	));	
	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_section_email_id',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_topbar_section_email_id',array(
		'label'	=> __('Add Email Address','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_topbar_section',
		'setting'	=> 'solar_renewable_energy_pro_topbar_section_email_id',
		'type'		=> 'text'
	));	
	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_section_email_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_topbar_section_email_title',array(
		'label'	=> __('Email Title','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_topbar_section',
		'setting'	=> 'solar_renewable_energy_pro_topbar_section_email_title',
		'type'		=> 'text'
	));	
	$wp_customize->add_setting( 'solar_renewable_energy_pro_topbar_color_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
	));
	$wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_topbar_color_settings',
	  array(
	  'label' => __('Topbars Color Settings ','solar-renewable-energy-pro'),
	  'section' => 'solar_renewable_energy_pro_topbar_section'
	)));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_topbar_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_topbar_icon_color', array(
		'label' => __('Topbar Icon Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_topbar_section',
		'settings' => 'solar_renewable_energy_pro_topbar_icon_color',
	)));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_topbar_icon_border_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_topbar_icon_border_color', array(
		'label' => __('Topbar Icon Border Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_topbar_section',
		'settings' => 'solar_renewable_energy_pro_topbar_icon_border_color',
	)));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_topbar_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_topbar_title_color', array(
		'label' => __('Topbar Title Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_topbar_section',
		'settings' => 'solar_renewable_energy_pro_topbar_title_color',
	)));

	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_title_font_family',array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	  'solar_renewable_energy_pro_topbar_title_font_family', array(
	  'section'  => 'solar_renewable_energy_pro_topbar_section',
	  'label'    => __( 'Topbar Title Fonts','solar-renewable-energy-pro'),
	  'type'     => 'select',
	  'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_topbar_content_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_topbar_content_color', array(
		'label' => __('Topbar Content Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_topbar_section',
		'settings' => 'solar_renewable_energy_pro_topbar_content_color',
	)));

	$wp_customize->add_setting('solar_renewable_energy_pro_topbar_content_font_family',array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	  'solar_renewable_energy_pro_topbar_content_font_family', array(
	  'section'  => 'solar_renewable_energy_pro_topbar_section',
	  'label'    => __( 'Topbar Content Fonts','solar-renewable-energy-pro'),
	  'type'     => 'select',
	  'choices'  => $font_array,
	));

	// Header Section
	$wp_customize->add_section('solar_renewable_energy_pro_header_section',array(
		'title'	=> __('Header','solar-renewable-energy-pro'),
		'description'	=> __('Header Settings','solar-renewable-energy-pro'),
		'priority'	=> null,
		'panel' => 'solar_renewable_energy_pro_panel_id',
	)); 
	$wp_customize->add_setting('solar_renewable_energy_pro_header_section_button',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_header_section_button',array(
		'label'	=> __('Header Button','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_header_section',
		'setting'	=> 'solar_renewable_energy_pro_header_section_button',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('solar_renewable_energy_pro_header_section_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('solar_renewable_energy_pro_header_section_button_url',array(
		'label'	=> __('Header Button Url','solar-renewable-energy-pro'),
		'section'	=> 'solar_renewable_energy_pro_header_section',
		'setting'	=> 'solar_renewable_energy_pro_header_section_button_url',
		'type'		=> 'text'
	));
	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'solar_renewable_energy_pro_headerhomebg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_headerhomebg_color', array(
		'label' => __('Header Background Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_headerhomebg_color',
	)));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_headermenu_color',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('solar_renewable_energy_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'solar_renewable_energy_pro_headermenu_font_family', array(
	    'section'  => 'solar_renewable_energy_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','solar-renewable-energy-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_header_menuhovercolor',
	)));
	
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'solar_renewable_energy_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_dropdownbg_itemcolor',
	)));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_dropdownbg_item_hovercolor',
	)));

	$wp_customize->add_setting( 'solar_renewable_energy_pro_header_menu_active_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_header_menu_active_color', array(
		'label' => __('Active Menu Item Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_header_menu_active_color',
	)));

	//In Responsive
	$wp_customize->add_setting( 'solar_renewable_energy_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_headermenu_responsive_item_color',
	)));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_headermenu_responsive_item_active_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_headermenu_responsive_item_active_color', array(
		'label' => __('Responsive Menu item Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_headermenu_responsive_item_active_color',
	)));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_header_btn_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_header_btn_color', array(
		'label' => __('Header Button Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_header_btn_color',
	)));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_header_btn_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_header_btn_bgcolor', array(
		'label' => __('Header Button Background Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_header_btn_bgcolor',
	)));
	$wp_customize->add_setting( 'solar_renewable_energy_pro_header_btn_hover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_header_btn_hover_color', array(
		'label' => __('Header Button Hover Color', 'solar-renewable-energy-pro'),
		'section' => 'solar_renewable_energy_pro_header_section',
		'settings' => 'solar_renewable_energy_pro_header_btn_hover_color',
	)));
	
?>