<?php

class Product{

    //setting up properties
    public $name;
    public $price;

    public function __construct($name = 'Rental',$price = 50)
    {
        $this->name = $name;
        $this->price = $price;
    }

    //Methods with arguments & signatures
    public function priceAsCurrency($divisor = 10 ,$currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency; //Concatinating 2 variables
    } 
}

$product = new Product(price: 40); //Change specific variable
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;

