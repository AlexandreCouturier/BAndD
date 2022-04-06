<?php

require_once "../model/FruitAndVegetable.php";
Class ControllerFruitAndVegetable{

    public static function getAllFruitAndVegetable(){

     $allFruitAndVegetable = FruitAndVegetable::getAllFruitAndVegetable();
     require_once "../view/readAllFruitAndVegetable.php";

    }

    public static function getFruitAndVegetableById($idFruitAndVegetable){
        
        $fruitAndVegetable = FruitAndVegetable::getFruitAndVegetableById($idFruitAndVegetable);
        require_once "../view/readFruitAndVegetableById.php";

    }

    public static function createFruitAndVegetable($post){
        
        $fruitAndVegetable = new FruitAndVegetable($post['productName'], $post['color'], $post['taste'], $post['coldOrHot']);
        $fruitAndVegetable->createFruitAndVegetable();

        self::getAllFruitAndVegetable();

    }

    public static function getFormUpdate($idFruitAndVegetable){
        $fruitAndVegetable = FruitAndVegetable::getFormUpdate($idFruitAndVegetable);
        var_dump($fruitAndVegetable);
        require "../view/formUpdateFruitAndVegetable.php";
    }

    public static function updateFruitAndVegetable($post){
        echo "hshshshshshshshs";
        $fruitAndVegetable = new FruitAndVegetable($post['productName'], $post['color'], $post['taste'], $post['coldOrHot'],$post['idFruitAndVegetable']);
        $fruitAndVegetable->updateFruitAndVegetable();
      
        self::getAllFruitAndVegetable();
    }

    public static function deleteFruitAndVegetableById($idFruitAndVegetable){

        $fruitAndVegetable = FruitAndVegetable::deleteFruitAndVegetableById($idFruitAndVegetable);
    
        self::getAllFruitAndVegetable();

    }
    
}

?>