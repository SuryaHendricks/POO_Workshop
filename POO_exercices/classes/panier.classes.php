<?php

class Panier{

    private static $nextIdentifiant = 1;

    private $identifiant;
    private $pommes = [];
    private $oranges = [];

    public function __construct(){
        $this->identifiant = self::$nextIdentifiant;
        self::$nextIdentifiant ++;
    }

    public function addFruit($fruit){
        if($fruit->getNom() === Fruits::POMME){
            $this->pommes[] = $fruit;
        } elseif ($fruit->getNom() === Fruits::ORANGE){
            $this->oranges[] = $fruit;
        }
    }
    public function getIdentifiant(){
        return $this->identifiant;
    }
    
    public function __toString(){
        $affichage = "<h2>Voici le contenu du panier : " . $this->identifiant ."</h2><br/>";
        foreach($this->pommes as $pomme){
            $affichage .= $pomme;
        }
        foreach($this->oranges as $orange){
            $affichage .= $orange;
        }
        return $affichage;
    }
    
}

?>
