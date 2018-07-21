<?php

function myFunction_files() {
    // Load Javascript
    wp_enqueue_script('my_main_javascript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
        // => wpwp_enqueue_script('script-made-up-name', get_theme_file_uri('/js/scripts-bundled.js'), DEPENDENCIES?, 'Version', loadInFooter?);
    // Load Fonts CSS
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // Load CDN Font Awesome Icons CSS
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // Links your custom stylesheet CSS
    wp_enqueue_style('my_main_styles', get_stylesheet_uri());
}

// Universal Wp function to load scripts (Hook)
add_action('wp_enqueue_scripts', 'myFunction_files');
