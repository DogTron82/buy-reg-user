<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://shoppingnorge.no
 * @since             1.0.0
 * @package           Buy_Reg_User
 *
 * @wordpress-plugin
 * Plugin Name:       Buyer to user auto registration
 * Plugin URI:        https://shoppingnorge.no
 * Description:       WooCommerce do not auto create a user for a guest buyer, this can become a problem if you use other plugins such as memberships or similiar plugins that demands a user to function properly. Here at Shopping Norge we constantly develops modifications and adjustments to WooCommerce stores, this is a function that creates a user when a guest buys something at your store. This is also a benefit for stores that need to send emails to users / customers. 
 * Version:           1.0.0
 * Author:            Gustav Öman
 * Author URI:        https://shoppingnorge.no
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       buy-reg-user
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BUY_REG_USER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-buy-reg-user-activator.php
 */
function activate_buy_reg_user() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buy-reg-user-activator.php';
	Buy_Reg_User_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-buy-reg-user-deactivator.php
 */
function deactivate_buy_reg_user() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buy-reg-user-deactivator.php';
	Buy_Reg_User_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_buy_reg_user' );
register_deactivation_hook( __FILE__, 'deactivate_buy_reg_user' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-buy-reg-user.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_buy_reg_user() {

	$plugin = new Buy_Reg_User();
	$plugin->run();

}
run_buy_reg_user();
