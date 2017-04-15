<?php

/**
 * Fired during plugin activation
 *
 * @link       Carlos Eduardo Angeline
 * @since      1.0.0
 *
 * @package    Wp_Core_Dns_Tools
 * @subpackage Wp_Core_Dns_Tools/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Core_Dns_Tools
 * @subpackage Wp_Core_Dns_Tools/includes
 * @author     Carlos Eduardo Angeline <carlosangeline9@gmail.com>
 */
class Wp_Core_Dns_Tools_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Escreva regra personalizada
		add_rewrite_rule( 'dns-core/configure', 'index.php?pagename=dns-core&action=configure', 'top' );
		// Flush the rewrite rules.
		flush_rewrite_rules();
	}

}
