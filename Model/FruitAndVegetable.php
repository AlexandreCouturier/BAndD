<?php

require "c:/wamp64/www/BAndD/model/DAO.php";

class FruitAndVegetable{
    private $idFruitAndVegetable;
    private $productName;
    private $color;
    private $taste;
    private $coldOrHot;

    public function __construct($productName,$color,$taste,$coldOrHot){
        $this->productName = $productName;
        $this->color = $color;
        $this->taste = $taste;
        $this->coldOrHot = $coldOrHot;  
    }

        /**
     * Get the value of idFruitAndVegetable
     */ 
    public function getIdFruitAndVegetable()
    {
        return $this->idFruitAndVegetable;
    }

    /**
     * Set the value of idFruitAndVegetable
     *
     * @return  self
     */ 
    public function setIdFruitAndVegetable($idFruitAndVegetable)
    {
        $this->idFruitAndVegetable = $idFruitAndVegetable;

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
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of taste
     */ 
    public function getTaste()
    {
        return $this->taste;
    }

    /**
     * Set the value of taste
     *
     * @return  self
     */ 
    public function setTaste($taste)
    {
        $this->taste = $taste;

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

    public function createFruitAndVegetable(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO fruitandvegetable (productName,color,taste,coldOrHot) 
        VALUES(:productName,:color,:taste,:coldOrHot);");

        $stmt->bindParam(':productName',$this->productName);
        $stmt->bindParam(':color',$this->color);
        $stmt->bindParam(':taste', $this->taste);
        $stmt->bindParam(':coldOrHot',$this->coldOrHot);
        
      return $stmt->execute();

    }

    public static function getFruitAndVegetableById($idFruitAndVegetable){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM fruitandvegetable WHERE idFruitAndVegetable = :idFruitAndVegetable;");
        $stmt->bindParam(":idFruitAndVegetable",$idFruitAndVegetable);
        $stmt->execute();
     
        return $stmt->fetch();
    }
     
    public static function getAllFruitAndVegetable(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
     
        $stmt = $dbh->prepare("SELECT * FROM fruitandvegetable;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getFormUpdate($idFruitAndVegetable){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM fruitandvegetable WHERE idFruitAndVegetable = :idFruitAndVegetable;");
        $stmt->bindParam(":idFruitAndVegetable",$idFruitAndVegetable);
        $stmt->execute();
     
        return $stmt->fetch();
    }

    public static function updateFruitAndVegetable(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE fruitandvegetable SET productName=:productName, color=:color, taste=:taste, coldOrHot=:coldOrHot= WHERE idFruitAndVegetable = :idFruitAndVegetable;");
       
        $stmt->bindParam(':productName',$productName);
        $stmt->bindParam(':color',$color);
        $stmt->bindParam(':taste',$taste);
        $stmt->bindParam(':coldOrHot',$coldOrHot);
       
        return $stmt->execute();
    }

    public static function deleteFruitAndVegetableById($idFruitAndVegetable){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM fruitandvegetable WHERE idFruitAndVegetable = :idFruitAndVegetable;");
        $stmt->bindParam(":idFruitAndVegetable",$idFruitAndVegetable);
        $stmt->execute();
    }

}