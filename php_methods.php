<?php

class Product{
    public $name = 'soap';
    public $price;

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;
        return $priceAsCurrency;
    }
}

$soapObject = new Product();
$soapObject->price = 550;

$soapObject1 = new Product();
$soapObject1->price = 650;

$priceAsCurrency = $soapObject1->priceAsCurrency();
//$priceAsCurrency = $soapObject1->priceAsCurrency();
var_dump($priceAsCurrency);

