<?php
echo "contr";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/ViandePoisson.php");
echo "dans la class controllerdeculent avant la class";
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
        
        $ViandePoisson = new ViandePoisson($post['productName'], $post['originplant'], 
        $post['transform'], $post['cooked']);
        $ViandePoisson->createViandePoisson();
        self::getAll();

    }

    public static function update($post){
        
        $ViandePoisson = new ViandePoisson($post['productName'], $post['originplant'], 
        $post['transform'], $post['cooked']);
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
        require "../view/viewViandePoisson/formModif.php";
    }
    
}

?>