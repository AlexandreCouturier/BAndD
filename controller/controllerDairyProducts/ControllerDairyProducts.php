<?php
echo "dans le controller DairyProducts avant la class";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/DairyProducts.php");
Class ControllerDairyProducts{


    public static function getAllDairyProducts(){
        $allRows = DairyProducts::getAllDairyProducts();
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewDairyProducts/viewDairyProductsAll.php");
    }

    public static function getDairyProductsById($idDairyProducts){
        $row = DairyProducts::getDairyProductsByid($idDairyProducts);
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewDairyProducts/viewDairyProductsById.php");

    }

    public static function createDairyProducts($post){
        echo "dans la fonction createDairyProducts dans le controller";
        var_dump($post);
        $DairyProducts = new DairyProducts($post['productName'], $post['animalOrPlant'], $post['state'], $post['fermentation']);

        $DairyProducts->createDairyProducts();
        self::getAllDairyProducts();
    }

   public static function updateDairyProducts($post){
        $DairyProducts = new DairyProducts($post['productName'], $post['animalOrPlant'], $post['state'],$post['fermentation'],$post['idDairyProducts']);

        $DairyProducts->updateDairyProducts();
        self::getAllDairyProducts();
    }

    public static function deleteDairyProductsById($id){
       
        DairyProducts::deleteDairyProductsById($id);
        self::getAllDairyProducts();
    }

    public static function formDairyProductsUpdate($get){

        $row = DairyProducts::getDairyProductsByid($get);
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewDairyProducts/formDairyProductsUpdate.php");

    }

    public static function formOffer(){

        require "./View";
    }

}