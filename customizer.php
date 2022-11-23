<?php
function slash_blog_customize_register($wp_customize)
{
    //Section
    $wp_customize->add_section('sb_theme_settings', array(
        'title'      => 'Slash Theme Options',
        'priority'   => 30,
    ));


    //Settings
    $wp_customize->add_setting('sb_theme_homepage_title', array(
        'default'     => get_bloginfo('title') ,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sb_theme_homepage_tagline', array(
        'default'     => get_bloginfo('description') ,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sb_theme_nav_classes', array(
        'default'     => "bg-gray-800" ,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sb_theme_nav_cta_classes', array(
        'default'     => "absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0" ,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sb_theme_nav_cta_button_text', array(
        'default'     => "Hire us" ,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sb_theme_nav_cta_button_link', array(
        'default'     => "/hire-us" ,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_setting('sb_theme_sidebar_recent_posts_count', array(
        'default'     => 5 ,
        'transport'   => 'refresh',
    ));



    //Controls
    $wp_customize->add_control('sb_theme_homepage_title', array(
        'label'        => 'Homepage Title',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_homepage_title'
    ));
    $wp_customize->add_control('sb_theme_homepage_tagline', array(
        'label'        => 'Homepage Tagline',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_homepage_tagline'
    ));
    $wp_customize->add_control('sb_theme_nav_classes', array(
        'label'        => 'Nav CSS Classes',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_nav_classes'
    ));
    $wp_customize->add_control('sb_theme_nav_cta_button_text', array(
        'label'        => 'Nav CTA Button Text',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_nav_cta_button_text'
    ));
    $wp_customize->add_control('sb_theme_nav_cta_button_link', array(
        'label'        => 'Nav CTA Button Link',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_nav_cta_button_link'
    ));
    $wp_customize->add_control('sb_theme_nav_cta_classes', array(
        'label'        => 'Nav CTA Button CSS Classes',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_nav_cta_classes'
    ));
    $wp_customize->add_control('sb_theme_sidebar_recent_posts_count', array(
        'label'        => 'Nav Sidebar Recent Posts Count',
        'section'    => 'sb_theme_settings',
        'settings'   => 'sb_theme_sidebar_recent_posts_count'
    ));
}
add_action('customize_register', 'slash_blog_customize_register');
