<?php

add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_footer', 'load_javascript');

/**
 * Load CSS Files
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
 * Load Javascript files
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