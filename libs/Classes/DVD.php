<?php

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