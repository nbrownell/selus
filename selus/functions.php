<?php

function selus_scripts_styles() {
    wp_enqueue_style( 'selus-style', get_stylesheet_uri() );
    // wp_enqueue_script('selus-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'selus_scripts_styles');
