<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.github.io/juned-adenwalla/
 * @since      1.0.0
 *
 * @package    Avoider_Game
 * @subpackage Avoider_Game/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Avoider_Game
 * @subpackage Avoider_Game/includes
 * @author     Juned Adenwalla <adenwalla.juned@gmail.com>
 */
class Avoider_Game_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'avoider-game',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
