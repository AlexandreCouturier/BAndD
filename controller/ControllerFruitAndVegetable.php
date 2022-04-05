<?php
require_once "../model/FruitAndVegetable.php";
Class ControllerFruitAndVegetable{

    public static function getAllFruitAndVegetable(){

     $allFruitAndVegetable = FruitAndVegetable::getAllFruitAndVegetable();
     require_once "../view/readAllFruitAndVegetable.php";
    }

    public static function getFruitAndVegetableById($idFruitAndVegetable){
        
        $oilyMaterial = FruitAndVegetable::getFruitAndVegetableById($idFruitAndVegetable);
        require_once "../view/readFruitAndVegetableById.php";
    }

    public static function createFruitAndVegetable($post){
        
        $oilyMaterial = new FruitAndVegetable($post['productName'], $post['color'], $post['taste'], $post['coldOrHot']);
        $oilyMaterial->createFruitAndVegetable();
        self::getAllFruitAndVegetable();

    }

    public static function getFormUpdate($get){
        $oilyMaterial = FruitAndVegetable::getFormUpdate($get);
        require "../view/formUpdateFruitAndVegetable.php";
    }

    public static function updateFruitAndVegetable($post){
        
        $oilyMaterial = new FruitAndVegetable($post['productName'], $post['color'], $post['taste'], $post['coldOrHot']);
        $oilyMaterial->setIdFruitAndVegetable($post['idFruitAndVegetable']);
        $oilyMaterial->updateFruitAndVegetable();
      
        self::getAllFruitAndVegetable();
    }

    public static function deleteFruitAndVegetableById($idFruitAndVegetable){

        $oilyMaterial = FruitAndVegetable::deleteFruitAndVegetableById($idFruitAndVegetable);
    
        self::getAllFruitAndVegetable();
    }
    
}

?>