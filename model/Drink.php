<?php 
echo "dans la class drink";
require_once "DAO.php";

class Drink {
    private $idDrink;
    private $productName;
    private $hotOrCold;
    private $sparklingOrStill;

    public function __construct($productName, $hotOrCold, $sparklingOrStill, $idDrink = NULL){
        $this->productName = $productName;
        $this->hotOrCold = $hotOrCold;
        $this->sparklingOrStill = $sparklingOrStill;
        $this->idDrink = $idDrink;
    }

    public function createDrink(){
        echo "dans la fonction createDrink";
        $dao = new DAO();
        $dbh = $dao->getDbh();
       
       $stmt = $dbh->prepare("INSERT INTO drink (productName, hotOrCold, sparklingOrStill) VALUES (:un, :deux, :trois);");
       
       $stmt->bindParam(':un', $this->productName);
        $stmt->bindParam(':deux', $this->hotOrCold);
        $stmt->bindParam(':trois', $this->sparklingOrStill);
        $stmt->execute();
    }

    public static function getAllDrink(){
        echo "avant la DAO get allDrink";
        $dao = new DAO();
        echo "Apres la DAO getAll Drink";
        $dbh = $dao->getDbh();
        echo "la dbh qui prend en parametre dao "; 
        $stmt = $dbh->prepare("SELECT * FROM drink;");
        echo "requete SQL SELECT";
        $stmt->execute();
        echo "stmt qui s'execute";
        $allRows = $stmt->fetchAll();
        echo "allRows qui fetchAll";
        
        return $allRows;
    }

        public static function getDrinkById($idDrink){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        
        $stmt = $dbh->prepare("SELECT * FROM drink WHERE idDrink=:iddrink;");
        $stmt->bindParam(":iddrink", $idDrink);
        
        $stmt->execute();

        return $stmt->fetch();
    }

    public function updateDrink(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE drink SET productName=:add, hotOrCold=:zip, sparklingOrStill=:city WHERE idDrink=:iddrink");

        $stmt->bindParam(':add', $this->productName);
        $stmt->bindParam(':zip',$this->hotOrCold);
        $stmt->bindParam(':iddrink',$this->idDrink);
        $stmt->bindParam(':city',$this->sparklingOrStill);
        
      return $stmt->execute();
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