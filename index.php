<?php

require "Personne.php";
require "Films.php";
require "Genres.php";
require "Acteurs.php";
require "Realisateurs.php";
require "Role.php";
Require "Casting.php";


$acteur1 = new Acteur("Ford", "Harrison", "Homme", "13-07-1942"); 


$genre1 = new Genre("Science-fiction");


$rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944");

$film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea1, $genre1); 


$role1 = new Role("Batman");


