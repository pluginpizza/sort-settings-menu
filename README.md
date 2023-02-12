## Sort Settings Menu WordPress Plugin

Arrange the items in the "Settings" menu of the WordPress admin in alphabetical order.

The "Settings" menu in the WordPress admin menu can become confusing when there are multiple plugins installed. Sort Settings Menu helps by organizing the "Settings" menu in alphabetical order, making it easier to find the correct settings page.

To use Sort Settings Menu, there are only two things you need to do: install and activate the plugin. Sort Settings Menu automatically sorts the "Settings" menu in alphabetical order without any extra configuration. Sort Settings Menu also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/).

### Can Sort Settings Menu alphabetically sort other admin menus?

Sort Settings Menu only sorts the "Settings" menu and does not have any options to sort other parts of the admin menu.

A `sorted_settings_menu` [filter](https://developer.wordpress.org/plugins/hooks/filters/) is available that allows additional menus to be sorted via code. For example, if you add the following code to your theme's `functions.php` file or to a plugin, both the "Settings" and "Tools" sections will be sorted alphabetically.

```
// Organize the "Settings" and "Tools" menu in alphabetical order.
add_filter( 'sort_settings_menu', function( $menus ) {
	return array( 'options-general.php', 'tools.php' );
} );
```
