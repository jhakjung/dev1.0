<?php

function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('university_extra_styles', get_theme_file_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
