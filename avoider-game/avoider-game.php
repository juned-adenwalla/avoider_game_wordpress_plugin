<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.github.io/juned-adenwalla/
 * @since             1.0.0
 * @package           Avoider_Game
 *
 * @wordpress-plugin
 * Plugin Name:       Avoider - HTML Game for WordPress
 * Plugin URI:        https://www.github.io/juned-adenwalla/avoider-game
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Juned Adenwalla
 * Author URI:        https://www.github.io/juned-adenwalla/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       avoider-game
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('AVOIDER_GAME_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-avoider-game-activator.php
 */
function activate_avoider_game()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-avoider-game-activator.php';
	Avoider_Game_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-avoider-game-deactivator.php
 */
function deactivate_avoider_game()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-avoider-game-deactivator.php';
	Avoider_Game_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_avoider_game');
register_deactivation_hook(__FILE__, 'deactivate_avoider_game');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-avoider-game.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_avoider_game()
{

	$plugin = new Avoider_Game();
	$plugin->run();
}
run_avoider_game();


add_shortcode('avoiderGame', 'avoiderGame');

function avoiderGame(){?>
	<div>
		<script src="https://cdn.htmlgames.com/embed.js?game=Avoider&amp;bgcolor=white"></script>
	</div>
<?php }
