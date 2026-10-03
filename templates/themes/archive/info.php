<?php
	$theme = Array();

	// Theme name
	$theme['name'] = 'archive';
	// Description (you can use Tinyboard markup here)
	$theme['description'] = 'tohnochans archive page';
	$theme['version'] = 'v1.0';

	// Theme configuration
	$theme['config'] = Array();

	$theme['config'][] = Array(
		'title' => 'Title',
		'name' => 'title',
		'type' => 'text',
		'default' => 'Archive'
	);

	// Unique function name for building everything
	$theme['build_function'] = 'archive_build';

	if (!function_exists('index_install')) {
		function index_install($settings) {
			if (!is_numeric($settings['limit_images']) || $settings['limit_images'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['limit_images']) . '</strong> is not a non-negative integer.');
			if (!is_numeric($settings['limit_posts']) || $settings['limit_posts'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['limit_posts']) . '</strong> is not a non-negative integer.');
			if (!is_numeric($settings['no_recent']) || $settings['no_recent'] < 0)
				return Array(false, '<strong>' . utf8tohtml($settings['no_recent']) . '</strong> is not a non-negative integer.');
		}
	}
