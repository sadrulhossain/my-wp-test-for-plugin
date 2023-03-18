<?php
/**
 * Init styles and scripts
 */
function mytp_admin_styles_scripts(){
    //css styles
	wp_enqueue_style( 'mytp-admin-style',  MYTP_URL . '/admin/css/admin.css');
    //js scripts
	wp_enqueue_script( 'mytp-jquery-min', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '1.0.0', false );
	wp_enqueue_script( 'mytp-admin-script', MYTP_URL . '/admin/js/admin.js', array(), '1.0.0', true );
}
add_action('admin_enqueue_scripts', 'mytp_admin_styles_scripts');