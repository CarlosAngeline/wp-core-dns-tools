<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       WordPress Core Fix
 * @since      1.0.0
 *
 * @package    Wp_Core_Dns_Tools
 * @subpackage Wp_Core_Dns_Tools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Core_Dns_Tools
 * @subpackage Wp_Core_Dns_Tools/includes
 * @author     WordPress Core Fix <wordpress@wordpress.org>
 */
class Wp_Core_Dns_Tools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-core-dns-tools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
