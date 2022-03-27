<?php

use LDAP\Result;

require __DIR__.'/../lib/functions.php';

$id = $_POST['id'] ?? '';
$selectedAnswer = $_POST['selectedAnswer'] ?? '';

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


// 答え（ABCD）
$answer=$formattedData['correctAnswer'];

// 答えの文字
$answer_value=$formattedData['answers'][$answer];

// 解説文
$answer_text=$formattedData['explanation'];


$result = $selectedAnswer === $answer;


echo $result;
var_dump($result);
echo $answer;
echo $answer_value;
echo $answer_text;
