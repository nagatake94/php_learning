<?php

//日本語SJIS、UTF-8 3~6バイト
$text = 'あいうえお';

echo strlen($text)."<br>";
echo mb_strlen($text)."<br>";

//文字列の置換

$str = '文字列を置換します';

echo str_replace('置換','ちかん',$str);
