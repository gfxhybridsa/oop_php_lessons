<?php

class PhysicalBook
{
    public $title;
    public $author;
    public $price;
    public $weight;
    public function __construct(string $title,string $author, int $price , int $weight = 0 )
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->weight = $weight;
    }
//GETTERS
    public function getTitle(): string
    {
         return $this->title;
    }

    public function getAuthor():string
    {
        return $this->author;
    }

    public function getPrice():string
    {
        return $this->price;
    }

    public function getWeight():int
    {
        return $this->weight;
    }
    

    public function print(): string
    {
        return "{$this->title},{$this->author},weight: {$this->weight} ";
    }

 
}

