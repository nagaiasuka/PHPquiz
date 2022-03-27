<?php
// 関数の読み込み
require __DIR__.'/../lib/functions.php';

$id = '3';

$data = fetchById($id);

$question =htmlspecialchars($data[1]) ;


$answers=[
    "A" =>htmlspecialchars($data[2]) ,
    "B" =>htmlspecialchars($data[3]) ,
    "C" =>htmlspecialchars($data[4]) ,
    "D" =>htmlspecialchars($data[5]) ,
];

// 答え（ABCD）
$answer=strtoupper(htmlspecialchars($data[6]));

// 答えの文字
$answer_value=$answers[$answer];

// 解説文
$answer_text=nl2br(htmlspecialchars($data[7])) ;

include __DIR__.'/../inc/quiz.php';
?>