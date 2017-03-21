<?php
/*
Plugin Name: Scheduled Posts
Plugin URI: http://www.andynguyen.net
Description: Schedule display of wordpress posts based on date and time
Author: Andy Nguyen
Version: 1.0
Author URI: http://www.andynguyen.net
*/


#error_reporting(E_ALL);

if( !class_exists('base_plugin') )
    require_once( dirname( __FILE__ ) . '/lib/class.base.php' );
require_once( dirname( __FILE__ ) . '/lib/class.core.php' );

add_action( 'plugins_loaded', array(sp_core::get_instance(), 'init') );