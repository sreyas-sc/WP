<?php
    /* Footer Sections */
    $wp_customize->add_section('solar_renewable_energy_pro_social_icons',array(
        'title' => __('Social Icons','solar-renewable-energy-pro'),
        'description'   => __('Add social Icons Here','solar-renewable-energy-pro'),
        'panel' => 'solar_renewable_energy_pro_panel_id',
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headertwitter',array(
        'label' => __('Add Twitter link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('solar_renewable_energy_pro_headerpinterest',array(
        'label' => __('Add Pinterest link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headerfacebook',array(
        'label' => __('Add Facebook link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headeryoutube',array(
        'label' => __('Add Youtube link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headeryoutube',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headerinstagram',array(
        'label' => __('Add Instagram link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headerinstagram',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headerlinkedin',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headertumblric',array(
        'label' => __('Add Tumblric link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headertumblric',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headerflickr',array(
        'label' => __('Add Flicker link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headerflickr',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('solar_renewable_energy_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('solar_renewable_energy_pro_headervk',array(
        'label' => __('Add Vk link','solar-renewable-energy-pro'),
        'section'   => 'solar_renewable_energy_pro_social_icons',
        'setting'   => 'solar_renewable_energy_pro_headervk',
        'type'  => 'text'
    ));   
?>