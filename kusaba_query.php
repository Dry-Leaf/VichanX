<?php
global $config;

$dsn= 'sqlite:' . $config['dir']['home'] . 'kusaba_arc/archive.db';
$pdo = new \PDO($dsn);

$board = $_GET['board'];
$start_date = strtotime($_GET['start_date']);
$end_date =  strtotime($_GET['end_date']);
$text_query = $_GET['text_query'];

if(!$start_date) {
    $start_date = 0;
}

if(!$end_date) {
    $end_date = time();
}

try {

    $stmt = $pdo->prepare("SELECT board, thread_id,  strftime('%m-%d-%Y', date, 'unixepoch') as hdate, subject, snippet, first_post, replies FROM meta
        WHERE " . (empty($board)) ? "" : "board=:board AND " . "date BETWEEN :start_date AND :end_date
        ORDER BY date DESC");

    if (empty($board)) {
        $stmt->execute([
            ':start_date' => $start_date,
            ':end_date' => $end_date
        ]);
    } else {
        $stmt->execute([
            ':board' => $board,
            ':start_date' => $start_date,
            ':end_date' => $end_date
        ]);
    }

    $jsonData = array(
        'board' => $board,
        'start_date' => $start_date,
        'end_date' => $end_date
    );

    $rows = [];

    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $rows[] = [
            'board' => $row['board'],
            'id' => $row['thread_id'],
            'date' => $row['hdate'],
            'subject' => $row['subject'],
            'snippet' => $row['snippet'],
            'first_post' => $row['first_post'],
            'replies' => $row['replies']
        ];
    }

    $jsonData['results'] = $rows;

    header('Content-Type: application/json');
    echo json_encode($jsonData);
}

catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
