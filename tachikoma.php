<?php

// $query = prepare('SELECT ``bans``.*' . ($get_mod_info ? ', `username`' : '') . ' FROM ``bans``
// 		' . ($get_mod_info ? 'LEFT JOIN ``mods`` ON ``mods``.`id` = `creator`' : '') . '
// 		WHERE
// 			(' . ($board !== false ? '(`board` IS NULL OR `board` = :board) AND' : '') . '
// 		(`ipstart` = :ip OR (:ip >= `ipstart` AND :ip <= `ipend`)) OR (``bans``.id = :id))
// 		ORDER BY `expires` IS NULL, `expires` DESC');
//
//
// $query->bindValue(':id', $banid);
// $query->bindValue(':ip', inet_pton($ip));
//
// $query->execute() or error(db_error($query));
//
// $ban_list = array();
//
// while ($ban = $query->fetch(PDO::FETCH_ASSOC)) {
// 	if ($ban['expires'] && ($ban['seen'] || !$config['require_ban_view']) && $ban['expires'] < time()) {
// 		self::delete($ban['id']);
// 	} else {
// 		if ($ban['post'])
// 			$ban['post'] = json_decode($ban['post'], true);
// 		$ban['mask'] = self::range_to_string(array($ban['ipstart'], $ban['ipend']));
// 		$ban['cmask'] = cloak_mask($ban['mask']);
// 		$ban_list[] = $ban;
// 	}
// }

$output = shell_exec('python ');
?>
