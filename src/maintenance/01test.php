<?php

$contactFile = '.contact.dat';
//ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);

//echo $fileContents;

//ファイルに書き込み(上書き)
//file_put_contents($contactFile, 'えええ');

//$addText = 'テストです' . "\n";

//ファイルに書き込み(追加)
//file_put_contents($contactFile, $addText, FILE_APPEND);

//配列 file ,区切る explode, foreach
 $allData = file($contactFile);

 foreach($allData as $lineData){
     $line = explode(',', $lineData);
     echo $line[0]. '<br>';
     echo $line[1]. '<br>';
     echo $line[2]. '<br>';
 }