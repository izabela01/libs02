<?php

namespace Trackdetails;

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