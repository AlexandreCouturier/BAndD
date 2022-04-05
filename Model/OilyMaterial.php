<?php

require "c:/wamp64/www/BAndD/model/DAO.php";

class OilyMaterial{
    private $idOilyMaterial;
    private $productName;
    private $state;
    private $origin;
    private $processedProduct;
    private $ingredientOrConsumable;

    public function __construct($productName,$state,$origin,$processedProduct,$ingredientOrConsumable){
        $this->productName = $productName;
        $this->state = $state;
        $this->origin = $origin;
        $this->processedProduct = $processedProduct;
        $this->ingredientOrConsumable = $ingredientOrConsumable;  
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
     * Get the value of ingredientOrConsumable
     */ 
    public function getingredientOrConsumable()
    {
        return $this->ingredientOrConsumable;
    }

    /**
     * Set the value of ingredientOrConsumable
     *
     * @return  self
     */ 
    public function setingredientOrConsumable($ingredientOrConsumable)
    {
        $this->ingredientOrConsumable = $ingredientOrConsumable;

        return $this;
    }

    public static function createOilyMaterial(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO oilymaterial (productName,state,origin,processedProduct,ingredientOrConsumable) 
        VALUES(:productName,:state,:origin,:processedProduct,:ingredientOrConsumable);");

        $stmt->bindParam(':productName'->productName);
        $stmt->bindParam(':state'->state);
        $stmt->bindParam(':origin'->origin);
        $stmt->bindParam(':processedProduct'->processedProduct);
        $stmt->bindParam(':ingredientOrConsumable'->ingredientOrConsumable);
        
      return $stmt->execute();

    }

    public static function getOilyMaterialById($idOilyMaterial){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM oilymaterial WHERE idOilyMaterial = :idOilyMaterial;");
        $stmt->bindParam(":idOilyMaterial",$idOilyMaterial);
        $stmt->execute();
     
        return $stmt->fetch();
    }
     
    public static function getAllOilyMaterial(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
     
        $stmt = $dbh->prepare("SELECT * FROM oilymaterial;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getFormUpdate($idOilyMaterial){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM oilymaterial WHERE idOilyMaterial = :idOilyMaterial;");
        $stmt->bindParam(":idOilyMaterial",$idOilyMaterial);
        $stmt->execute();
     
        return $stmt->fetch();
    }

    public static function updateOilyMaterial(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE oilymaterial SET productName=:productName, state=:state, origin=:origin, processedProduct=:processedProduct, ingredientOrConsumable=:ingredientOrConsumable WHERE idOilyMaterial = :idOilyMaterial;");
       
        $stmt->bindParam(':productName'->productName);
        $stmt->bindParam(':state'->state);
        $stmt->bindParam(':origin'->origin);
        $stmt->bindParam(':processedProduct'->processedProduct);
        $stmt->bindParam(':ingredientOrConsumable'->ingredientOrConsumable);
        
        return $stmt->execute();
    }

    public static function deleteOilyMaterialById($idOilyMaterial){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM oilymaterial WHERE idOilyMaterial = :idOilyMaterial;");
        $stmt->bindParam(":idOilyMaterial",$idOilyMaterial);
        $stmt->execute();
    }

}