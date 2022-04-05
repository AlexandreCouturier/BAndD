<?php
require_once "./model/Feculent.php";
class ControllerFeculent{

    public static function getAll(){
        

      $allFeculent = Feculent::getAllFeculent();
     require "../view/viewFeculent/readAllFeculent.php";
    }

    public static function getById($id){
        
        $Feculent = Feculent::getFeculentByid($id);
        require "../view/viewFeculent/readByIdFeculent.php";
    }

    public static function create($post){
        
        $Feculent = new Feculent($post['productName'], $post['originplant'], 
        $post['transform'], $post['cooked']);
        $Feculent->createFeculent();
        self::getAll();

    }

    public static function update($post){
        
        $Feculent = new Feculent($post['productName'], $post['originplant'], 
        $post['transform'], $post['cooked']);
        $Feculent->setidFeculent($post["id"]);
        $Feculent->updateFeculent();
      
        self::getAll();
    }

    public static function deleteById($id){
       
        $Feculent = Feculent::deleteFeculentById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $Feculent = Feculent::getFeculentByid($id);
        require "../view/viewFeculent/formModif.php";
    }
    
}
