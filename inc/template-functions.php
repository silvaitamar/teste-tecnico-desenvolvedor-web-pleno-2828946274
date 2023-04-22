<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Tema_Teste_Dev
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function tema_teste_dev_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'tema_teste_dev_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function tema_teste_dev_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'tema_teste_dev_pingback_header' );

/**
 * Add a dropdown toggle icon to nav menu items that have submenus.
 *
 * @param string $item_output The HTML output for the menu item.
 * @param object $item The menu item object.
 * @param int $depth The depth of the current menu item.
 * @param array $args The menu arguments.
 * @return string The modified HTML output for the menu item.
 */
function add_dropdown_toggle_icon_to_nav_menu( $item_output, $item, $depth, $args ) {
	// Check if the nav menu item has children.
	if ( in_array( 'menu-item-has-children', $item->classes ) ) {
		// Add the `dropdown-toggle` class and `data-bs-toggle="dropdown"` attribute to the `a` element of the nav menu item.
		$item_output = preg_replace('/<a /', '<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button" ', $item_output);
	}
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_dropdown_toggle_icon_to_nav_menu', 10, 4 );

/**
 * Displays custom icon  and description on main menu items.
 *
 * @param array  $items Menu items.
 * @param object $args  Menu arguments.
 *
 * @return array Modified menu items.
 */
function custom_wp_nav_menu_objects( $items, $args ) {
	if ( $args->theme_location == 'primary' ) {
		foreach( $items as &$item ) {
			$item_title = $item->title;
			$icon_url = get_field( 'menu-item-icon', $item );
			$description = get_field( 'menu-item-description', $item );

			if( $icon_url && $description ) {
				$item_title = '<span class="menu-item-icon"><img src="' . $icon_url . '" alt="' . $item->title . '"></span> ' . $item->title . '<span class="menu-item-description">' . $description . '</span>';

			}

			if ( $item->menu_item_parent && $depth == 0 ) {
				// Add the SVG icon after the nav menu item text.
				$item_title .= '<svg class="menu-icon-outward icon-arrow-outward" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 3.5V4.5H11.295L3 12.795L3.705 13.5L12 5.205V11.5H13V3.5H5Z" fill="white"/></svg>';
			}

			$item->title = $item_title;
		}
	}
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'custom_wp_nav_menu_objects', 10, 2 );
  
  