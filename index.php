<?php

/* Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione). */

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
    public function printInfo()
    {
        echo "Titolo: " . $this->title . "<br>";
        echo "Descrizione: " . $this->description . "<br>";
        echo "Genere: " . $this->genre . "<br>";
        echo "Anno: " . $this->year . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Durata: " . $this->duration . "<br>";
    }


}

$movie_1 = new Movie('Avatar', 'Un bel film', 'Azione', '2012', 'James Cameron', '180 min');
$movie_2 = new Movie('Signore degli Anelli', 'Un bellissimo film', 'Fantasy', '2007', 'Quentin Tarantino', '178 min');