<?php 
    require_once("classes/fruits.classes.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h2> Fruits : </h2>
   
<?php 


        $orange1 = new Fruits(Fruits::ORANGE, 160);
        $orange2 = new Fruits(Fruits::ORANGE, 120);
        $orange3 = new Fruits(Fruits::ORANGE, 110);
        $pomme1 = new Fruits(Fruits::POMME, 180);
        $pomme2 = new Fruits(Fruits::POMME, 120);
        $pomme3 = new Fruits(Fruits::POMME, 190);
        $fruits = [$orange1, $orange2, $orange3, $pomme1, $pomme2, $pomme3];


        foreach($fruits as $fruit){
            echo $fruit;
            echo "<br/>--------------------------------<br/>";
        }
       

?>
<?php 
    include("common/footer.php");
?>