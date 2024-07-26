<?php
/**
 * Plugin Name: Sort Settings Menu
 * Description: Arrange the items in the "Settings" menu of the WordPress admin in alphabetical order.
 * Version: 1.1.0
 * Author: Plugin Pizza
 * Author URI: https://github.com/functionsfile
 * Plugin URI: https://github.com/functionsfile/sort-settings-menu
 * License: GPLv3+
 *
 * @package PluginPizza\SortSettingsMenu
 */

if ( is_admin() ) {

	if ( file_exists( plugin_dir_path( __FILE__ ) . 'admin.php' ) ) {
		require_once plugin_dir_path( __FILE__ ) . 'admin.php';
	}
}
