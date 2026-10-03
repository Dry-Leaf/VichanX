<?php
	require 'info.php';

	function archive_build($action, $settings, $board) {
        $b = new Archive();
        $b->build($action, $settings);
	}

	class Archive {
        public function build($action, $settings) {
            global $config, $_theme;

            $element = Element('themes/archive/index.html', Array(
				'settings' => $settings,
				'config' => $config
			));

			file_write($config['dir']['home'] . 'arc' . '/index.html', $element);
        }
	}
?>
