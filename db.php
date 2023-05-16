<?php


$movies = [
    new Movie('Avatar', 'Un bella film', new Genre('Fantasy', 12), 2012, 'James Cameron', '180 min'),
    new Movie('Signore degli Anelli', 'Un bellissimo film', new Genre('Fantasy', 14), 2007, 'Quentin Tarantino', '178 min'),
    new Movie('Inception', 'Un belli film', new Genre('Fantasy', 16), 2010, 'Christopher Nolan', '140 min'),
    new Movie('Il padrino', 'Un bello film', new Genre('Crime', 18), 1972, 'Francis Ford Coppola', '177 min'),
    new Movie('Harry Potter', 'Un bellissimo film', new Genre('Fantasy', 13), 2002, 'Christopher Nolan', '135 min'),
    new Movie('Zodiac', 'Un bello film anche questo', new Genre('Azione', 15), 2020, 'Steven Spielberg', '177 min'),
    new Movie('Ready Player One', 'Fikizzimo', new Genre('Fantasy', 12), 2019, 'Steven Spielberg', '155 min'),
    new Movie('Strafumati', 'Fattissimo', new Genre('Commedia', 12), 2008, 'David Gordon Green', '420 min'),
];

//var_dump($movies);