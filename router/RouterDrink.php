<?php
echo "Dans le routerDrink";
require "../controller/controllerDrink/ControllerDrink.php";

if(isset($_GET["action"])){
    echo "dans get action ";
    
    if($_GET["action"] == "all"){
        ControllerDrink::getAllDrink();

    }/*elseif($_GET["action"] == "id"){
        ControllerOffer::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerOffer::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerOffer::deleteOfferById($_GET["id"]);
    }
*/
}elseif(isset($_POST["submit"])){
   echo "dans post submit";
    if(isset($_POST["id"])){
        /*
        ControllerOffer::updateOffer($_POST);//enregistre le formulaire
     
*/
    }else{
        echo "avant la fonction controllerdrink::createdrink";
        ControllerDrink::createDrink($_POST);
    }
}

?>