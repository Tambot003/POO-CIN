<?php

class Genre {
    private string $nom;
    private $tabFilmsGenre;
    
    public function __construct($nom)
    {
        $this->nom = $nom;
        $this->tabFilmsGenre = [];
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
        return $this->tabFilmsGenre;
    }
    
    public function setTabFilmsGenre($tabFilmsGenre): self
    {
        $this->tabFilmsGenre = $tabFilmsGenre;
        
        return $this;
    }
    
    public function addFilm($film){
        $this->tabFilmsGenre [] = $film;
    }

    public function listGenre()
    {
        echo "<br> <br> *** Les films du genre " . $this . " sont: ***";
        foreach ($this->tabFilmsGenre as $film)
        {
            echo $film->getTitre() ." - " ; 
        }
    }
    
    public function __toString()
    {
        return $this->nom;
    }
  
}  






