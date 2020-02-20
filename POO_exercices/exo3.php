<?php 
    require_once("classes/fruits.classes.php");
    require_once("classes/panier.classes.php");
    include("common/header.php");
    include("common/menu.php");
?>
<?php 
        $orange1 = new Fruits(Fruits::ORANGE, 160);
        $orange2 = new Fruits(Fruits::ORANGE, 120);
        $orange3 = new Fruits(Fruits::ORANGE, 110);
        $pomme1 = new Fruits(Fruits::POMME, 180);
        $pomme2 = new Fruits(Fruits::POMME, 120);
        $pomme3 = new Fruits(Fruits::POMME, 190);

        $panier1 = new Panier();
        $panier1->addFruit($orange1);
        $panier1->addFruit($orange2);
        $panier1->addFruit($pomme1);

        $panier2 = new Panier();
        $panier2->addFruit($orange3);
        $panier2->addFruit($pomme2);
        $panier2->addFruit($pomme3);

        // mise des paniers dans un tableau
        $paniers = [$panier1, $panier2];

        // Formulaire avec option
        echo '<form action="#" method="POST" >';
            echo '<label for="panier"> Panier : </label>';
            echo '<select name=" panier" id="panier" onChange="submit()">;'; //Valider le formulaire à la modification sur ce champs
            echo "<option value=''></option>";
            
            foreach($paniers as $panier){
                echo "<option value='". $panier->getIdentifiant(). "'>Panier : " .$panier->getIdentifiant()."</option>";
            }
            echo "</select>";
        echo "</form>";
        // Formulaire avec option

        // Afficher le panier en fonction de la saisie du formulaire
            if(isset($_POST['panier'])){
                $panierAAfficher = getPanierById((int)$_POST['panier']); // Le (int) permet de transformer la chaine de caractère en nombre entier
                echo "<h2> Affichage du panier : ".$_POST['panier'] . "</h2>";
                echo $panierAAfficher;
            }

            function getPanierById($id){
                global $paniers; //La variable $paniers est or scope, l'instruction Global permet de l'utiliser.
                foreach($paniers as $panier){
                    if($panier->getIdentifiant() === $id){ // Verifie si le panier qui est passé qui est bouclé est égal à l'ID qui est en paramètre
                        return $panier;
                    }
                }
            } 

?>
<?php 
    include("common/footer.php");
?>