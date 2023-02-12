<?php

class Product{

    //setting up properties
    public $name = 'soap';
    public $price = 1000;

    //Methods with arguments & signatures
    public function priceAsCurrency($divisor = 10 ,$currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency; //Concatinating 2 variables
    } 
}

//Creating a new instance
$product = new Product();
//Calling methods
print $product->priceAsCurrency(currencySymbol: 'R') . PHP_EOL; // Named arguments

