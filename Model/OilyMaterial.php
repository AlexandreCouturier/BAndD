<?php

require "c:/wamp64/www/BAndD/Model/DAO.php";

class OilyMaterial{
    private $idOilyMaterial;
    private $productName;
    private $state;
    private $origin;
    private $processedProduct;
    private $consumableOrIngredient;

    public function __construct($productName,$state,$origin,$processedProduct,$consumableOrIngredient){
        $this->productName = $productName;
        $this->state = $state;
        $this->origin = $origin;
        $this->processedProduct = $processedProduct;
        $this->consumableOrIngredient = $consumableOrIngredient;  
    }

    /**
     * Get the value of idOilyMaterial
     */ 
    public function getIdOilyMaterial()
    {
        return $this->idOilyMaterial;
    }

    /**
     * Set the value of idOilyMaterial
     *
     * @return  self
     */ 
    public function setIdOilyMaterial($idOilyMaterial)
    {
        $this->idOilyMaterial = $idOilyMaterial;

        return $this;
    }

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of origin
     */ 
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set the value of origin
     *
     * @return  self
     */ 
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get the value of processedProduct
     */ 
    public function getProcessedProduct()
    {
        return $this->processedProduct;
    }

    /**
     * Set the value of processedProduct
     *
     * @return  self
     */ 
    public function setProcessedProduct($processedProduct)
    {
        $this->processedProduct = $processedProduct;

        return $this;
    }

    /**
     * Get the value of consumableOrIngredient
     */ 
    public function getConsumableOrIngredient()
    {
        return $this->consumableOrIngredient;
    }

    /**
     * Set the value of consumableOrIngredient
     *
     * @return  self
     */ 
    public function setConsumableOrIngredient($consumableOrIngredient)
    {
        $this->consumableOrIngredient = $consumableOrIngredient;

        return $this;
    }

    public function createOilyMaterial(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO oilyMaterial (productName,state,origin,processedProduct,consumableOrIngredient) 
        VALUES(:productName,:state,:origin,:processedProduct,:consumableOrIngredient);");

        $stmt->bindParam(':productName',$this->productName);
        $stmt->bindParam(':state',$this->state);
        $stmt->bindParam(':origin', $this->origin);
        $stmt->bindParam(':processedProduct',$this->processedProduct);
        $stmt->bindParam(':consumableOrIngredient',$this->consumableOrIngredient);
        
      return $stmt->execute();

    }

    public static function getOilyMaterialById($idOilyMaterial){

        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM Candidate WHERE idOilyMaterial = :idOilyMaterial;");
        $stmt->bindParam(":idOilyMaterial",$idOilyMaterial);
        $stmt->execute();
     
        return $stmt->fetch();
    }
     
    public static function getAllCandidate(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
     
        $stmt = $dbh->prepare("SELECT * FROM Candidate;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateOilyMaterial(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Candidate SET state=:state, origin=:origin, processedProduct=:processedProduct, consumableOrIngredient=:consumableOrIngredient, productName=:productName WHERE idOilyMaterial = :idOilyMaterial;");

       

        $stmt->bindParam(':state',$this->state);
        $stmt->bindParam(':origin', $this->origin);
        $stmt->bindParam(':processedProduct',$this->processedProduct);
        $stmt->bindParam(':consumableOrIngredient',$this->consumableOrIngredient);
        $stmt->bindParam(':productName',$this->productName);
        
      return $stmt->execute();
    }

    public static function deleteOilyMaterialById($idOilyMaterial){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Candidate WHERE idOilyMaterial = :idOilyMaterial;");
        $stmt->bindParam(":idOilyMaterial",$idOilyMaterial);
        $stmt->execute();
         
    }
}


   