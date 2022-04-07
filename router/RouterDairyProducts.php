<?php
echo "Dans le routerDairyProducts";
require "../controller/controllerDairyProducts/ControllerDairyProducts.php";

if(isset($_GET["action"])){
    echo "dans get action ";
    
    if($_GET["action"] == "all"){
        ControllerDairyProducts::getAllDairyProducts();

    }elseif($_GET["action"] == "id"){
        ControllerDairyProducts::getDairyProductsById($_GET["idDairyProducts"]);

    }elseif($_GET["action"] == "update"){
        ControllerDairyProducts::formDairyProductsUpdate($_GET["idDairyProducts"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerDairyProducts::deleteDairyProductsById($_GET["idDairyProducts"]);
    }

}elseif(isset($_POST["submit"])){
   echo "dans post submit";
    if(isset($_POST["idDairyProducts"])){
        
        ControllerDairyProducts::updateDairyProducts($_POST);//enregistre le formulaire
     

    }else{
        echo "avant la fonction controllerDairyProducts::createDairyProducts";
        ControllerDairyProducts::createDairyProducts($_POST);
    }
}