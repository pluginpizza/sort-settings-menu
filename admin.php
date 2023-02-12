<?php
/**
 * Admin functionality
 *
 * @package SortSettingsMenu
 */

namespace SortSettingsMenu;

// Arrange the items in the "Settings" menu of the WordPress admin in alphabetical order.
add_action( 'admin_menu', __NAMESPACE__ . '\sort_admin_submenu_items' );

/**
 * Arrange the items in the "Settings" menu of the WordPress admin in alphabetical order.
 *
 * @return void
 */
function sort_admin_submenu_items() {

	global $submenu;

	if ( ! isset( $submenu ) || ! is_array( $submenu ) ) {
		return;
	}

	/**
	 * Allows filtering the admin menu items that should be sorted in alphabetical order.
	 *
	 * By default only the "Settings" menu is sorted. Return an empty array
	 * to sort all menus alphabetically.
	 *
	 * @var array $menus The menus to sort alphabetically.
	 */
	$menus = apply_filters(
		'sort_settings_menu',
		array( 'options-general.php' )
	);

	if ( ! is_array( $menus ) ) {
		return;
	}

	foreach ( array_keys( $submenu ) as $key ) {

		if ( empty( $menus ) || is_array( $menus ) && in_array( $key, $menus, true ) ) {

			usort(
				$submenu[ $key ],
				function( $item_1, $item_2 ) {
					return $item_1[0] <=> $item_2[0];
				}
			);
		}
	}
}
