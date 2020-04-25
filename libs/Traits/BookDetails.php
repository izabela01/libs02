<?php

namespace BookDetails;

trait Bookdetails {

    function __construct($title, $By, $datePublished, $readTime, $genre) {
        $this->title = $title;
        $this->By = $By;
        $this->datePublished = $datePublished;
        $this->readTime = $readTime;
        $this->genre = $genre;
    }

}