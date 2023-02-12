<?php
/**
 * Plugin Name: Sorted Settings Menu
 * Description: Sort the WordPress admin 'Settings' menu alphabetically.
 * Version: 1.0.0
 * Author: Functions File, Barry Ceelen
 * Author URI: https://github.com/functionsfile
 * Plugin URI: https://github.com/functionsfile/unfuck-settings-menu
 * License: GPLv3+
 *
 * @package SortedSettingsMenu
 */

if ( is_admin() ) {

	if ( file_exists( plugin_dir_path( __FILE__ ) . 'admin.php' ) ) {
		require_once plugin_dir_path( __FILE__ ) . 'admin.php';
	}
}
