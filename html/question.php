<?php
// 関数の読み込み
require __DIR__.'/../lib/functions.php';

$id = '3';

$data = fetchById($id);

$question = $data[1];


$answers=[
    "A" => $data[2],
    "B" => $data[3],
    "C" => $data[4],
    "D" => $data[5],
];

// 答え（ABCD）
$answer=strtoupper($data[6]);

// 答えの文字
$answer_value=$answers[$answer];

// 解説文
$answer_text=$data[7];

include __DIR__.'/../inc/quiz.php';
?>