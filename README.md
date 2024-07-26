## Sort Settings Menu WordPress Plugin

The "Settings" section in the WordPress admininistration menu can become confusing when there are multiple plugins installed. Sort Settings Menu helps by organizing the "Settings" sub-level menu items in alphabetical order, making it easier to find the correct settings page.

To use Sort Settings Menu, there are only two things you need to do: install and activate the plugin. Sort Settings Menu automatically sorts the "Settings" menu in alphabetical order without any extra configuration. Sort Settings Menu also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/).

## Installation

Sort Settings Menu is hosted on the [WordPress plugin directory](https://wordpress.org/plugins/sort-settings-menu/) and can be installed via the WordPress dashboard.

1. Visit the Plugins page within your WordPress dashboard and select ‘Add New’
1. Search for ‘Sort Settings Menu’ and install the plugin
1. Activate Sort Settings Menu from your Plugins page

### Composer

Sort Settings Menu can be added as a dependency to your project via the [wpackagist composer repository](https://wpackagist.org/search?q=sort-settings-menu).

### Can Sort Settings Menu alphabetically sort other admin menus?

Sort Settings Menu only sorts the "Settings" section and does not have any options to sort other parts of the administration menu.

A `pluginpizza_sort_settings_menu` [filter](https://developer.wordpress.org/plugins/hooks/filters/) is available that allows additional menus to be sorted via code. For example, if you add the following code to your theme's `functions.php` file or to a plugin, both the "Settings" and "Tools" sections will be sorted alphabetically.

```
// Organize the "Settings" and "Tools" menu in alphabetical order.
add_filter( 'pluginpizza_sort_settings_menu', function( $menus ) {
	return array( 'options-general.php', 'tools.php' );
} );
```
