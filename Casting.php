<?php

class Casting
{
    private $acteur;
    private $role;
    private $film;
    
    public function __construct($acteur, $role, $film) {
        $this->acteur = $acteur;
        $this->acteur->addCasting($this);

        $this->role = $role;
        $this->role->addCasting($this);

        $this->film = $film;
        $this->film->addCasting($this);
    }
    
    
    public function getActeur()
    {
        return $this->acteur;
    }
    
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;
        
        return $this;
    }
    
    public function getRole()
    {
        return $this->role;
    }
    
    public function setRole($role)
    {
        $this->role = $role;
        
        return $this;
    }
    
    public function getFilm()
    {
        return $this->film;
    }
    
    public function setFilm($film): self
    {
        $this->film = $film;
        
        return $this;
    }
    

}