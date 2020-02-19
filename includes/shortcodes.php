<?php

function regiondo_booking_init() {

	/**
	 * booking widget
	 * [regiondo_booking offer="xxx"]
	 * @return iframe 
	 */
	
	add_shortcode('regiondo_booking', 'dh_regiondo_booking');
	function dh_regiondo_booking( $atts, $content, $tag ) {
		
		$options = get_option( 'regiondo_options' );
		$sc = shortcode_atts( array(
			'offer' => ''
			), $atts );
		
		if ($sc['offer'] === '' || $sc['offer'] === 'xxxxx') {
			$output = 'Please add the offer ID to you shortcode. <br> like this:[regiondo_booking offer="11111"]';
			return $output;
		};

		$output = '<iframe id="regiondo-booking-widget" 
		data-width="338px" data-checkout="lightbox" 
		data-url="https://'. esc_attr($options[ 'regiondo_field_domain']) .'/bookingwidget/vendor/13546/id/' . esc_attr( $sc['offer'] ) . '" data-title="Klangreise" 
		style="border:0;background:transparent;"></iframe>';
		

		// get the value of the setting we've registered with register_setting()
		// $output .= '<pre>' . print_r($options, true) . '</pre>';

		return $output;
	}






 
	/**
	 * review 
	 * [regiondo_review offer="xxx"]
	 * @return iframe 
	 */

	add_shortcode('regiondo_review', 'dh_regiondo_review');
	function dh_regiondo_review( $atts, $content, $tag ) {
		
		$options = get_option( 'regiondo_options' );
		$sc = shortcode_atts( array(
			'offer' => ''
			), $atts );
		
		if ($sc['offer'] === 'xxxxx') {
			$output = 'Please add the offer ID to you shortcode. <br> like this:[regiondo_booking offer="11111"]';
			return $output;
		};

		$output = '<iframe 
				id="regiondo-review-widget" 
				style="border:0;background:transparent;"
				data-url="https://'. esc_attr($options['regiondo_field_domain']) .'/reviewwidget/vendor/13546"
				data-width="100%"
				data-products="'.esc_attr( $sc['offer'] ).'"
				data-language="de_DE"
				data-number="'. esc_attr($options['regiondo_filed_reviews_per_page']) .'"
				data-total="'. esc_attr($options['regiondo_filed_reviews_show_total']) .'"
				data-colors="#ecf3f4,#ffffff,#3d3d3d,#ecb86b">
			</iframe>';
		$output .= '<script 
				id="regiondo-reviews-js" 
				src="https://cdn.regiondo.net/js/integration/regiondo-reviews.js" 
				async 
				defer>
			</script>';

		// get the value of the setting we've registered with register_setting()
		// $output .= '<pre>' . print_r($options, true) . '</pre>';

		return $output;
	}






	/**
	 * voucher
	 * [regiondo_voucher]
	 * @return iframe 
	 */
	add_shortcode('regiondo_voucher', 'dh_regiondo_voucher');
	function dh_regiondo_voucher( $atts, $content, $tag ) {
		
		$options = get_option( 'regiondo_options' );
		
		$output = '<iframe src="https://'. esc_attr($options[ 'regiondo_field_domain']) .'/gutschein" 
			frameborder="0"
			data-checkout="lightbox"
			style="margin: 0px; padding: 0px; overflow: hidden; vertical-align: top;  border: 0px; background: transparent; width: 100%; height: 400px;"></iframe>';


		// get the value of the setting we've registered with register_setting()
		// $output .= '<pre>' . print_r($options, true) . '</pre>';

		return $output;
	}


}

add_action('init', 'regiondo_booking_init');