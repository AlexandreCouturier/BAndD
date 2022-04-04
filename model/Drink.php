<?php 
require_once "DAO.php";

class Drink {
    private $productName;
    private $hotOrCold;
    private $sparklingOrStill;

    public function __construct($productName, $hotOrCold, $sparklingOrStill){
        $this->productName = $productName;
        $this->hotOrCold = $hotOrCold;
        $this->sparklingOrStill = $sparklingOrStill;
    }

    public function createDrink(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
       
       $stmt = $dbh->prepare("INSERT INTO drink (productName, hotOrCold, sparklingOrStill) VALUES (:un, :deux, :trois);");
       
       var_dump($this);
       $stmt->bindParam(':un', $this->productName);
        $stmt->bindParam(':deux', $this->hotOrCold);
        $stmt->bindParam(':trois', $this->sparklingOrStill);
        
        var_dump($stmt->execute());
    }

    public static function getAllDrink(){

        $dao = new DAO();

        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM drink;");
        $stmt->execute();
        $allRows = $stmt->fetchAll();
        return $allRows;
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
     * Get the value of hotOrCold
     */ 
    public function getHotOrCold()
    {
        return $this->hotOrCold;
    }

    /**
     * Set the value of hotOrCold
     *
     * @return  self
     */ 
    public function setHotOrCold($hotOrCold)
    {
        $this->hotOrCold = $hotOrCold;

        return $this;
    }

    /**
     * Get the value of sparklingOrStill
     */ 
    public function getSparklingOrStill()
    {
        return $this->sparklingOrStill;
    }

    /**
     * Set the value of sparklingOrStill
     *
     * @return  self
     */ 
    public function setSparklingOrStill($sparklingOrStill)
    {
        $this->sparklingOrStill = $sparklingOrStill;

        return $this;
    }
}
?>