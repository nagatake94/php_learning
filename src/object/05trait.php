<?php

trait ProductTrait{
    public function getProduct(){
        echo 'プロダクト';
    }
}

trait NewsTrait{
    public function getProduct(){
        echo 'ニュース';
    }
}

class Product{
    use ProductTrait;
    //use NewsTrait;

    public function getInformation(){
        echo 'クラスです';
    }
}

$product = new Product();

$product->getInformation();
echo '<br>';
$product->getProduct();
echo '<br>';
//$product->getNews();

