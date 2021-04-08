<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/justatom
 * @since      1.0.0
 *
 * @package    Jawc_Line_Noti
 * @subpackage Jawc_Line_Noti/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Jawc_Line_Noti
 * @subpackage Jawc_Line_Noti/includes
 * @author     Theerakamon Kruakoon <theerakamon.k@gmail.com>
 */
class Jawc_Line_Noti_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'jawc-line-noti',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
