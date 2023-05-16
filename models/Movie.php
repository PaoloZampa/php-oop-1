<?php

class Movie
{

    public $title;
    public $description;
    public $genre;
    public $year;
    public $director;
    public $duration;

    public function __construct(string $title, string $description, string $genre, int $year, string $director, string $duration)
    {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;
        $this->year = $year;
        $this->director = $director;
        $this->duration = $duration;

    }
    /*  public function printInfo()
     {
         echo "Titolo: " . $this->title . "<br>";
         echo "Descrizione: " . $this->description . "<br>";
         echo "Genere: " . $this->genre . "<br>";
         echo "Anno: " . $this->year . "<br>";
         echo "Regista: " . $this->director . "<br>";
         echo "Durata: " . $this->duration . "<br>";
     } */


}