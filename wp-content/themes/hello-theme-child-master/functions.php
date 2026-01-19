<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Cache les items de menu avec la classe "logged-in-only" pour les utilisateurs non connectés.
 */
add_filter('wp_nav_menu_objects', function ($items) {

    if (is_user_logged_in()) {
        return $items;
    }

    $new_items = [];

    foreach ($items as $item) {

        // On récupère les classes (ou tableau vide)
        $classes = is_array($item->classes) ? $item->classes : [];

        // Si la classe est présente, on ignore
        if (in_array('logged-in-only', $classes)) {
            continue;
        }

        // Sinon on garde
        $new_items[] = $item;
    }

    return $new_items;
});
