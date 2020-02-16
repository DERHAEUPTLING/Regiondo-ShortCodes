<?php
/**
 * Plugin Name: Regiondo Widgets
 * Plugin URI: https://github.com/derhaeuptling/Regiondo-ShortCode-Widgets
 * Description: Add Regiondo Widgets.
 * Version: 0.1
 * Author: DER HÄUPTLING
 * Author URI: https://derhaeuptling.com/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: regiondo-widgets
 */





/**
 * [regiondo_booking_widget offer="11111"] returns a iframe booking widget
 * @return iframe 
 */
add_shortcode('regiondo_booking_widget', 'dh_regiondo_booking_widget');

function regiondo_booking_widget_init() {
	function dh_regiondo_booking_widget( $atts, $content, $tag ) {
		$a = shortcode_atts( array(
			'offer' => ''
			), $atts );
		
		if ($a['offer'] === '') {
			return 'Please add the offer ID to you shortcode. <br> like this:[regiondo_booking_widget offer="11111"]';
		};

		$output = '<iframe id="regiondo-booking-widget" 
		data-width="338px" data-checkout="lightbox" 
		data-url="https://schulerloch.regiondo.de/bookingwidget/vendor/13546/id/' . esc_attr( $a['offer'] ) . '" data-title="Klangreise" 
		style="border:0;background:transparent;"></iframe>';
		$output .= '<script id="regiondo-booking-js" 
		src="https://cdn.regiondo.net/js/integration/regiondo-booking.js" 
		data-url="https://schulerloch.regiondo.de/"
		data-cart-show="true"
		data-cart-price="true"
		data-cart-icon="https://cdn.regiondo.net/js/integration/regiondo-cart-icon.png"
		data-cart-color="#ffffff"
		data-cart-background="#78d28c"
		data-cart-position="bottom-right"
		async defer></script>';
	
		return $output;
	}
}
add_action('init', 'regiondo_booking_widget_init');


 





if ( is_admin() ) {
	// we are in admin mode
	// require_once __DIR__ . '/admin/plugin-name-admin.php';
}

