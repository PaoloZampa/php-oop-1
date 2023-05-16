<?php

/* Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice:
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
Bonus 2 (opzionale)
Modificare la classe Movie in modo che accetti piú di un genere.
Confermate lettura come al solito e buon divertimento :baby-yoda: */

/* class Movie
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
 */
/* $movies = [
    new Movie('Avatar', 'Un bella film', 'Azione', 2012, 'James Cameron', '180 min'),
    new Movie('Signore degli Anelli', 'Un bellissimo film', 'Fantasy', 2007, 'Quentin Tarantino', '178 min'),
    new Movie('Inception', 'Un belli film', 'Azione', 2010, 'Christopher Nolan', '140 min'),
    new Movie('Il padrino', 'Un bello film', 'Crime', 1972, 'Francis Ford Coppola', '177 min'),
]; */

//$movie_1 = new Movie('Avatar', 'Un bel film', 'Azione', '2012', 'James Cameron', '180 min');
//$movie_2 = new Movie('Signore degli Anelli', 'Un bellissimo film', 'Fantasy', '2007', 'Quentin Tarantino', '178 min');

//var_dump($movie_1, $movie_2);

/* $movie_1->printInfo();
echo "<br>";
$movie_2->printInfo(); */

include __DIR__ . '/models/Movie.php';
include __DIR__ . '/db.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Movies list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <main>


        <div class="container">

            <h1 class="text-center pt-5">MOVIES LIST</h1>

            <div class="row py-4">

                <?php foreach ($movies as $movie): ?>
                    <div class="col-6 p-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="text-center">
                                    <?php echo ($movie->title) ?>
                                </h3>
                            </div>
                            <div class="card-body">
                                <span>
                                    <strong>Descrizione :</strong>
                                    <?php echo ($movie->description) ?>
                                </span> <br>
                                <span>
                                    <strong>Regista :</strong>
                                    <?php echo ($movie->director) ?>
                                </span> <br>
                                <span>
                                    <strong>Genere :</strong>
                                    <?php echo ($movie->genre->name) ?>
                                    <strong>Età minima:</strong>
                                    <?php echo ($movie->genre->min_age) ?>
                                </span> <br>
                                <span>
                                    <strong>Durata :</strong>
                                    <?php echo ($movie->duration) ?>
                                </span> <br>
                                <span>
                                    <strong>Anno di produzione :</strong>
                                    <?php echo ($movie->year) ?>
                                </span> <br>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>


    </main>






    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>