<?php

require "../../BAndD/model/DAO.php";

class Sweet{
    private $idSweet;
    private $productName;
    private $origin;
    private $processedProduct;
    private $ingredientOrConsumable;
    private $coldOrHot;

    public function __construct($productName,$origin,$processedProduct,$ingredientOrConsumable,$coldOrHot,$idSweet = NULL){
        $this->productName = $productName;
        $this->origin = $origin;
        $this->processedProduct = $processedProduct;
        $this->ingredientOrConsumable = $ingredientOrConsumable;
        $this->coldOrHot = $coldOrHot;  
        $this->idSweet = $idSweet;
    }

        /**
     * Get the value of idSweet
     */ 
    public function getIdSweet()
    {
        return $this->idSweet;
    }

    /**
     * Set the value of idSweet
     *
     * @return  self
     */ 
    public function setIdSweet($idSweet)
    {
        $this->idSweet = $idSweet;

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
    public function getIngredientOrConsumable()
    {
        return $this->ingredientOrConsumable;
    }

    /**
     * Set the value of ingredientOrConsumable
     *
     * @return  self
     */ 
    public function setIngredientOrConsumable($ingredientOrConsumable)
    {
        $this->ingredientOrConsumable = $ingredientOrConsumable;

        return $this;
    }

    /**
     * Get the value of coldOrHot
     */ 
    public function getColdOrHot()
    {
        return $this->coldOrHot;
    }

    /**
     * Set the value of coldOrHot
     *
     * @return  self
     */ 
    public function setColdOrHot($coldOrHot)
    {
        $this->coldOrHot = $coldOrHot;

        return $this;
    }

    public function createSweet(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO sweet (productName,origin,processedProduct,ingredientOrConsumable,coldOrHot) 
        VALUES(:productName,:origin,:processedProduct,:ingredientOrConsumable,:coldOrHot);");

        $stmt->bindParam(':productName',$this->productName);
        $stmt->bindParam(':origin',$this->origin);
        $stmt->bindParam(':processedProduct',$this->processedProduct);
        $stmt->bindParam(':ingredientOrConsumable',$this->ingredientOrConsumable);
        $stmt->bindParam(':coldOrHot',$this->coldOrHot);
        
        return $stmt->execute();

    }

    public static function getSweetById($idSweet){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM sweet WHERE idSweet = :idSweet;");
        $stmt->bindParam(":idSweet",$idSweet);
        $stmt->execute();
     
        return $stmt->fetch();
    }
     
    public static function getAllSweet(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
     
        $stmt = $dbh->prepare("SELECT * FROM sweet;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getFormUpdate($idSweet){
 
        $dao = new DAO();

        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM sweet WHERE idSweet = :idSweet;");
        $stmt->bindParam(":idSweet",$idSweet);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function updateSweet(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE sweet SET productName=:productName, origin=:origin, processedProduct=:processedProduct, ingredientOrConsumable=:ingredientOrConsumable, coldOrHot=:coldOrHot WHERE idSweet = :idSweet;");
    
        $stmt->bindParam(':idSweet',$this->idSweet);
        $stmt->bindParam(':productName',$this->productName);
        $stmt->bindParam(':origin',$this->origin);
        $stmt->bindParam(':processedProduct',$this->processedProduct);
        $stmt->bindParam(':ingredientOrConsumable',$this->ingredientOrConsumable);
        $stmt->bindParam(':coldOrHot',$this->coldOrHot);
       
        return $stmt->execute();
    }

    public static function deleteSweetById($idSweet){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM sweet WHERE idSweet = :idSweet;");
        $stmt->bindParam(":idSweet",$idSweet);
        $stmt->execute();
    }

}