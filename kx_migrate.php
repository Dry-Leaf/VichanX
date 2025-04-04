<?php
	/*
	 * WARNING: This code is not that well tested, but should mostly work.
	 * - This code should work to migrate your KusabaX to vichan-5.1.5
	 * - Tested with PHP 8.3
	 *
	 * Thanks for ANGEL_ from Gurochan for help in testing this code.
	 *
	 * Original code by savetheinternet, fixed by czaks.
	 *
	 * Then fixed by Dry-Leaf.
	 *
	 * Doing backups beforehand is STRONGLY ADVISED.
	 */

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        ini_set('display_errors', 1);

        echo "startin'\n";

	set_time_limit(0);
	$kusabaxc = array();

        $descriptorspec = [
            0 => ['pipe', 'r'], // stdin
            1 => ['pipe', 'w'], // stdout
        ];

	/* Config */
	
	// Path to KusabaX's installation directory. Set based on values in (config.php)
	define('KU_ROOTDIR', '../Tohno-chan.com/');
	define('KU_BOARDSDIR', KU_ROOTDIR);
	$kusabaxc['config'] = KU_ROOTDIR . 'config.php';
	
	/* End config */

        require 'inc/bootstrap.php';
	echo "imported php files\n";
	
	if(!isset($kusabaxc['config']) || empty($kusabaxc['config']))
		error('Did you forget to configure the script?');
	
	if(!file_exists($kusabaxc['config']) || !is_readable($kusabaxc['config']))
		error('Kusaba X config file doesn\'t exist or I can\'t read it.');

	$process = proc_open('python3 helper.py', $descriptorspec, $pipes);
	if (is_resource($process)) {
            fwrite($pipes[0], $kusabaxc['config']);
            fclose($pipes[0]);

	    $output = stream_get_contents($pipes[1]);
	    $data = json_decode($output, true);
	     
	    fclose($pipes[1]);
	    proc_close($process);

	    $KU_DBTYPE = $data['type'];

            if ($KU_DBTYPE != 'mysql' && $KU_DBTYPE != 'mysqli') {
                error('Database type <strong>' . $KU_DBTYPE . '</strong> not supported!');
            }
            
	    $kusabaxc['db']['type']	= 'mysql';
	    
	    $kusabaxc['db']['server']	= $data['host'];
	    $kusabaxc['db']['user']	= $data['username'];
	    $kusabaxc['db']['password']	= $data['password'];
	    $kusabaxc['db']['database']	= $data['database'];
	    $kusabaxc['db']['prefix']	= $data['prefix'];

	    define('KU_RANDOMSEED', $data['randomseed']);

	    $kusabaxc['db']['dsn']	= '';
	    $kusabaxc['db']['timeout']	= 5;
	    $kusabaxc['db']['persistent'] = false;
	};

	define('KU_DBPREFIX', $kusabaxc['db']['prefix']);

	echo "Done reading Kusaba-X config with python\n";

	// KusabaX functions
	function md5_decrypt($enc_text, $password, $iv_len = 16) {
		$enc_text = base64_decode($enc_text);
		$n = strlen($enc_text);
		$i = $iv_len;
		$plain_text = '';
		$iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
		while ($i < $n) {
			$block = substr($enc_text, $i, 16);
			$plain_text .= $block ^ pack('H*', md5($iv));
			$iv = substr($block . $iv, 0, 512) ^ $password;
			$i += 16;
		}
		return preg_replace('/\\x13\\x00*$/', '', $plain_text);
	}
	
	// KusabaX -> Tinyboard HTML
	function convert_markup($body) {
		global $config;
		$body = stripslashes($body);
		
		// >quotes
		$body = str_replace('"unkfunc"', '"quote"', $body);
		
		// >>cites
		$body = preg_replace('/<a href="[^"]+?\/(\w+)\/res\/(\d+).html#(\d+)" onclick="return highlight\(\'\d+\', true\);" class="[^"]+">/', '<a onclick="highlightReply(\'$3\');" href="' . $config['root'] . '$1/res/$2.html#$3">', $body);
		
		// Public bans
		$body = preg_replace('/<br \/><font color="#FF0000"><b>\((.+?)\)<\/b><\/font>/', '<span class="public_ban">($1)</span>', $body);
		
		return $body;
	}
	
	$step = isset($_GET['step']) ? round($_GET['step']) : 0;
	$page = array(
		'config' => $config,
		'title' => 'KusabaX Database Migration',
		'body' => ''
	);
	
	$log = array();
	
	// Trick Tinyboard into opening the KusabaX database instead
	$__temp = $config['db'];
	$config['db'] = $kusabaxc['db'];
	
	sql_open();
	
	// Get databse link
	$kusabax = $pdo;
	// Clear
	unset($pdo);
	
	// Open Tinyboard database
	$config['db'] = $__temp;
	unset($__temp);
	
	$k_query = $kusabax->query('SELECT * FROM `' . KU_DBPREFIX . 'boards`');
	$boards = listBoards();
	
	// Copy boards table, briefly
	$kusabax_boards = array();

        echo "Creating tables in vichan's db.\n";
	
	while($board = $k_query->fetch()) {
                //echo $board['name'] . ' - ' . $board['id'];
    	
		// For later use...
		$kusabax_boards[(int)$board['id']] = $board['name'];
				
		$log[] = 'Creating board: <strong>/' . $board['name'] . '/</strong>';

		//echo '\n2';
		
		// Go ahead and create this new board...
		$query = prepare('REPLACE INTO ``boards`` VALUES (:uri, :title, :subtitle)');
		$query->bindValue(':uri', $board['name']);
		$query->bindValue(':title', $board['desc']);
		$query->bindValue(':subtitle', null, PDO::PARAM_NULL);
		$query->execute() or error(db_error($query));

		//echo '3\n';
		
		// Posting table
		query(Element('posts.sql', array('board' => $board['name']))) or error(db_error());
		
		// Set up board (create directories, etc.) by opening it
		openBoard($board['name']);
	}
	
	$k_query = $kusabax->query('SELECT `' . KU_DBPREFIX . 'posts`.*, `' . KU_DBPREFIX . 'staff`.`type` FROM `' . KU_DBPREFIX . 'posts` LEFT JOIN `' . KU_DBPREFIX . 'staff` ON `posterauthority` = `' . KU_DBPREFIX . 'staff`.`id` WHERE `IS_DELETED` = 0') or error(db_error($kusabax));
	while($post = $k_query->fetch(PDO::FETCH_ASSOC)) {
		if(!isset($kusabax_boards[(int)$post['boardid']])) {
			// Board doesn't exist...
			continue;
		}
		$board = $kusabax_boards[(int)$post['boardid']];
		
		$log[] = 'Replicating post <strong>' . $post['id'] . '</strong> on /' . $board . '/';
		
		$query = prepare(sprintf("REPLACE INTO ``posts_%s`` VALUES
			(
				:id, :thread, :subject, :email, :name, :trip, :capcode, :body, NULL, :time, :bump, :files, :num_files, NULL, :password, :ip, :sticky, :locked, 0, 0, :embed, NULL
			)", $board));
		
		// Post ID
		$query->bindValue(':id', $post['id'], PDO::PARAM_INT);
		
		// Thread (`parentid`)
		if($post['parentid'] == 0)
			$query->bindValue(':thread', null, PDO::PARAM_NULL);
		else
			$query->bindValue(':thread', (int)$post['parentid'], PDO::PARAM_INT);
		
		// Name
		if(empty($post['name']))
			$post['name'] = $config['anonymous'];
		$query->bindValue(':name', trim($post['name']), PDO::PARAM_STR);
		
		// Trip
		if(empty($post['tripcode']))
			$query->bindValue(':trip', null, PDO::PARAM_NULL);
		else
			$query->bindValue(':trip', $post['tripcode'], PDO::PARAM_STR);
		
		// Email
		$query->bindValue(':email', trim($post['email']), PDO::PARAM_STR);
		
		// Subject
		$query->bindValue(':subject', trim($post['subject']), PDO::PARAM_STR);
		
		// Body (`message`)
		$query->bindValue(':body', convert_markup($post['message']), PDO::PARAM_STR);
		
		$embed_code = false;
		
		// File
		if(empty($post['file']) || $post['file'] == 'removed' || ($post['file_size'] == 0 && empty($post['file_md5']))) {
			$query->bindValue(':num_files', 0, PDO::PARAM_INT);
    		
			$query->bindValue(':files', null, PDO::PARAM_NULL);
			//$query->bindValue(':filehash', null, PDO::PARAM_NULL);

		        if($post['file_size'] == 0 && empty($post['file_md5']) && $post['file_type'] == 'you') {	
				// youtube				
				$embed_code = 'http://youtube.com/watch?v=' . $post['file'];
				$query->bindValue(':embed', $embed_code, PDO::PARAM_STR);
		        }
		} else {
			$query->bindValue(':num_files', 1, PDO::PARAM_INT);

			$data = [
    			    "file" => $post['file'] . '.' . $post['file_type'],
    			    "thumb" => $post['file'] . '.' . $post['file_type'],
    			    "filename" => $post['file_original'] . $post['file_type'],
    			    "size" => $post['file_size'],
    			    "width" => $post['image_w'],
    			    "height"=> $post['image_h'],
    			    "thumbwidth" => $post['thumb_w'],
    			    "thumbheight" => $post['thumb_h']
    			];
			
			$query->bindValue(':files', '[' . json_encode($data) . ']', PDO::PARAM_STR);
			
			//$query->bindValue(':filehash', $post['file_md5'], PDO::PARAM_NULL);
			
			// Copy file
			$file_path = KU_BOARDSDIR . $board . '/src/' . $post['file'] . '.' . $post['file_type'];
			$thumb_path = KU_BOARDSDIR . $board . '/thumb/' . $post['file'] . 's.' . $post['file_type'];
			
			$to_file_path = sprintf($config['board_path'], $board) . $config['dir']['img'] . $post['file'] . '.' . $post['file_type'];
			$to_thumb_path = sprintf($config['board_path'], $board) . $config['dir']['thumb'] . $post['file'] . '.' . $post['file_type'];
			
			if(!file_exists($to_file_path)) {
				$log[] = 'Copying file: <strong>' . $file_path . '</strong>';
				if(!@copy($file_path, $to_file_path)) {
					$err = error_get_last();
					$log[] = 'Could not copy <strong>' . $file_path . '</strong>: ' . $err['message'];
				}
			}
			
			if(!file_exists($to_thumb_path)) {
				$log[] = 'Copying file: <strong>' . $thumb_path . '</strong>';
				if(!@copy($thumb_path, $to_thumb_path)) {
					$err = error_get_last();
					$log[] = 'Could not copy <strong>' . $thumb_path. '</strong>: ' . $err['message'];
				}
			}
		}
		
		if(!$embed_code)
			$query->bindValue(':embed', null, PDO::PARAM_NULL);
		
		// IP
		$ip = md5_decrypt($post['ip'], KU_RANDOMSEED);
		if(!preg_match('/^\d+\.\d+\.\d+\.\d+$/', $ip)) {
			// Invalid IP address. Wrong KU_RANDOMSEED?
			
			$log[] = 'Invalid IP address returned after decryption. Wrong KU_RANDOMSEED?';
			$ip = '0.0.0.0'; // just set it to something valid and continue
		}
		$query->bindValue(':ip', $ip, PDO::PARAM_STR);
		
		// Time (`timestamp`)
		$query->bindValue(':time', $post['timestamp'], PDO::PARAM_INT);
		
		// Bump (`bumped`)
		$query->bindValue(':bump', $post['bumped'], PDO::PARAM_INT);
		
		// Locked
		$query->bindValue(':locked', $post['locked'], PDO::PARAM_INT);
		
		// Sticky
		$query->bindValue(':sticky', $post['stickied'], PDO::PARAM_INT);
		
		// Impossible
		$query->bindValue(':password', null, PDO::PARAM_NULL);
		
		if($post['posterauthority']) {
			$query->bindValue(':capcode', $post['type'] == 1 ? 'Admin' : 'Mod', PDO::PARAM_STR);
		} else {
			$query->bindValue(':capcode', null, PDO::PARAM_NULL);
		}
		
		// Insert post
		$query->execute() or $log[] = 'Error: ' . db_error($query);
	}
	
	// News
	$k_query = $kusabax->query('SELECT * FROM `' . KU_DBPREFIX . 'front` WHERE `page` = 0');
	while($news = $k_query->fetch()) {
		// Check if already exists
		$query = prepare("SELECT 1 FROM ``news`` WHERE `body` = :body AND `time` = :time");
		$query->bindValue(':time', $news['timestamp'], PDO::PARAM_INT);
		$query->bindValue(':body', $news['message'], PDO::PARAM_STR);
		$query->execute() or error(db_error($query));
		if($query->fetch())
			continue;		
		
		$query = prepare("INSERT INTO ``news`` VALUES (NULL, :name, :time, :subject, :body)");
		$query->bindValue(':name', $news['poster'], PDO::PARAM_STR);
		$query->bindValue(':time', $news['timestamp'], PDO::PARAM_INT);
		$query->bindValue(':subject', $news['subject'], PDO::PARAM_STR);
		$query->bindValue(':body', $news['message'], PDO::PARAM_STR);
		$query->execute() or $log[] = 'Error: ' . db_error($query);
	}
	
	$page['body'] = '<div class="ban"><h2>Migrating&hellip;</h2><p>';
	foreach($log as &$l) {
		$page['body'] .= $l . '<br/>';
	}
	$page['body'] .= '<hr><strong>Migration is successful. Inspect the error messages and '.
			 'if you think something has gone wrong - reinstall Tinyboard and run '.
			 'it again.</strong>';
	$page['body'] .= '</p></div>';
	
	echo Element('page.html', $page);


