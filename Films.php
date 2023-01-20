<?php


class Film 
{
    protected string $titre;
    protected $dtSortie;
    protected $duree;
    protected $realisateur;
    protected $genre;
    private $casting;
    
    public function __construct($titre, $dtSortie, $duree, $realisateur, $genre) {
        $this->titre = $titre;
        $this->dtSortie = $dtSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this);
        $this->genre = $genre;
        $this->casting = [];
        $this->genre->addFilm($this);
        
    }
    


    public function getTitre()
    {
        return $this->titre;
    }
    
    
    public function getDtSortie()
    {
        return $this->dtSortie;
    }
    
    
    public function getDuree()
    {
        return $this->duree;
    }
   
    
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function getGenre()
    {
        echo " <br>--Le film " . $this . " appartient au genre : " . $this->genre . "";
    }
    





    public function setTitre($titre)
    {
        $this->titre = $titre;
        
        return $this;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
        
        return $this;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
        
        return $this;
    }
    
  
    public function setDtSortie($dtSortie)
    {
        $this->dtSortie = $dtSortie;
        
        return $this;
    }
    
    public function setGenre($genre)
    { 
        $this->genre = $genre;
        
        return $this;
    }
    
    
    public function getDescription()
    {
        echo "<br>". "<br> Description de " . $this->getTitre() . " " .  ":<br>" . $this->titre . " est un film de genre " . $this->genre . " " . "réalisé par " . $this->realisateur . " et est sortie le " . $this->dtSortie  .  "<br> Durée : " . $this->duree . " minutes. <br>";
        foreach ($this->casting as $casting) 
        {
            echo $casting->getActeur()->getPrenom() . " " . $casting->getActeur()->getNom() ." a joué ". $casting->getRole(). " dans ce film. <br>";
        }
    }
    
    
    public function addCasting($Casting){ 
        $this->casting[] = $Casting;
    }
    
    
    public function infoCasting()
    {
        echo "<br>" . "Dans le film ". $this->getTitre() ." le casting est le suivant : <br>";
        foreach ($this->casting as $casting) 
        {
            echo $casting->getActeur()->getPrenom() . " " . $casting->getActeur()->getNom() ." a joué ". $casting->getRole(). "<br>";
        }
    }
    
    public function __toString()
    {
        return $this->titre;
    }
    
  
}