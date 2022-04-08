<?php
echo "contr";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/ViandePoisson.php");
echo "dans la class controllerdeculent avant la class";
class ControllerViandePoisson{

    public static function getAll(){
        
        $allViandePoisson = ViandePoisson::getAllViandePoisson();
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewViandePoisson/readAllViandePoisson.php");

    }

    public static function getById($id){
        
        $ViandePoisson = ViandePoisson::getViandePoissonById($id);
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewViandePoisson/readByIdViandePoisson.php");

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
        $ViandePoisson = ViandePoisson::getViandePoissonById($id);
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewViandePoisson/formModif.php");

    }
    
}

?>