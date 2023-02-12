<?php

class Product{
    //public visibility keywords
    public function __construct(public $name = 'Soap' , public $price = 100)
    {
      
    }

    //Methods with arguments & signatures
    public function priceAsCurrency($divisor = 10 ,$currencySymbol = '$')
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency; //Concatinating 2 variables
    } 
}

$product = new Product(price: 200); //Change specific variable
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;

