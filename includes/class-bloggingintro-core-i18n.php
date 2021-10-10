<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.bloggingintro.com
 * @since      1.0.0
 *
 * @package    Bloggingintro_Core
 * @subpackage Bloggingintro_Core/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bloggingintro_Core
 * @subpackage Bloggingintro_Core/includes
 * @author     Tharindu Pramuditha <tharindutpk@gmail.com>
 */
class Bloggingintro_Core_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bloggingintro-core',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
