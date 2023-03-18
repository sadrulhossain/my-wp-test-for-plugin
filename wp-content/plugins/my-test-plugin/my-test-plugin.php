<?php

/**
 * Plugin Name: My Test Plugin
 * Plugin URI: https://wordpress.org/plugins/my-test-plugin/
 * Description:       My Test Plugin is wordpress plugin for learning and testing plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Sadrul Hossain
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       mytp
 */

 if(!defined('ABSPATH')) exit; //direct access not allowed

/**
 * define pludin constnts
 */
define('MYTP_PATH', trailingslashit(plugin_dir_path(__FILE__)));
define('MYTP_URL', trailingslashit(plugin_dir_url(__FILE__)));

/**
 * include admin.php and public.php
 */
if(is_admin()){
    require_once MYTP_PATH . '/admin/admin.php';
} else {
    require_once MYTP_PATH . '/public/public.php';
}