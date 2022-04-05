<?php

require_once "./dao.php";

class ViandePoisson
{

    private $idViandePoisson;
    private $productName;
    private $typeOfMeat;
    private $animal;
    private $disappearance;
    
    
   
    public function __construct($productName, $typeOfMeat, $animal, $disappearance,)
    {
        $this->productName = $productName;
        $this->typeOfMeat = $typeOfMeat;
        $this->animal = $animal;
        $this->disappearance = $disappearance;
        
        
    }

    /*public static function getAllViandePoisson()
    {

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM ViandePoisson;");
        $rows = $stmt->fetchAll();

        return $rows;

        
    }*/
    
    public static function getAllViandePoisson(){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM ViandePoisson;");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function createViandePoisson()
    {

        $request = "INSERT INTO ViandePoisson (productName, typeOfMeat, animal, disappearance,) 
            VALUES (:productName, :typeOfMeat, :animal, :disappearance)";

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare($request);

        $stmt->bindParam(":productName", $this->productName);
        $stmt->bindParam(":typeOfMeat", $this->typeOfMeat);
        $stmt->bindParam(":animal", $this->animal);
        $stmt->bindParam(":disappearance", $this->disappearance);
   

        $stmt->execute();
    }

    public static function getViandePoissonById($idViandePoisson)
    {

        $request = "SELECT * FROM ViandePoisson WHERE IdViandePoisson = :idViandePoisson";

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":idViandePoisson", $idViandePoisson);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    /*public static function readByViandePoissonF($id_Job){

        $request = "SELECT * FROM ViandePoisson WHERE id_Job = :id_Job";

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_Job", $id_Job);
        $stmt->execute();
        $rows = $stmt->fetchAll();

        return $rows;

    }*/

    public function updateViandePoisson(){
        $Dao = new Dao();
        $dbh =$Dao->getDbh();

        $stmt = $dbh->prepare("UPDATE ViandePoisson SET (productName, typeOfMeat, animal, disappearance,) 
        VALUES (:productName, :typeOfMeat, :animal, :disappearance,");
       

       $stmt->bindParam(":productName", $this->productName);
       $stmt->bindParam(":typeOfMeat", $this->typeOfMeat);
       $stmt->bindParam(":animal", $this->animal);
       $stmt->bindParam(":disappearance", $this->disappearance);
        
      return $stmt->execute();
    }




    public static function deleteViandePoissonById($idViandePoisson){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM ViandePoisson WHERE idViandePoisson = :idViandePoisson;");
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
     * Get the value of motivation
     */ 
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set the value of motivation
     *
     * @return  self
     */ 
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get the value of id_Job
     */ 
    public function getId_Job()
    {
        return $this->id_Job;
    }

    /**
     * Set the value of id_Job
     *
     * @return  self
     */ 
    public function setId_Job($id_Job)
    {
        $this->id_Job = $id_Job;

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
