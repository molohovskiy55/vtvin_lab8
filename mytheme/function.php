<?php

function wptuts_scripts() {
    wp_enqueue_style('style-css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scrips' ); 