=== Sort Settings Menu ===
Contributors: pluginpizza, barryceelen, functionsfile
Tags: admin, settings
Requires at least: 4.6
Tested up to: 6.4
Requires PHP: 5.3
Stable tag: 1.1.0
License: GPLv3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Arrange the items in the "Settings" menu of the WordPress admin in alphabetical order.

== Description ==

The "Settings" section in the WordPress admininistration menu can become confusing when there are multiple plugins installed. Sort Settings Menu helps by organizing the "Settings" sub-level menu items in alphabetical order, making it easier to find the correct settings page.

To use Sort Settings Menu, there are only two things you need to do: install and activate the plugin. Sort Settings Menu automatically sorts the "Settings" menu in alphabetical order without any extra configuration. Sort Settings Menu also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/).

### Bug Reports

Do you want to report a bug or suggest a feature for Sort Settings Menu? Best to do so in the [Sort Settings Menu repository on GitHub](https://github.com/pluginpizza/sort-settings-menu/).

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

Sort Settings Menu only sorts the "Settings" section and does not have any options to sort other parts of the administration menu.

A `pluginpizza_settings_menu` [filter](https://developer.wordpress.org/plugins/hooks/filters/) is available that allows additional menus to be sorted via code. For example, if you add the following code to your theme's `functions.php` file or to a plugin, both the "Settings" and "Tools" sections will be sorted alphabetically.

`
// Organize the "Settings" and "Tools" menu in alphabetical order.
add_filter( 'pluginpizza_sort_settings_menu', function( $menus ) {
	return array( 'options-general.php', 'tools.php' );
} );
`

== Changelog ==

= 1.1.0 =
Release Date: Jul 26, 2024

- Deprecate the `functions_file_sort_settings_menu` in favor of `pluginpizza_sort_settings_menu`.

= 1.0.2 =
Release Date: Mar 17, 2023

- Version bump to fix incorrect deploy.

= 1.0.1 =
Release Date: Mar 17, 2023

- Run the sorting function later to fix some menu items not being sorted alphabetically.

= 1.0 =
Release Date: February 12, 2023

- Initial release.
