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
        echo $panier1;
        echo $panier2;

?>
<?php 
    include("common/footer.php");
?>