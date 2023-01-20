<?php

class Role
{
    
    private string $nom;
    private $casting;
    
    public function __construct($role) {
        $this->nom = $role;
        $this->casting = [];
        
    }
    
     
     public function addCasting($newCasting){ 
        $this->casting[] = $newCasting;
    }

    public function __toString()
    {
        return $this->nom;
    }
    
    public function listCasting()
    {
        echo $this->nom . " a été joué par : <BR>";
        foreach ($this->casting as $casting) {
            echo $casting->getActeur() . "<br>";
        }
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
   
  
    
    public function getCasting()
    {
        return $this->casting;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function setCasting($casting): self
    {
        $this->casting = $casting;
        
        return $this;
    }

    
}