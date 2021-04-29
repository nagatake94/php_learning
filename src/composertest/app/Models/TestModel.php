<?php

namespace App\Models;

//1ファイル1クラス
class TestModel{
    private $text = 'hello world!';

    public function getHello(){
        return $this -> text; 
    }
}



?>