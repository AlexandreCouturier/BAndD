<?php
require "../controller/ControllerSweet.php";


if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
            ControllerSweet::getAllSweet();

        }elseif($_GET["action"] == "idSweet"){
            ControllerSweet::getSweetById($_GET["idSweet"]);

        }elseif($_GET["action"] == "updateSweet"){
            ControllerSweet::getFormUpdate($_GET["idSweet"]);//envoi vers le formulaire

        }elseif($_GET["action"] == "deleteSweetById"){
            ControllerSweet::deleteSweetById($_GET["idSweet"]);
    }

    }elseif(isset($_POST["submit"])){

        if(isset($_POST["idSweet"])){

        ControllerSweet::updateSweet($_POST);//enregistre le formulaire
     
        }else{

        ControllerSweet::createSweet($_POST);
    }

}

?>