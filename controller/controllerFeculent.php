<?php
require_once "./model/feculent.php";
class ControllerFeculent{

    public static function getAll(){
        

      $allFeculent = Feculent::getAllFeculent();
     require "../view/viewFeculent/readAllFeculent.php";
    }

    public static function getById($id){
        

        $Feculent = Feculent::getFeculentByid($id);
        require "../view/viewFeculent/readByIdfeculent.php";
    }

    public static function create($post){
        

        $Feculent = new Feculent($post['name'], $post['firstname'], 
        $post['email'], $post['phone'], $post['motivation'], $post['id_Job'] );
        $Feculent->createFeculent();
        self::getAll();

    }

    public static function update($post){
        
        $Feculent = new Feculent($post['name'], $post['firstname'], 
        $post['email'], $post['phone'], $post['motivation'], $post['id_Job'] );
        $Feculent->setId_Feculent($post["id"]);
        $Feculent->updateFeculent();
      
        self::getAll();
    }

    public static function deleteById($id){
       

        $Feculent = Feculent::deleteFeculentById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $Feculent = Feculent::getFeculentByid($id);
        require "./View/View_Feculent/formModif.php";
    }
    
}
