<?php
class Movie {
    private $title;
    private $genre;
    private $anno;

    public function __construct($_title,$_genre){
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getInfo(){
        return "[{$this->title},{$this->genre},{$this->anno}]";
    }

    public function getTitle(){
        return "{$this->title}";
    }

    public function getGenre(){
        return "{$this->genre}";
    }

    public function getAnno(){
        return "{$this->anno}";
    }

    public function setAnno($_anno){
        $this->anno=$_anno;
    }
}

