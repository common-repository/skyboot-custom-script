<?php
if( !defined('ABSPATH') ) exit;
// Load Script By Action Hook

// load css in head tag
function scs_header_css_loader(){
    $header_css = get_option( 'header-css' );
    if(!empty($header_css)){ ?>
        <style type="text/css">
            <?php echo esc_html($header_css); ?>
        </style>
    <?php }
}
add_action( 'wp_head', 'scs_header_css_loader' );

// load js in head tag	
function scs_header_js_loader(){
    if(!empty(scs_header_script())){    
        echo scs_header_script();
    }
}
add_action( 'wp_head', 'scs_header_js_loader' );
	
// load js in before closing body tag	
function scs_footer_css_loader(){
    $footer_css = get_option( 'footer-css' );
    if(!empty($footer_css)){ ?>
        <style type="text/css">
            <?php echo esc_html($footer_css); ?>
        </style>
    <?php }
}
add_action( 'wp_footer', 'scs_footer_css_loader' );
	
// load js in before closing body tag	
function scs_footer_js_loader(){
    if(!empty(scs_footer_script())){    
	    echo scs_footer_script();
    }
}
add_action( 'wp_footer', 'scs_footer_js_loader' );