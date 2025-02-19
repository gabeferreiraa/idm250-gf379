<?php

function theme_styles_and_scripts() {

    wp_enqueue_style(
        'idm-main', // Handle for the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // Path to the stylesheet
        [], // No dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css') // Cache-busting by file modification time
    );

}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');

function theme_setup()
{
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');


