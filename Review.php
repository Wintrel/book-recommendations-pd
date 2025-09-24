<?php
class Review {
    private $full_name;
    private $book_title;
    private $review_text;
    private $rating;

    function __constructor($full_name, $book_title, $review_text, $rating){
        $this->name = $full_name;
        $this->Book_Title = $book_title;
        $this->review_text = $review_text;
        $this->rating = $rating;
    }

}