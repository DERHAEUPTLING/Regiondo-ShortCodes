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


if ( is_admin() ) {
	require plugin_dir_path( __FILE__ ) . 'includes/admin.php';
	require plugin_dir_path( __FILE__ ) . 'includes/admin_template.php';
}


require plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';
require plugin_dir_path( __FILE__ ) . 'includes/footer.php';