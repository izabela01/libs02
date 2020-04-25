<?php

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

}