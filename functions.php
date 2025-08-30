<?php

if ( ! function_exists( 'twentytwentyfivechild_enqueue_styles' ) ) {
    function twentytwentyfivechild_enqueue_styles() {
        wp_enqueue_style('twentytwentyfive-child-style', get_stylesheet_uri(), array('twentytwentyfive-style'), wp_get_theme()->get('Version'));
    }
}
add_action('wp_enqueue_scripts', 'twentytwentyfivechild_enqueue_styles');