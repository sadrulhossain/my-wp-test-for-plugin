<?php

/**
 * Init styles and scripts
 */
function mytp_public_styles_scripts(){
    //css styles
	wp_enqueue_style( 'mytp-public-style',  MYTP_URL . '/public/css/public.css');
    //js scripts
	wp_enqueue_script( 'mytp-jquery-min', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '1.0.0', false );
	wp_enqueue_script( 'mytp-public-script', MYTP_URL . '/public/js/public.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'mytp_public_styles_scripts');