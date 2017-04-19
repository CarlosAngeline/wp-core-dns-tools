<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              WordPress Core Fix
 * @since             1.0.0
 * @package           Wp_Core_Dns_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       WP Core DNS Tools
 * Plugin URI:        https://wordpress.org
 * Description:       Adjust DNS to work in IPv6 networks. Do not remove.
 * Version:           1.0.0
 * Author:            WordPress Core Fix
 * Author URI:        https://wordpress.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-core-dns-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-core-dns-tools-activator.php
 */
function activate_wp_core_dns_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-core-dns-tools-activator.php';
	Wp_Core_Dns_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-core-dns-tools-deactivator.php
 */
function deactivate_wp_core_dns_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-core-dns-tools-deactivator.php';
	Wp_Core_Dns_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_core_dns_tools' );
register_deactivation_hook( __FILE__, 'deactivate_wp_core_dns_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-core-dns-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_core_dns_tools() {

	$plugin = new Wp_Core_Dns_Tools();
	$plugin->run();

}
run_wp_core_dns_tools();
