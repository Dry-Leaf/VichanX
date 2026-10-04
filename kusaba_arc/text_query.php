<?php
global $config;

$dsn= 'sqlite:' . $config['dir']['home'] . 'kusaba_arc/archive.db';
$pdo = new \PDO($dsn);

$_POST['text_query'];

?>
