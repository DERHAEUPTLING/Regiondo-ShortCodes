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
 * booking widget
 * [regiondo_booking offer="11111"]
 * @return iframe 
 */
add_shortcode('regiondo_booking', 'dh_regiondo_booking');

function regiondo_booking_init() {
	function dh_regiondo_booking( $atts, $content, $tag ) {
		$a = shortcode_atts( array(
			'offer' => ''
			), $atts );
		
		if ($a['offer'] === '') {
			$output = 'Please add the offer ID to you shortcode. <br> like this:[regiondo_booking offer="11111"]';
			
			return $output;
		};

		$output = '<iframe id="regiondo-booking-widget" 
		data-width="338px" data-checkout="lightbox" 
		data-url="https://schulerloch.regiondo.de/bookingwidget/vendor/13546/id/' . esc_attr( $a['offer'] ) . '" data-title="Klangreise" 
		style="border:0;background:transparent;"></iframe>';
	
		return $output;
	}
}
add_action('init', 'regiondo_booking_init');


 
/**
 * review 
 * [regiondo_review]
 * @return iframe 
 */

 /**
 * voucher
 * [regiondo_voucher]
 * @return iframe 
 */



if ( is_admin() ) {
	// we are in admin mode
	// require_once __DIR__ . '/admin/plugin-name-admin.php';
}




/**
 * add footer scripts for the regiondo widgets
 */
add_action('wp_footer', 'regiondo_footer');
function regiondo_footer(){
?>
<script id="regiondo-booking-js" 
	src="https://cdn.regiondo.net/js/integration/regiondo-booking.js" 
	data-url="https://schulerloch.regiondo.de/"
	data-cart-show="true"
	data-cart-price="true"
	data-cart-text=""
	data-cart-icon="https://cdn.regiondo.net/js/integration/regiondo-cart-icon.png"
	data-cart-color="#ffffff"
	data-cart-background="#78d28c"
	data-cart-position="bottom-right"
	data-cart-font
	async defer></script>
<?php
};