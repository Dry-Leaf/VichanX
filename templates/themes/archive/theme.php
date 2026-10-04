<?php
	require 'info.php';

	function archive_build($action, $settings, $board) {
        $b = new Archive();
        $b->build($action, $settings);
	}

	class Archive {
        public function build($action, $settings) {
            global $config, $_theme;

            $dsn= 'sqlite:' . $config['dir']['home'] . 'kusaba_arc/archive.db';
            $pdo = new \PDO($dsn);
            $rows = $pdo->query('SELECT * FROM meta LIMIT 50');

            $threads = [];

            while ($row = $rows->fetch(\PDO::FETCH_ASSOC)) {
                $threads[] = [
                    'board' => $row['board'],
                    'id' => $row['id'],
                    'date' => $row['date'],
                    'subject' => $row['subject'],
                    'snippet' => $row['snippet'],
                    'replies' => $row['replies']
                ];
            }

            $element = Element('themes/archive/index.html', Array(
				'settings' => $settings,
				'config' => $config,
				'threads' => $threads
			));

			file_write($config['dir']['home'] . 'arc' . '/index.html', $element);
        }
	}
?>
