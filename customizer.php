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
    $wp_customize->add_setting('sb_theme_main_nav', array(
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

    //TODO: Add controller for main navigation menu configuration

    // $menus = wp_get_nav_menus();
    // $menuChoices = [];
    // foreach ( $menus as $menu ) {
    //     $menuChoices[$menu->slug] = $menu->name;
    // }

    // $wp_customize->add_control('sb_theme_main_nav', array(
    //     'label'        => 'Main Navigation Menu',
    //     'description' => "Create/Edit in Appearance > Menus",
    //     'section'    => 'sb_theme_settings',
    //     'settings'   => 'sb_theme_main_nav',
    //     'type' => 'radio',
    //     'choices' =>  $menuChoices
    // ));
}
add_action('customize_register', 'slash_blog_customize_register');
