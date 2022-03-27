<?php
// 関数の読み込み
require __DIR__.'/../lib/functions.php';

$id = '3';

$data = fetchById($id);

$formattedData = generateFormattedData($data);

$question =$formattedData['question'];


$answers=$formattedData['answers'];

// 答え（ABCD）
$answer=$formattedData['correctAnswer'];

// 答えの文字
$answer_value=$answers[$answer];

// 解説文
$answer_text=$formattedData['explanation'];

include __DIR__.'/../inc/quiz.php';
?>