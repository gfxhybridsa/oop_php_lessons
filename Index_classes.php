<?php


    class Product
    {
        //Properties
        public  $name = 'soap';
        public $value = 1998;
    }

     //objects
    $soapObject = new Product();
    $valueObject = new Product();
   
    //Prints
    print $soapObject->name . "\n";
    print $valueObject->value . "\n";

    //Prints
    $soapObject->name = 'toothpaste';
    print $soapObject->name . "\n";
    $valueObject->value = 1999;
    print $valueObject->value . "\n"

?>