<?php
// All Input Area Design

// Header css input
function scs_header_css_box(){ ?>
	<textarea rows="12" cols="20" class="large-text code" name="header-css" ><?php 
			$header_css = get_option( 'header-css' );
			if(!empty($header_css)){
			echo esc_html($header_css);
			}		
		?></textarea>
<?php }

// Header js input
function scs_header_js_box(){ ?>
	<textarea rows="12" cols="20" class="large-text code" name="header-js" ><?php 
	if(!empty(scs_header_script())){
		echo scs_header_script();
	}	
	?></textarea>
<?php }

// Footer css input
function scs_footer_css_box(){ ?>
	<textarea rows="12" cols="20" class="large-text code" name="footer-css" ><?php
		$footer_css = get_option( 'footer-css' );
			if(!empty($footer_css)){
			echo esc_html($footer_css);
		}
	?></textarea>
<?php }

// Footer js input
function scs_footer_js_box(){ ?>
	<textarea rows="12" cols="20" class="large-text code" name="footer-js" ><?php 
		if(!empty(scs_footer_script())){
			echo scs_footer_script();
		}		
	?></textarea>
<?php }





