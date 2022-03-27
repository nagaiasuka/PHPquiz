<?php
// 関数の読み込み
require __DIR__.'/../lib/functions.php';

$id = '3';

$data = fetchById($id);
var_dump($data);

$question = 'Laorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam tenetur';


$answers=[
    "A" => "選択肢１",
    "B" => "選択肢2",
    "C" => "選択肢3",
    "D" => "選択肢4",
];

// 答え（ABCD）
$answer="A";

// 答えの文字
$answer_value=$answers[$answer];

// 解説文
$answer_text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quo quasi voluptatum nam vero iure corporis unde sed facilis, voluptatibus repellat amet, ipsam minus veniam eum fuga assumenda commodi quidem.";

include __DIR__.'/../inc/quiz.php';
?>