<?php

function br() {
    echo PHP_EOL;
}

// This one could also be an interface, like a SearchBookBy.... sort of interface
// where we could search it through diff properties. Learning how to clump
// objects could be super good. 
// we should have a form for this maybe and play ina  POST for each of these??? 

trait Bookdetails {

    function __construct($title, $By, $datePublished, $readTime, $genre) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->readTime = $readTime;
        $this->genre = $genre;
    }

}

trait Trackdetails {

    function __construct($title, $By, $datePublished, $genre, $length, $rating) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->genre = $genre;
        $this->length = $length;
        $this->rating = $rating;
    }

}

interface Loanable{
    public function LendCost();
    
}


abstract class Media {

    protected $title;
    protected $By;
    protected $datePublished;
    protected $genre;

    
    abstract function SetDetails();
  
    abstract function getTitle();
    function getMediaByProducer($name){
       echo "Function is overridden, if you're seeing this there's a mistake";
   }
}

class DVD extends Media implements Loanable {

    Protected $length;
    Protected $rating;

    use Trackdetails;

    public function getTitle() {
        echo "This DVD is called " . $this->title;  
    }

   public function LendCost() {
       echo "A DVD costs £3 to rent"
       ;
   }

    public function SetDetails() {
        
    }

  

}

class CD extends Media implements Loanable{

    Protected $length;
    Protected $rating;

    use Trackdetails;

    public function getTitle() {
        echo "This CD is called " . $this->title;
    }
    
     public function getMediaByProducer($name){
        if ($name == $this->By) {
            echo $this->title;
        
    }
}   

   public function LendCost() {
       echo "A CD costs £1.00 to rent"
       ;
   }

    public function SetDetails() {
        
    }

}

class Vinyl extends Media implements Loanable {

    Protected $length;
    Protected $rating;

    use Trackdetails;

    public function getTitle() {
        echo "This Vinyl is called " . $this->title;
    }
    public function getMediaByProducer($name){
        if ($name == $this->By) {
            echo "Match!! We have a vinyl called $this->title; that matches your search";
        
    }

}

    public function LendCost() {
       echo "A Vinyl costs £5 to rent"
       ;
   }

    public function SetDetails() {
        
    }

}

class Ebook extends Media {

    Protected $readTime;

    use Bookdetails;

    public function getTitle() {
        echo "This Ebook title is called " . $this->title;
    }
    public function getMediaByProducer($name){
        if ($name == $this->By) {
            echo "Success we have a Ebook called $this->title; which matches your search!!";
        
    }

}

    public function SetDetails() {
        
    }

}

class Book extends Media {

    Protected $readTime;

    use Bookdetails;

    public function getTitle() {
        echo "This Book title is " . $this->title;
    }
    public function getMediaByProducer($name){
        if ($name == $this->By) {
            echo "We found a match!! The title of the book is" . $this->title;
        
    }

}

    public function SetDetails() {
        
    }

}

$gg = new Book('Harry Potter', 'JK Rowling', '1997', '6h', 'fantasy');
$gg->getTitle();
$gg->getMediaByProducer("JK Rowling");
br();

$tt = new Ebook('James and the Giant Peach', 'Roald Dalh', '1988', '5h', 'childrens');
$tt->getTitle();
br();

$TEST3 = new CD('Best of David Bowie', 'daid bowie', '1960', 'pop', '3.00', 'PG');
$TEST3->getTitle();
br();
