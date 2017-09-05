<?php

/**
 * Füge die verschiedenen Funktionen bei den richtigen Events im Wordpress Flow ein
 * https://developer.wordpress.org/reference/functions/add_action/
 *
 * Liste der möglichen Tags, zu denen Actions hinzugefügt werden könne:
 * https://codex.wordpress.org/Plugin_API/Action_Reference
 */

// Lade die CSS Dateien
add_action('wp_enqueue_scripts', 'load_css');

// Lade die Javascript Dateien
add_action('wp_footer', 'load_javascript');

// Registriere / Aktiviere individuelle Menüs im Wordpress Template
add_action( 'after_setup_theme', 'register_menu' );

// Aktiviere die Beitragsbilder für dieses Wordpress Template
add_theme_support('post-thumbnails');

// Aktiviere neue Bildgrößen in der Wordpress Mediathek
add_image_size('slider', 1170, 450, true);



/**
 * Funktion um die CSS Styles in das Template zu laden
 * Die Dateien werden in der "header.php" in der Funktion "wp_head" geladen
 * Dokumentation: https://codex.wordpress.org/Function_Reference/wp_register_style
 */

function load_css() {

	// Prüfen ob man gerade im Backend eingeloggt ist
	if (!is_admin()) {

		// Liste mit den einzubindenden Dateien
		$files = array(
			array(
				'handle' => 'font',
				'src' => '//fonts.googleapis.com/css?family=Abel|Roboto+Slab',
				'deps' => array(),
			),
			array(
				'handle' => 'styles',
				'src' => get_template_directory_uri() . '/dist/css/app.css',
				'deps' => array('font'),
			)
		);

		// Registriere und binde jede Datei aus der List ein
		foreach ($files as $file) {
			wp_register_style($file['handle'], $file['src'], $file['deps'], '1.0');
			wp_enqueue_style($file['handle']);
		}
	}
}



/**
 * Funktion um die Javascript Dateien in das Template zu laden
 * Die Dateien werden in der "footer.php" in der Funktion "wp_footer" geladen
 * Dokumentation: https://developer.wordpress.org/reference/functions/wp_register_script/
 */

function load_javascript() {

	if (!is_admin()) {

		// entferne das Standard jQuery
		wp_deregister_script('jquery');

		// Liste mit den einzubindenden Dateien
		$files = array(
			array(
				'handle' => 'app',
				'src' => get_template_directory_uri() . '/dist/js/app.js',
				'deps' => array(),
			)
		);

		// Registriere und binde jede Datei aus der List ein
		foreach ($files as $file) {
			wp_register_script($file['handle'], $file['src'], $file['deps'], '1.0');
			wp_enqueue_script($file['handle']);
		}
	}
}


/**
 * Registriere ein Hauptmenü
 * https://codex.wordpress.org/Function_Reference/register_nav_menus
 */

function register_menu() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'voodookit' ) );
}