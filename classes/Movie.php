<?php
class Movie {
    private $title;
    private $genre;
    private $year;

    public function __construct($_title,$_genre){
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getInfo(){
        return "[{$this->title},{$this->genre},{$this->year}]";
    }

    public function getTitle(){
        return "{$this->title}";
    }

    public function getGenre(){
        return "{$this->genre}";
    }

    public function getYear(){
        return "{$this->year}";
    }

    public function setYear($year){
        $this->year=$year;
    }
}

