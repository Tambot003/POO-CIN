<?php

class Personne 
{
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected string $dtNaissance;
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dtNaissance = $dtNaissance;
    }
    
   
    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        
        return $this;
    }
    

    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        
        return $this;
    }


    public function getSexe(): string
    {
        return $this->sexe;
    }
    
    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;
        
        return $this;
    }

    public function getDtNaissance()
    {
        return $this->dtNaissance;
    }
    
    public function setDtNaissance(string $dtNaissance): self
    {
        $this->dtNaissance = $dtNaissance;
        
        return $this;
    }
    
    
}

