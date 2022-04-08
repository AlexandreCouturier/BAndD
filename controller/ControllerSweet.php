<?php

require_once "../model/Sweet.php";
Class ControllerSweet{

    public static function getAllSweet(){

     $allSweet = Sweet::getAllSweet();
     require_once "../../BAndD/view/viewSweet/readAllSweet.php";

    }

    public static function getSweetById($idSweet){
        
        $sweet = Sweet::getSweetById($idSweet);
        require_once "../view/viewSweet/readSweetById.php";

    }

    public static function createSweet($post){
        
        $sweet = new Sweet($post['productName'], $post['origin'], $post['processedProduct'], $post['ingredientOrConsumable'], $post['coldOrHot']);
        $sweet->createSweet();

        self::getAllSweet();

    }

    public static function getFormUpdate($idSweet){
        $sweet = Sweet::getFormUpdate($idSweet);
        var_dump($sweet);
        require "../view/viewSweet/formUpdateSweet.php";
    }

    public static function updateSweet($post){
        echo "hshshshshshshshs";
        $sweet = new Sweet($post['productName'], $post['origin'], $post['processedProduct'], $post['ingredientOrConsumable'], $post['coldOrHot'],$post['idSweet']);
        $sweet->updateSweet();
      
        self::getAllSweet();
    }

    public static function deleteSweetById($idSweet){

        $sweet = Sweet::deleteSweetById($idSweet);
    
        self::getAllSweet();

    }
    
}

?>