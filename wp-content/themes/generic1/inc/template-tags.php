<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package taher
 */

use PHPCompatibility\Sniffs\ParameterValues\RemovedImplodeFlexibleParamOrderSniff;

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

if ( ! function_exists( 'sh_get_menu_items' ) ) {
	function sh_main_menu($current_page_slag) {
		$items_html = sh_get_main_menu_items($current_page_slag);

		return sprintf('
			<nav id="main-nav" class="main-nav">
				<ul class="menu">' 
				. $items_html
				.'</ul>
			</nav>
		');
	}

	function sh_sitemap_menu() {
		$items_html = sh_get_sitemap_menu_items();

		return sprintf('
			<ul class="links col2">'
				.$items_html
			.'</ul>');
	}

	function sh_get_main_menu_items($current_page_slag) {
		$result = '';
		$menu_type = 'primary';
		$locations = get_nav_menu_locations();
		if ($locations && isset($locations[$menu_type])) {
			$menu = wp_get_nav_menu_object($locations[$menu_type]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			foreach ((array) $menu_items as $key => $menu_item) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$result .= '<li class="menu-item' .($current_page_slag == $title ? ' current-menu-item' : '')  
				.'"><a href="' .$url .'">' .$title .'</a></li>';
			}
		}
		return $result;
	}

	function sh_get_sitemap_menu_items() {
		$result = '';
		$menu_type = 'site-map';
		$locations = get_nav_menu_locations();
		if ($locations && isset($locations[$menu_type])) {
			$menu = wp_get_nav_menu_object($locations[$menu_type]);
			$menu_items = wp_get_nav_menu_items($menu->term_id);
			foreach ((array) $menu_items as $key => $menu_item) {
				$title = $menu_item->title;
				$url = $menu_item->url;
				$result .= '<li><a href="' .$url .'">' .$title .'</a></li>';
			}
		}

		return $result;
	}
}