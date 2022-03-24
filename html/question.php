<?php
$id = 1;
$question = 'Laorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam tenetur';

// <li data-answer="A">選択肢１</li>
// <li data-answer="B">選択肢２</li>
// <li data-answer="C">選択肢３</li>
// <li data-answer="D">選択肢４</li>
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