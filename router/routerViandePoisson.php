<?php
require "./controller/controllerViandePoisson.php";

if(isset($_GET["action"])){

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
   

    if(isset($_POST["id"])){

        ControllerViandePoisson::update($_POST);//enregistre le formulaire
     

    }else{

        ControllerViandePoisson::create($_POST);
    }
}

?>