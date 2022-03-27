<?php

function fetchById($id){
    // ファイルを開く
    $handler= fopen(__DIR__.'/data.csv', 'r');

    // データをを取得
    $question =[];
    while($row = fgetcsv($handler)){
        if ($row[0]===$id){
            $question =$row;
            break;
        }
    }
    

    // ファイルを閉じる
    fclose($handler);

    // データを返す
    return $question;
}







?>