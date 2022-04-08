<?php
echo "viande";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/dao.php");
echo "apres include";
class Feculent
{
    

    private $idFeculent;
    private $productName;
    private $originPlant;
    private $transform;
    private $cooked;
    
    
   
    public function __construct($productName, $originPlant, $transform, $cooked, $idFeculent=NULL)
    {
        $this->productName = $productName;
        $this->originPlant = $originPlant;
        $this->transform = $transform;
        $this->cooked = $cooked;

    }

    
    
    public static function getAllFeculent(){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM feculent;");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function createFeculent()
    {
        echo "MYYYYYYYooYYYYYB";
        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO feculent(productName,originPlant,transform,cooked) 
        VALUES(:un,:deu,:troi,:quatre);");

        $stmt->bindParam(":un", $this->productName);
        $stmt->bindParam(":deu", $this->originPlant);
        $stmt->bindParam(":troi", $this->transform);
        $stmt->bindParam(":quatre", $this->cooked);
   

        return $stmt->execute();
    }


    public static function getFeculentById($idFeculent){

        $dao = new Dao();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM feculent WHERE idFeculent = :idFeculent;");
         $stmt->bindParam("idFeculent",$idFeculent);
         $stmt->execute();
 
         return $stmt->fetch();
    }

    

    public function updateFeculent(){
        $Dao = new Dao();
        $dbh =$Dao->getDbh();

        $stmt = $dbh->prepare("UPDATE feculent SET productName=:productName, originPlant=:originPlant, transform=:transform, cooked=:cooked  WHERE idFeculent=:idFeculent");
       /* VALUES (:productName, :originPlant, :transform, :cooked);");*/
       
       $stmt->bindParam(":productName", $this->productName);
       $stmt->bindParam(":originPlant", $this->originPlant);
       $stmt->bindParam(":transform", $this->transform);
       $stmt->bindParam(":cooked", $this->cooked);
       $stmt->bindParam(':idFeculent',$this->idFeculent);
        
      return $stmt->execute();
    }




    public static function deleteFeculentById($idFeculent){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM feculent WHERE idFeculent = :idFeculent;");
         $stmt->bindParam("idFeculent",$idFeculent);
         $stmt->execute();
 
        
         
    }


    /**
     * Get the value of productName
     */ 
    public function getproductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setproductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the value of originPlant
     */ 
    public function getoriginPlant()
    {
        return $this->originPlant;
    }

    /**
     * Set the value of originPlant
     *
     * @return  self
     */ 
    public function setoriginPlant($originPlant)
    {
        $this->originPlant = $originPlant;

        return $this;
    }

    /**
     * Get the value of transform
     */ 
    public function gettransform()
    {
        return $this->transform;
    }

    /**
     * Set the value of transform
     *
     * @return  self
     */ 
    public function settransform($transform)
    {
        $this->transform = $transform;

        return $this;
    }

    /**
     * Get the value of cooked
     */ 
    public function getcooked()
    {
        return $this->cooked;
    }

    /**
     * Set the value of cooked
     *
     * @return  self
     */ 
    public function setcooked($cooked)
    {
        $this->cooked = $cooked;

        return $this;
    }



    /**
     * Get the value of idFeculent
     */ 
    public function getidFeculent()
    {
        return $this->idFeculent;
    }

    /**
     * Set the value of idFeculent
     *
     * @return  self
     */ 
    public function setidFeculent($idFeculent)
    {
        $this->idFeculent = $idFeculent;

        return $this;
    }
}

?>