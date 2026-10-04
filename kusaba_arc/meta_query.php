<?php
global $config;

$dsn= 'sqlite:' . $config['dir']['home'] . 'kusaba_arc/archive.db';
$pdo = new \PDO($dsn);

$_POST['board'];
$_POST['start_date'];
$_POST['end_date'];
$_POST['text_search'];

?>
