<?php
require "../Controller/ControllerFeculent.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        echo "eh oui";
        ControllerFeculent::getAll();

    }elseif($_GET["action"] == "id"){
        ControllerFeculent::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerFeculent::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerFeculent::deleteById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerFeculent::update($_POST);//enregistre le formulaire
     

    }else{

        ControllerFeculent::create($_POST);
    }
}

?>