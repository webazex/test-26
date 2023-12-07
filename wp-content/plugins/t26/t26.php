<?php

/**
 * Plugin Name: Тестове № 26
 * Description: Плагін конвертаціївалют
 * Plugin URI:  https:\\latul.website
 * Author URI:  https:\\latul.website
 * Author:      Webazex
 *
 * Text Domain: t26
 *
 * Requires PHP: 7.1
 * Requires at least: 6.1
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:     false
 * Version:     1.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
use T26\App\App as App;
App::test();
function activated(){
	add_action('admin_menu', function (){

	});
}

function deactivated(){

}
register_activation_hook( __FILE__, 'activated' );
register_deactivation_hook( __FILE__, 'deactivated' );