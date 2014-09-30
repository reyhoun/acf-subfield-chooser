<?php

/*
Plugin Name: Advanced Custom Fields: Subfield Chooser
Plugin URI: https://github.com/reyhoun/acf-subfield-chooser.git
Description: Return custom subfield value of a custom repeater field as a select box
Version: 1.1.0
Author: Reyhoun
Author URI: reyhoun.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-subfield_chooser', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_subfield_chooser( $version ) {
	
	include_once('acf-subfield-chooser-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_subfield_chooser');	


	
?>