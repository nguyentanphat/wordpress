<?php
/*
Plugin Name: Name Of The Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/
//SETUP
function super_plugin_install(){
    //Do some installation work
}
register_activation_hook(__FILE__,'super_plugin_install');
//SCRIPTS
function super_plugin_scripts(){
    wp_register_script('super_plugin_script',plugin_dir_url( __FILE__ ).'js/super-plugin.js');
    wp_enqueue_script('super_plugin_script');
}
add_action('wp_enqueue_scripts','super_plugin_scripts'); 


//HOOKS
add_action('init','super_plugin_init');
/********************************************************/
/* FUNCTIONS
********************************************************/
function super_plugin_init(){
    //do work
	echo "hhhhhhhhhhhhhhhhhhhhhhh";
    run_sub_process();
}

function run_sub_process(){
    //more work
}

add_action("wp_footer",'fuck_phat');
function fuck_phat() {
	echo "OHYEAHHHHHHHHHHHHHHHHHHHHHHHHH";
}
?> 
