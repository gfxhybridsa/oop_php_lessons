<?php

class Product{

    //setting up properties
    public $name = 'soap';
    public $price = 1000;

    //Methods with arguments & signatures
    public function priceAsCurrency($currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / 100;
        return $currencySymbol . $priceAsCurrency; //Concatinating 2 variables
    } 
}

//Creating a new instance
$product = new Product();
//Calling methods
print $product->priceAsCurrency() . PHP_EOL;



