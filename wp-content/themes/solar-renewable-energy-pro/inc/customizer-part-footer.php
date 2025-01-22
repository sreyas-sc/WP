<?php
   
    /*------------------- Footer Sections ----------------------*/

    $wp_customize->add_section('solar_renewable_energy_pro_footer_widget_section',array(
        'title' => __('Footer Widgets','solar-renewable-energy-pro'),
        'description'   => __('Edit footer Widgets sections','solar-renewable-energy-pro'),
        'panel' => 'solar_renewable_energy_pro_panel_id',
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_footer_widgets_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_footer_widgets_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'solar_renewable_energy_pro_footer_widget_section',
        'choices' => array(
            'Enable' => __('Enable', 'solar-renewable-energy-pro'),
            'Disable' => __('Disable', 'solar-renewable-energy-pro')
        ),
    ));

    $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_footer_widgets_enable', array(
      'selector' => '#footer .footer-cols',
      'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_footer_widgets_enable',
    ) );

    $wp_customize->add_setting( 'solar_renewable_energy_pro_footer_widget_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_footer_widget_section_setting',
        array(
          'label' => __('Section Background Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_footer_widget_section'
        )
    ) );

    // add color picker setting
    $wp_customize->add_setting( 'solar_renewable_energy_pro_footer_widget_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_footer_widget_bgcolor', array(
        'label' => __('Background Color', 'solar-renewable-energy-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_footer_widget_section',
        'settings' => 'solar_renewable_energy_pro_footer_widget_bgcolor',
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_footer_widget_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
      'solar_renewable_energy_pro_footer_widget_bgimage',
      array(
          'label' => __('Background image','solar-renewable-energy-pro'),
          'description' => __('Dimention 1600 * 600','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_footer_widget_section',
          'settings' => 'solar_renewable_energy_pro_footer_widget_bgimage'
    )));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_footer_widget_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_footer_widget_heading_color', array(
        'label' => __('Widgets Heading Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_footer_widget_section',
        'settings' => 'solar_renewable_energy_pro_footer_widget_heading_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_footer_widget_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_footer_widget_heading_font_family', array(
        'section'  => 'solar_renewable_energy_pro_footer_widget_section',
        'label'    => __( 'Widgets Heading Font Family','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_footer_widget_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_footer_widget_content_color', array(
        'label' => __('Widgets Content Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_footer_widget_section',
        'settings' => 'solar_renewable_energy_pro_footer_widget_content_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_footer_widget_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_footer_widget_content_font_family', array(
        'section'  => 'solar_renewable_energy_pro_footer_widget_section',
        'label'    => __( 'Widgets Content Font Family','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    
    /*-----------------Footer Copyright--------------*/

    $wp_customize->add_section('solar_renewable_energy_pro_footer_section',array(
        'title' => __('Footer Text','solar-renewable-energy-pro'),
        'description'   => __('Add some text for footer like copyright etc.','solar-renewable-energy-pro'),
        'priority'  => null,
        'panel' => 'solar_renewable_energy_pro_panel_id',
    ));

    $wp_customize->add_setting('solar_renewable_energy_pro_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_footer_copy',array(
        'label' => __('Copyright Text','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_footer_section',
        'type'      => 'textarea'
    ));

    $wp_customize->selective_refresh->add_partial( 'solar_renewable_energy_pro_footer_copy', array(
      'selector' => '.copyright p',
      'render_callback' => 'solar_renewable_energy_pro_customize_partial_solar_renewable_energy_pro_footer_copy',
    ) );

    // add color picker setting
    $wp_customize->add_setting( 'solar_renewable_energy_pro_footer_copy_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_footer_copy_bgcolor', array(
        'label' => __('Background Color', 'solar-renewable-energy-pro'),
        'description'   => __('Either add background color or background image, if you add both background color will be top most priority','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_footer_section',
        'settings' => 'solar_renewable_energy_pro_footer_copy_bgcolor',
    )));
    $wp_customize->add_setting('solar_renewable_energy_pro_footer_copy_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'solar_renewable_energy_pro_footer_copy_bgimage',
            array(
                'label' => __('Background image','solar-renewable-energy-pro'),
                'description' => __('Dimention 1600 * 500','solar-renewable-energy-pro'),
                'section' => 'solar_renewable_energy_pro_footer_section',
                'settings' => 'solar_renewable_energy_pro_footer_copy_bgimage'
    )));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_footer_copy_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_footer_copy_content_color', array(
        'label' => __('Content Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_footer_section',
        'settings' => 'solar_renewable_energy_pro_footer_copy_content_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_footer_copy_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_footer_copy_content_font_family', array(
        'section'  => 'solar_renewable_energy_pro_footer_section',
        'label'    => __( 'Content Font Family','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    
    /*---------------Contact Page section-------------*/

    $wp_customize->add_section('solar_renewable_energy_pro_contact_page_section',array(
        'title' => __('Contact','solar-renewable-energy-pro'),
        'description'   => __('Add contact page settings here).','solar-renewable-energy-pro'),
        'priority'  => null,
        'panel' => 'solar_renewable_energy_pro_panel_id',
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_section_address_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_section_address_setting',
        array(
          'label' => __('Section Address Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contact_page_section'
        )
    ) );
    
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_address_icon',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_address_icon',array(
        'label' => __('Address Icon','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_address_icon',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_address_title',array(
        'label' => __('Address','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_address_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_address',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_address',array(
        'label' => __('Address ','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_address',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_section_email_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_section_email_setting',
        array(
          'label' => __('Section Email Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contact_page_section'
        )));
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_email_icon',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_email_icon',array(
        'label' => __('Email Icon','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_email_icon',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_email_title',array(
        'label' => __('Email Title','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_email_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_email_one',array(
        'label' => __('First Email','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_email_one',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_email_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_email_two',array(
        'label' => __('Second Email','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_email_two',
        'type'  => 'text'
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_section_phone_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_section_phone_setting',
        array(
          'label' => __('Section Phone Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contact_page_section'
        )
    ) );
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_phone_icon',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_phone_icon',array(
        'label' => __('Phone Icon','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_phone_icon',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_phone_one',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_phone_one',array(
        'label' => __('First Phone','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_phone_one',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_phone_two',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_phone_two',array(
        'label' => __('Second Phone','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_phone_two',
        'type'  => 'text'
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_section_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_section_setting',
        array(
          'label' => __('Section Heading Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('solar_renewable_energy_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_contactpage_form_title',array(
        'label' => __('Form Title Title','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_contactpage_form_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_section_map_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_section_map_setting',
        array(
          'label' => __('Section Map Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting('solar_renewable_energy_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_address_longitude',array(
        'label' => __('Longitude','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_address_latitude',array(
        'label' => __('Latitude','solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'setting'   => 'solar_renewable_energy_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_section_details_setting',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'solar_renewable_energy_pro_text_sanitization'
    ));
    $wp_customize->add_control( new solar_renewable_energy_pro_Themes_Seperator_custom_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_section_details_setting',
        array(
          'label' => __('Section Text Color and Font Setting','solar-renewable-energy-pro'),
          'section' => 'solar_renewable_energy_pro_contact_page_section'
        )
    ) );

    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_heading_color', array(
        'label' => __('Section Title Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'settings' => 'solar_renewable_energy_pro_contact_page_heading_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_contact_page_heading_font_family', array(
        'section'  => 'solar_renewable_energy_pro_contact_page_section',
        'label'    => __( 'Section Title Font Family','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_content_color', array(
        'label' => __('Contact Heading Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'settings' => 'solar_renewable_energy_pro_contact_page_content_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_contact_page_contact_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_contact_page_contact_font_family', array(
        'section'  => 'solar_renewable_energy_pro_contact_page_section',
        'label'    => __( 'Contact Heading Font Family','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    // add color picker control
    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_contents_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_contents_color', array(
        'label' => __('Contact Content Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'settings' => 'solar_renewable_energy_pro_contact_page_contents_color',
    )));

    $wp_customize->add_setting('solar_renewable_energy_pro_contact_page_contacts_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'solar_renewable_energy_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'solar_renewable_energy_pro_contact_page_contacts_font_family', array(
        'section'  => 'solar_renewable_energy_pro_contact_page_section',
        'label'    => __( 'Contact Content Font Family','solar-renewable-energy-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    // add color picker control
    $wp_customize->add_setting( 'solar_renewable_energy_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));   
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solar_renewable_energy_pro_contact_page_icon_color', array(
        'label' => __('Contact Content Icon Color', 'solar-renewable-energy-pro'),
        'section' => 'solar_renewable_energy_pro_contact_page_section',
        'settings' => 'solar_renewable_energy_pro_contact_page_icon_color',
    )));

?>