<?php

class Product{
    //アクセス修飾子

    //変数
    private $product = [];

    //関数
    function __construct($product)
    {
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addproduct($item){
        $this->product .= $item;
    }

    public static function getStaticproduct($str){
        echo $str;
    }
}

$testInstance = new Product('テスト');
var_dump($testInstance);

$testInstance->getProduct();
echo '<br>';

$testInstance->addproduct('追加分');
echo '<br>';

$testInstance->getProduct();
echo '<br>';

Product::getStaticproduct('静的');
echo '<br>';
