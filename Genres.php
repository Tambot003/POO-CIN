<?php

class Genre {
    private string $nom;
    private $tabFilmsGenres;
    
    public function __construct($nom)
    {
        $this->nom = $nom;
        $this->tabFilmsGenres = [];
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom): self
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function getTabFilmsGenre()
    {
        return $this->tabFilmsGenres;
    }
    
    public function setTabFilmsGenre($tabFilmsGenre): self
    {
        $this->tabFilmsGenres = $tabFilmsGenre;
        
        return $this;
    }
    
    public function addFilm($film){
        $this->tabFilmsGenres [] = $film;
    }

    public function listGenre()
    {
        echo "<br> <br> -- Les films du genre " . $this . " sont:";
        foreach ($this->tabFilmsGenres as $film)
        {
            echo $film->getTitre() ."  " ; 
        }
    }
    
    public function __toString()
    {
        return $this->nom;
    }
  
}  






