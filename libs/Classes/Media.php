<?php

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