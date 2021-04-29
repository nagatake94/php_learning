<?php

//declare(strict_types=1); //強い型指定


ini_set('display_errors',1);
error_reporting(E_ALL);

echo 'タイプヒンティングテスト'. '<br>';

/**
 * @param $string
 */

 function noTypeHint($string){
     var_dump($string);
 }

 noTypeHint(['テスト']); //引数string予定に　配列→　エラーは出ない

 //タイプヒンティング（引数に型を指定。型が違うとエラー）
 function typeTestHinting(string $string){
     var_dump($string);
 }

 typeTestHinting("テスト");

?>