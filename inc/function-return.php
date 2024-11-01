<?php 
if( !defined('ABSPATH') ) exit;
// All Return Function

// Callback CSS
function scs_section_callback_function(){
	return;
}

// Callback header script
function scs_header_script(){
	return wp_unslash(get_option('header-js'));
}

// Callback footer script
function scs_footer_script(){
	return wp_unslash(get_option('footer-js'));
}	