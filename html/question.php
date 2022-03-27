<?php
// 関数の読み込み
require __DIR__.'/../lib/functions.php';

$id =escape($_GET['id'] ?? '');

$data = fetchById($id);

if(!$data){
        // HTTPレスポンスのヘッダを404にする
        header('HTTP/1.1 404 Not Found');

        // レスポンスの種類を指定する
        // header('Content-Type: application/json; charset=UTF-8');
    
    include __DIR__.'/../inc/404.tpl.php';
    exit(0);
}

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