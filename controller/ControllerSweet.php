<?php

require_once "../model/Sweet.php";
Class ControllerSweet{

    public static function getAllSweet(){

     $allSweet = Sweet::getAllSweet();
     require_once "../view/viewSweet/readAllSweet.php";

    }

    public static function getSweetById($idSweet){
        
        $Sweet = Sweet::getSweetById($idSweet);
        require_once "../view/viewSweet/readSweetById.php";

    }

    public static function createSweet($post){
        
        $Sweet = new Sweet($post['productName'], $post['origin'], $post['processedProduct'], $post['ingredientOrConsumable'], $post['coldOrHot']);
        $Sweet->createSweet();

        self::getAllSweet();

    }

    public static function getFormUpdate($idSweet){
        $Sweet = Sweet::getFormUpdate($idSweet);
        var_dump($Sweet);
        require "../view/viewSweet/formUpdateSweet.php";
    }

    public static function updateSweet($post){
        echo "hshshshshshshshs";
        $Sweet = new Sweet($post['productName'], $post['origin'], $post['processedProduct'], $post['ingredientOrConsumable'], $post['coldOrHot'],$post['idSweet']);
        $Sweet->updateSweet();
      
        self::getAllSweet();
    }

    public static function deleteSweetById($idSweet){

        $Sweet = Sweet::deleteSweetById($idSweet);
    
        self::getAllSweet();

    }
    
}

?>