<?php

function myFunction_files() {
    // Links your custom stylesheet
    wp_enqueue_style('my_main_styles', get_stylesheet_uri());
}

// Universal Wp function to load scripts (Hook)
add_action('wp_enqueue_scripts', 'myFunction_files');
