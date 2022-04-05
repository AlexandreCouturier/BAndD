<?php
require_once "./model/viandePoisson.php";
class ControllerViandePoisson{

    public static function getAll(){
        

      $allViandePoisson = ViandePoisson::getAllViandePoisson();
     require "../view/viewViandePoisson/readAllViandePoisson.php";
    }

    public static function getById($id){
        
        $ViandePoisson = ViandePoisson::getViandePoissonByid($id);
        require "../view/viewViandePoisson/readByIdViandePoisson.php";
    }

    public static function create($post){
        
        $ViandePoisson = new ViandePoisson($post['productName'], $post['typeOfMeat'], 
        $post['animal'], $post['disappearance']);
        $ViandePoisson->createViandePoisson();
        self::getAll();

    }

    public static function update($post){
        
        $ViandePoisson = new ViandePoisson($post['productName'], $post['typeOfMeat'], 
        $post['animal'], $post['disappearance']);
        $ViandePoisson->setidViandePoisson($post["id"]);
        $ViandePoisson->updateViandePoisson();
      
        self::getAll();
    }

    public static function deleteById($id){
       

        $ViandePoisson = ViandePoisson::deleteViandePoissonById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $ViandePoisson = ViandePoisson::getViandePoissonByid($id);
        require "./View/View_ViandePoisson/formModif.php";
    }
    
}
