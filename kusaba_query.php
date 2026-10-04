<?php
global $config;

$dsn= 'sqlite:' . $config['dir']['home'] . 'kusaba_arc/archive.db';
$pdo = new \PDO($dsn);

$_POST['board'];
$_POST['start_date'];
$_POST['end_date'];
$_POST['text_query'];

$stmt = $pdo->prepare("SELECT board, thread_id,  strftime('%m-%d-%Y', date, 'unixepoch') as hdate, subject, snippet, first_post, replies FROM meta
    WHERE board=:board AND date BETWEEN :start_date AND :end_date");

$stmt->execute([
    ':board' => $_POST['board'],
    ':start_date' => $_POST['start_date'],
    ':end_date' => $_POST['end_date']
]);

$jsonData = [];

while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
    $jsonData[] = [
        'board' => $row['board'],
        'id' => $row['thread_id'],
        'date' => $row['hdate'],
        'subject' => $row['subject'],
        'snippet' => $row['snippet'],
        'first_post' => $row['first_post'],
        'replies' => $row['replies']
    ];
}

echo json_encode($jsonData);
?>
