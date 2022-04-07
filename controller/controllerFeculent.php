<?php
echo "contr";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/Feculent.php");
echo "dans la class controllerdeculent avant la class";
class ControllerFeculent{

    public static function getAll(){
        

      $allFeculent = Feculent::getAllFeculent();
     include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewFeculent/readAllFeculent.php");

    }

    public static function getById($id){
        
        $Feculent = Feculent::getFeculentById($id);
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewFeculent/readByIdFeculent.php");

    }

    public static function create($post){
        
        $Feculent = new Feculent($post['productName'], $post['typeOfMeat'], 
        $post['animal'], $post['disappearance']);
        $Feculent->createFeculent();
        self::getAll();

    }

    public static function update($post){
        
        $Feculent = new Feculent($post['productName'], $post['typeOfMeat'], 
        $post['animal'], $post['disappearance']);
        $Feculent->setidFeculent($post["id"]);
        $Feculent->updateFeculent();
      
        self::getAll();
    }

    public static function deleteById($id){
       
        $Feculent = Feculent::deleteFeculentById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $Feculent = Feculent::getFeculentById($id);
        include($_SERVER['DOCUMENT_ROOT']."/BAndD/view/viewFeculent/formModif.php");

    }
    
}

?>