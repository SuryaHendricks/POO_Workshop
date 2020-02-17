<?php 
    require_once("classes/personnage.classe.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h2> Personnage : </h2>
   
<?php 

    $p1 = new Personnage("Surya", 31, true, "player.png", Personnage::FORCE_MAX, Personnage::AGI_MAX);

    $p2 = new Personnage("Mia", 26, false, "playerF.png", Personnage::FORCE_MAX, Personnage::AGI_MED);
    
    $p3 = new Personnage("MaximeBB", 20, true, "playerM.png", Personnage::FORCE_MIN, Personnage::AGI_MIN);
    
    $persos = Personnage::getListePersonnage();
    

    foreach($persos as $perso){
        $perso->afficherMesInformationsTemplate();
        echo " <br/>----------------------------------------- <br/>";
    }
    
?>
<?php 
    include("common/footer.php");
?>