<?php 
class Fruits{
  
    private $nom;
    private $poids;
    private $prix;
    
    function __construct($nom, $poids){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);
       

    }
    const POMME ="pomme";
    const ORANGE = "orange";

    const POMMEIMG = "pomme.png";
    const ORANGEIMG = "orange.jpg";

    public function getNom(){
        return $this->nom;
    }
    
    function getPrixFruits($nom){
        if($nom === self::POMME){
            return 15;
        }else if ($nom === self::ORANGE){
        return 20;
        }
    }

    public function __toString(){
        $affichage = $this->getAffichageImg() ."<br/>";
        $affichage .= "Nom : " . $this->nom . "<br/>";
        $affichage .= "Poids : " . $this->poids . "<br/>";
        $affichage .= "Prix : " . $this->prix . "<br/>";
        return $affichage;
    }
    private function getAffichageImg(){
        if($this->nom === self::POMME){
            return "<img src = 'sources/images/" .self::POMMEIMG."' alt ='image pomme'/>" ;
        } else if($this->nom === self::ORANGE){
            return "<img src = 'sources/images/" .self::ORANGEIMG."' alt ='image orange'/>" ;
        }
    }
   
}

?>




