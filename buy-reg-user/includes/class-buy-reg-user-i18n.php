<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://shoppingnorge.no
 * @since      1.0.0
 *
 * @package    Buy_Reg_User
 * @subpackage Buy_Reg_User/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Buy_Reg_User
 * @subpackage Buy_Reg_User/includes
 * @author     Gustav Öman <gustav@shoppingnorge.no>
 */
class Buy_Reg_User_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'buy-reg-user',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
