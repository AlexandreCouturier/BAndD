<?php
require "../Controller/ControllerFruitAndVegetable.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
            ControllerFruitAndVegetable::getAllFruitAndVegetable();

        }elseif($_GET["action"] == "idFruitAndVegetable"){
            ControllerFruitAndVegetable::getFruitAndVegetableById($_GET["idFruitAndVegetable"]);

        }elseif($_GET["action"] == "updateFruitAndVegetable"){
            ControllerFruitAndVegetable::getFormUpdate($_GET["idFruitAndVegetable"]);//envoi vers le formulaire

        }elseif($_GET["action"] == "deleteFruitAndVegetableById"){
            ControllerFruitAndVegetable::deleteFruitAndVegetableById($_GET["idFruitAndVegetable"]);
    }

    }elseif(isset($_POST["submit"])){

        if(isset($_POST["idFruitAndVegetable"])){

        ControllerFruitAndVegetable::updateFruitAndVegetable($_POST);//enregistre le formulaire
     
        }else{

        ControllerFruitAndVegetable::createFruitAndVegetable($_POST);
    }

}

?>