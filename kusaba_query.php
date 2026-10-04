<?php
global $config;

$dsn= 'sqlite:' . $config['dir']['home'] . 'kusaba_arc/archive.db';
$pdo = new \PDO($dsn);

$board = $_POST['board'];
$start_date = strtotime($_POST['start_date']);
$end_date =  strtotime($_POST['end_date']);
$text_query = $_POST['text_query'];

if(!$start_date) {
    $start_date = 0;
}

if(!$end_date) {
    $end_date = time();
}

try {

    $brd_clause = (empty($board)) ? "" : "board=:board AND ";

    if (empty($text_query)) {
        $sql_str = "SELECT board, thread_id,  strftime('%m-%d-%Y', date, 'unixepoch') as hdate, subject, snippet, first_post, replies FROM meta
            WHERE " . $brd_clause . "date BETWEEN :start_date AND :end_date
            ORDER BY date DESC";
    } else {
        $sql_str = "SELECT board, thread_id,  strftime('%m-%d-%Y', date, 'unixepoch') as hdate, subject, snippet, first_post, replies FROM meta
            JOIN threads ON meta.id = threads.rowid
            WHERE threads MATCH :text_query AND " . $brd_clause . "date BETWEEN :start_date AND :end_date
            ORDER BY rank";
    }

    $stmt = $pdo->prepare($sql_str);

    $stmt->bindValue(':start_date',$start_date);
    $stmt->bindValue(':end_date',$end_date);

    if (!empty($board)) {
        $stmt->bindValue(':board',$board);
    }
    if (!empty($text_query)) {
        $stmt->bindValue(':text_query',$text_query);
    }

    $stmt->execute();

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
