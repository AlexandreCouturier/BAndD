<?php
echo "router";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/controller/controllerViandePoisson.php");
echo "dans le routerViandePoisson avant le if "; 
if(isset($_GET["action"])){
echo "ok ok ";
    if($_GET["action"] == "all"){
        echo "eh oui";
        ControllerViandePoisson::getAll();

    }elseif($_GET["action"] == "id"){
        ControllerViandePoisson::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerViandePoisson::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerViandePoisson::deleteById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   
echo "ejee";
    if(isset($_POST["id"])){
echo "BAndD";
        ControllerViandePoisson::update($_POST);//enregistre le formulaire
     
    }else{

        ControllerViandePoisson::create($_POST);
    }
    echo "BAndD";
}
echo "defefefe";
?>