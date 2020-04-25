<?php


abstract class media {
protected $title;
protected $By;        
protected $datePublished;
protected $genre ;  

abstract function getTitle();
}


class DVD extends media {
    
    public function __construct($title, $By, $datePublished, $genre){
        $this->title=$title;
        $this->By = $By;
        $this->datePublished=$datePublished;
        $this->genre=$genre;
      
    }
    
    
    public function getTitle(){
       echo "This DVD is called " . $this->title;   
    }
    
}

class CD extends media {
        public function __construct($title, $By, $datePublished, $genre){
        $this->title=$title;
        $this->By = $By;
        $this->datePublished=$datePublished;
        $this->genre=$genre;
         
    }
    
    
    public function getTitle(){
       echo "This CD is called " .  $this->title;   
    }
}

class Vinyl extends media {
        public function __construct($title, $By, $datePublished, $genre){
        $this->title=$title;
        $this->By = $By;
        $this->datePublished=$datePublished;
        $this->genre=$genre;
         
    }
    
    
    public function getTitle(){
       echo "This Vinyl is called " .  $this->title;   
    }
}

class Ebook extends media {
    
    
        public function __construct($title, $By, $datePublished, $genre){
        $this->title=$title;
        $this->By = $By;
        $this->datePublished=$datePublished;
        $this->genre=$genre;
     
    }
    public function getTitle(){
       echo "This Ebook title is called " .  $this->title;   
    }
}




class Book extends media {
    
      public function __construct($title, $By, $datePublished, $genre){
        $this->title=$title;
        $this->By = $By;
        $this->datePublished=$datePublished;
        $this->genre=$genre;
       
    }
    
    
    public function getTitle(){
       echo "This Book title is " .  $this->title;   
    }  
}



$gg = new Book('harry', 'jk', '1997', 'fantasy');
$gg->getTitle();

