<?php

// Aktiviere die Beitragsbilder für dieses Wordpress Template
add_theme_support('post-thumbnails');

// Aktiviere neue Bildgrößen in der Wordpress Mediathek
add_image_size('slider', 1170, 450, true);

// Lade die CSS Dateien
add_action('wp_enqueue_scripts', 'load_css');

// Lade die Javascript Dateien
add_action('wp_footer', 'load_javascript');

// Registriere / Aktiviere individuelle Menüs im Wordpress Template
add_action( 'after_setup_theme', 'register_menu' );


/**
 * Funktion um die CSS Styles in das Template zu laden
 * Die Dateien werden in der "header.php" in der Funktion "wp_head" geladen
 */

function load_css() {

	if (!is_admin()) {
		$files = array(
			array(
				'handle' => 'styles',
				'src' => get_template_directory_uri() . '/dist/css/app.css',
				'deps' => array(),
			)
		);

		foreach ($files as $file) {
			wp_register_style($file['handle'], $file['src'], $file['deps'], '1.0');
			wp_enqueue_style($file['handle']);
		}
	}
}


/**
 * Funktion um die Javascript Dateien in das Template zu laden
 * Die Dateien werden in der "footer.php" in der Funktion "wp_footer" geladen
 */

function load_javascript() {

	if (!is_admin()) {
		wp_deregister_script('jquery');
		$files = array(
			array(
				'handle' => 'app',
				'src' => get_template_directory_uri() . '/dist/js/app.js',
				'deps' => array(),
			)
		);

		foreach ($files as $file) {
			wp_register_script($file['handle'], $file['src'], $file['deps'], '1.0');
			wp_enqueue_script($file['handle']);
		}
	}
}

function register_menu() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'voodookit' ) );
}