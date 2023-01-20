<body style="background-color: #989ea9;">
<?php


require "Personne.php";
require "Films.php";
require "Genres.php";
require "Acteurs.php";
require "Realisateurs.php";
require "Role.php";
Require "Casting.php";

$genre1 = new Genre("Science-fiction");
$genre2 = new Genre("Action");
$genre3 = new Genre("Thriller");
$genre4 = new Genre("Comédie");


$acteur1 = new Acteur("Ford", "Harrison", "Homme", "13-07-1942"); 
$acteur2 = new Acteur("Bale", "Christian", "Homme", "30-01-1974");
$acteur3 = new Acteur("Theron", "Charlize", "Femme", "07-08-1975");
$acteur4 = new Acteur("Chan", "Jackie", "Homme", "07-04-1954");
$acteur5 = new Acteur("Kilmer", "Val", "Homme", "31-12-1959");
$acteur6 = new Acteur("Clooney", "George", "Homme", "06-05-1961");
$acteur7 = new Acteur("Hamill", "Luke", "Homme", "25-09-1951");


$rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944");
$rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966");
$rea3 = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971");
$rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971");


$film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea1, $genre1); 
$film2 = new Film("Batman Begins", "16-06-2005", 140, $rea2, $genre2);
$film3 = new Film("Monster", "14-04-2004", 111, $rea3, $genre3);
$film4 = new Film("Le Smoking", "25-12-2002", 100, $rea4, $genre4);
$film5 = new Film("Star Wars 2", "13-10-1999", 136, $rea1, $genre1);
$film6 = new Film("Batman Returns", "16-06-2005", 140, $rea2, $genre2);
$film7 = new Film("Le Smoking 2", "25-12-2002", 100, $rea4, $genre4);
$film8 = new Film("Star Wars 3", "13-10-1999", 136, $rea1, $genre1);


$role1 = new Role("Batman");
$role2 = new role("Han solo");
$role3 = new role("Aileen");
$role4 = new role("Jimmy Tong");
$role5 = new role("Skywalker Luke");


$casting1 = new Casting($acteur1, $role2, $film1);
$casting2 = new Casting($acteur4, $role4, $film4);
$casting3 = new Casting($acteur2, $role1, $film6);
$casting4 = new Casting($acteur3, $role3, $film3);
$casting5 = new Casting($acteur2, $role1, $film2);
$casting6 = new Casting($acteur5, $role1, $film6);
$casting7 = new Casting($acteur6, $role1, $film2);
$casting8 = new Casting($acteur7, $role2, $film5);
$casting9 = new Casting($acteur4, $role4, $film7);

$rea1->afficherFilmo(); // Filmo du réa
$acteur7->getFilmo(); // Filmo de l'acteur 
$film1->getGenre(); // Le film " " est du genre ...
$genre4->listGenre(); // Liste des films du genre " "    A REPARER 
$acteur1->listCasting(); // Liste des rôles de l'acteur  



?>
























