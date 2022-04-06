<?php

require_once "../model/OilyMaterial.php";

Class ControllerOilyMaterial{

    public static function getAllOilyMaterial(){

        $allOilyMaterial = OilyMaterial::getAllOilyMaterial();
        require_once "../view/readAllOilyMaterial.php";
    }

    public static function getOilyMaterialById($idOilyMaterial){
        
        $oilyMaterial = OilyMaterial::getOilyMaterialById($idOilyMaterial);
        require_once "../view/readOilyMaterialById.php";
        
    }

    public static function createOilyMaterial($post){
        
        $oilyMaterial = new OilyMaterial($post['productName'], $post['state'], $post['origin'], $post['processedProduct'], $post['ingredientOrConsumable']);
        $oilyMaterial->createOilyMaterial();
        self::getAllOilyMaterial();

    }

    public static function getFormUpdate($id){
        $oilyMaterial = OilyMaterial::getFormUpdate($id);
        var_dump($oilyMaterial);
        require "../view/formUpdateOilyMaterial.php";
    }

    public static function updateOilyMaterial($post){
        echo "hshshshshshshshs";
        
        $oilyMaterial = new OilyMaterial($post['productName'], $post['state'], $post['origin'], $post['processedProduct'], $post['ingredientOrConsumable'], $post['idOilyMaterial']);
        $oilyMaterial->updateOilyMaterial();
      
        self::getAllOilyMaterial();
    }

    public static function deleteOilyMaterialById($idOilyMaterial){

        $oilyMaterial = OilyMaterial::deleteOilyMaterialById($idOilyMaterial);
    
        self::getAllOilyMaterial();
    }
    
}

?>