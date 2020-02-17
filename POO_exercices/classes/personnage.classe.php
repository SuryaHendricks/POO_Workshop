<?php 
class Personnage{
    // Création d'un attribut statique disponible à partir de 
    // la classe sans passer par une instance d'objet
    private static $personnages = [];

    // Private empêche de modifier les informations de la classe et force l'utilisation de Setter et Getter
    public $nom;
    private $img;
    private $age;
    private $sexe;
    private $force;
    private $agilite;

    // Création de constantes 

    const FORCE_MAX = 8;
    const FORCE_MED = 4;
    const FORCE_MIN = 2;

    const AGI_MAX = 8;
    const AGI_MED = 4;
    const AGI_MIN = 2;
    // Création du constructeur qui va permettre de faire un genre de moule pour mes personnages
    function __construct($nom, $age, $sexe, $img, $force, $agilite){
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->img = $img;
        $this->force = $force;
        $this->agilite = $agilite;

        // Le tableau "$personnages" va prendre la valeur de l'objet ($this), self:: permet d'accéder à la classe personnage
        self::$personnages[] = $this;

    }
    // Fonction Setter
    function getNom(){return $this->nom;}
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getForce(){return $this->force;}
    function getAgilite(){return $this->agilite;}
    // Fonctions Getter
    function setNom($nom){$this->nom = $nom;}
    function setImg($img){$this->img = $img;}
    function setAge($age){$this->age = $age;}
    function setSexe($sexe){$this->sexe = $sexe;}

    public function afficherMesInformations(){
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Age : </b>" . $this->age . "<br/>";
        echo "<b>Sexe</b> : ";
        if($this->sexe === true){
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
        echo "<b>Force : </b>" . $this->force . "<br/>";
        echo "<b>Agilité : </b>" . $this->agilite . "<br/>";
    }

    public function afficherMesInformationsTemplate(){
        echo "<div class='gauche'>";
            echo "<img src = 'sources/images/".$this->img."' alt = '".$this->img."' />";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherMesInformations();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
    // Création d'une méthode statique pour récupérer nos personnages
    public function getListePersonnage(){
        return self::$personnages;
    }
}

?>