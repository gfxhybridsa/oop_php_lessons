<?php

class Book
{
    public $title;
    public $author;
    public $price;
    public $weight;
    public $fileSize;
    public $type;

    public function __construct(string $title,string $author, int $price ,string $type, int $weight = 0 ,int $fileSize = 0 )
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->weight = $weight;
        $this->fileSize = $fileSize;
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
    
    public function getFileSize():int
    {
        return $this->fileSize;
    }

    public function print(): string
    {
        $string = "{$this->title},{$this->author}, ";

        if ($this->type === 'physical') {
            # code...
            $string = "Weight : {$this->weight}";
        }elseif ($this->type === 'digital') {
            # code...
            $string = "FileSize : {$this->fileSize}";
        }
        return $string;
    }


}

