<?php
/**
 * Plugin Name: Regiondo Widgets
 * Plugin URI: https://github.com/derhaeuptling/Regiondo-ShortCode-Widgets
 * Description: integrate the Regiondo Booking Widgets into a WP Website
 * Version: 0.1
 * Author: Martin Schwenzer, DER HÄUPTLING
 * Author URI: https://derhaeuptling.com/
 */


function derhaeuptling_regiondo_widget($atts) {
	$Content = "<style>\r\n";
	$Content .= "h3.demoClass {\r\n";
	$Content .= "color: #26b158;\r\n";
	$Content .= "}\r\n";
	$Content .= "</style>\r\n";
	$Content .= '<h3 class="demoClass">Check it out!</h3>';
	 
  return $Content;
}
 
add_shortcode('tbare-plugin-demo', 'derhaeuptling_regiondo_widget');

