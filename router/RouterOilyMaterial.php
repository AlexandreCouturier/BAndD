<?php
require "../Controller/ControllerOilyMaterial.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerOilyMaterial::getAllOilyMaterial();

    }elseif($_GET["action"] == "idOilyMaterial"){
        ControllerOilyMaterial::getOilyMaterialById($_GET["idOilyMaterial"]);

    }elseif($_GET["action"] == "update"){
        ControllerOilyMaterial::updateOilyMaterial($_GET["idOilyMaterial"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerOilyMaterial::deleteOilyMaterial($_GET["idOilyMaterial"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["idOilyMaterial"])){

        ControllerOilyMaterial::updateOilyMaterial($_POST);//enregistre le formulaire
     

    }else{

        ControllerOilyMaterial::createOilyMaterial($_POST);
    }
}

?>