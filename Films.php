<?php


class Film 
{
    protected string $titre;
    protected $dtSortie;
    protected $duree;
    protected $realisateur;
    protected $genre;
    private $casting;
    
    public function __construct(string $titre, string $dtSortie, int $duree, Realisateur $realisateur, Genre $genre) {
        $this->titre = $titre;
        $this->dtSortie = new DateTime($dtSortie);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this); 
        $this->genre = $genre;
        $this->casting = [];
        
        
        $this->realisateur->addFilm($this);
        $this->genre->addFilm($this);
        
    }
   
    public function getTitre()
    {
        return $this->titre;
    }
    
    public function setTitre($titre): self
    {
        $this->titre = $titre;
        
        return $this;
    }

    public function getDtSortie()
    {
        return $this->dtSortie;
    }
    
    public function setDtSortie($dtSortie): self
    {
        $this->dtSortie = $dtSortie;
        
        return $this;
    }
   
    public function getDuree()
    {
        return $this->duree;
    }
    
    public function setDuree($duree): self
    {
        $this->duree = $duree;
        
        return $this;
    }
    
    public function getRealisateur()
    {
        return $this->realisateur;
    }
    
    public function setRealisateur($realisateur): self
    {
        $this->realisateur = $realisateur;
        
        return $this;
    }
    
   
    public function getGenre()
    {
        echo " <br>*** Le film " . $this . " appartient au genre : " . $this->genre . "***";
    }
    
    public function setGenre($genre): self
    { 
        $this->genre = $genre;
        
        return $this;
    }