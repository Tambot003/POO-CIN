
<?php



class Acteur extends Personne
{
    private $casting;
    
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dtNaissance);
        $this->casting = [];
    }
 
    public function getCasting(): array
    {
        return $this->casting;
    }
    
    public function setCasting(array $casting): self
    {
        $this->casting = $casting;
        
        return $this;
    }

    
    function getFilmo()
    {
        foreach ($this->casting as $film)
        {
            echo "<br> Bibliographie" . "-" . $film->getActeur()->getPrenom() . " " . $film->getActeur()->getNom() . " A joué dans : " . $film->getFilm()->getTitre()."<br>";
        }
    }
 
    public function addCasting($newCasting){ 
        $this->casting[] = $newCasting;
    }
    
    public function listCasting()
    {
        foreach ($this->casting as $casting) {
            echo "<br>" . "<br>"  . $casting->getActeur()->getPrenom() . " " . $casting->getActeur()->getNom() . " à joué " . $casting->getRole(). "<br>";
        }
    }
    
  
}