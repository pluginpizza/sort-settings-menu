=== Sort Settings Menu ===
Contributors: functionsfile, barryceelen
Tags: admin, settings
Requires at least: 4.6
Tested up to: 6.1
Requires PHP: 5.3
Stable tag: 1.0.3
License: GPLv3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Arrange the items in the "Settings" menu of the WordPress admin in alphabetical order.

== Description ==

The "Settings" menu in the WordPress admin menu can become confusing when there are multiple plugins installed. Sort Settings Menu helps by organizing the "Settings" menu in alphabetical order, making it easier to find the correct settings page.

To use Sort Settings Menu, there are only two things you need to do: install and activate the plugin. Sort Settings Menu automatically sorts the "Settings" menu in alphabetical order without any extra configuration. Sort Settings Menu also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/).

== Installation ==

To use Sort Settings Menu, there are only two things you need to do: install and activate the plugin. Sort Settings Menu automatically sorts the "Settings" menu in alphabetical order without any extra configuration. Sort Settings Menu also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/).

### Install Sort Settings Menu from within WordPress

1. Visit the Plugins page within your dashboard and select ‘Add New’
1. Search for 'Sort Settings Menu'
1. Install and activate Sort Settings Menu from your Plugins page

### Install Sort Settings Menu manually

1. Upload the 'sort-settings-menu' folder to the /wp-content/plugins/ directory
1. Activate the Sort Settings Menu plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can Sort Settings Menu alphabetically sort other admin menus? =

Sort Settings Menu only sorts the "Settings" menu and does not have any options to sort other parts of the admin menu. A `sorted_settings_menu` [filter](https://developer.wordpress.org/plugins/hooks/filters/) is available that allows additional menus to be sorted via code. For example, if you add the following code to your theme's `functions.php` file or to a plugin, both the "Settings" and "Tools" sections will be sorted alphabetically.

```
// Organize the "Settings" and "Tools" menu in alphabetical order.
add_filter( 'sort_settings_menu', function( $menus ) {
	return array( 'options-general.php', 'tools.php' );
} );
```

== Changelog ==

= 1.0 =
Release Date: February 12, 2023

- Initial release.

