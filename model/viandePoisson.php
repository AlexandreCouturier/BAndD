<?php
echo "viande";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/DAO.php");
echo "apres include";
class ViandePoisson
{
    

    private $idViandePoisson;
    private $productName;
    private $typeOfMeat;
    private $animal;
    private $disappearance;
    
    
   
    public function __construct($productName, $typeOfMeat, $animal, $disappearance, $idViandePoisson=NULL)
    {
        $this->productName = $productName;
        $this->typeOfMeat = $typeOfMeat;
        $this->animal = $animal;
        $this->disappearance = $disappearance;

    }

    
    
    public static function getAllViandePoisson(){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM viandePoisson;");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function createViandePoisson()
    {
        echo "MYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYB";
        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO viandePoisson(productName,typeOfMeat,animal,disappearance) 
        VALUES(:un,:deu,:troi,:quatre);");

        $stmt->bindParam(":un", $this->productName);
        $stmt->bindParam(":deu", $this->typeOfMeat);
        $stmt->bindParam(":troi", $this->animal);
        $stmt->bindParam(":quatre", $this->disappearance);
   

        return $stmt->execute();
    }


    public static function getViandePoissonById($idViandePoisson){

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM viandePoisson WHERE idViandePoisson = :idViandePoisson;");
         $stmt->bindParam("idViandePoisson",$idViandePoisson);
         $stmt->execute();
 
         return $stmt->fetch();
}

    

    public function updateViandePoisson(){
        $Dao = new Dao();
        $dbh =$Dao->getDbh();

        $stmt = $dbh->prepare("UPDATE viandePoisson SET productName=:productName, typeOfMeat=:typeOfMeat, animal=:animal, disappearance=:disappearance  WHERE idViandePoisson=:idViandePoisson");
       /* VALUES (:productName, :typeOfMeat, :animal, :disappearance);");*/
       
       $stmt->bindParam(":productName", $this->productName);
       $stmt->bindParam(":typeOfMeat", $this->typeOfMeat);
       $stmt->bindParam(":animal", $this->animal);
       $stmt->bindParam(":disappearance", $this->disappearance);
       $stmt->bindParam(':idViandePoisson',$this->idViandePoisson);
        
      return $stmt->execute();
    }




    public static function deleteViandePoissonById($idViandePoisson){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM viandePoisson WHERE idViandePoisson = :idViandePoisson;");
         $stmt->bindParam("idViandePoisson",$idViandePoisson);
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
     * Get the value of typeOfMeat
     */ 
    public function gettypeOfMeat()
    {
        return $this->typeOfMeat;
    }

    /**
     * Set the value of typeOfMeat
     *
     * @return  self
     */ 
    public function settypeOfMeat($typeOfMeat)
    {
        $this->typeOfMeat = $typeOfMeat;

        return $this;
    }

    /**
     * Get the value of animal
     */ 
    public function getanimal()
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     *
     * @return  self
     */ 
    public function setanimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get the value of disappearance
     */ 
    public function getdisappearance()
    {
        return $this->disappearance;
    }

    /**
     * Set the value of disappearance
     *
     * @return  self
     */ 
    public function setdisappearance($disappearance)
    {
        $this->disappearance = $disappearance;

        return $this;
    }



    /**
     * Get the value of idViandePoisson
     */ 
    public function getidViandePoisson()
    {
        return $this->idViandePoisson;
    }

    /**
     * Set the value of idViandePoisson
     *
     * @return  self
     */ 
    public function setidViandePoisson($idViandePoisson)
    {
        $this->idViandePoisson = $idViandePoisson;

        return $this;
    }
}

?>