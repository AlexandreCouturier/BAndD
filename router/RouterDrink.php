<?php
echo "Dans le routerDrink";
require "../controller/controllerDrink/ControllerDrink.php";

if(isset($_GET["action"])){
    echo "dans get action ";
    
    if($_GET["action"] == "all"){
        ControllerDrink::getAllDrink();

    }elseif($_GET["action"] == "id"){
        ControllerDrink::getDrinkById($_GET["idDrink"]);

    }elseif($_GET["action"] == "update"){
        ControllerDrink::formDrinkUpdate($_GET["idDrink"]);//envoi vers le formulaire

    }/*elseif($_GET["action"] == "delete"){
        ControllerOffer::deleteOfferById($_GET["id"]);
    }
*/
}elseif(isset($_POST["submit"])){
   echo "dans post submit";
    if(isset($_POST["idDrink"])){
        
        ControllerDrink::updateDrink($_POST);//enregistre le formulaire
     

    }else{
        echo "avant la fonction controllerdrink::createdrink";
        ControllerDrink::createDrink($_POST);
    }
}

?>