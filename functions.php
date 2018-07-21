<?php

function myFunction_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // Load CDN Font Awesome Icons
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // Links your custom stylesheet
    wp_enqueue_style('my_main_styles', get_stylesheet_uri());
}

// Universal Wp function to load scripts (Hook)
add_action('wp_enqueue_scripts', 'myFunction_files');
