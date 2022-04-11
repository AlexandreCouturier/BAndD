<?php 
echo "dans la class dairyProducts";
require_once "DAO.php";

class DairyProducts {
    private $idDairyProducts;
    private $productName;
    private $animalOrPlant;
    private $state;
    private $fermentation;

    public function __construct($productName, $animalOrPlant, $state, $fermentation, $idDairyProducts = NULL)
    {
        $this->productName = $productName;
        $this->animalOrPlant = $animalOrPlant;
        $this->state = $state;
        $this->fermentation = (int)$fermentation;
        $this->idDairyProducts = $idDairyProducts;
    }




    public static function getDairyProductsById($idDairyProducts)
    {
        $dao = new DAO();
        $dbh = $dao->getDbh();
        
        $stmt = $dbh->prepare("SELECT * FROM dairyProducts WHERE idDairyProducts=:iddairyproducts;");
        $stmt->bindParam(":iddairyproducts", $idDairyProducts);
        
        $stmt->execute();

        return $stmt->fetch();
    }

    public function updateDairyProducts(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE dairyProducts SET productName=:add, animalOrPlant=:zip, state=:city,fermentation=:quatre  WHERE idDairyProducts=:idDairyProducts");

        $stmt->bindParam(':add', $this->productName);
        $stmt->bindParam(':zip',$this->animalOrPlant);
        $stmt->bindParam(':idDairyProducts',$this->idDairyProducts);
        $stmt->bindParam(':city',$this->state);
        $stmt->bindParam(':quatre',$this->fermentation);
        
      return $stmt->execute();
    }

    public static function deleteDairyProductsById($idDairyProducts){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM dairyProducts WHERE idDairyProducts = :idDairyProducts;");
         $stmt->bindParam("idDairyProducts",$idDairyProducts);
         $stmt->execute();
 
        
         
    }

    public static function getAllDairyProducts(){
        $dao = new DAO();
        echo "Dans la DAO de fonction get All ";
        $dbh = $dao->getDbh();
        echo "Dans DBH de fonction get All ";
        $stmt = $dbh->prepare("SELECT * FROM dairyProducts;");
        echo "Dans stmt de fonction get All ";
        $stmt->execute();
        echo "Dans l'execute de fonction get All ";
        $allRows = $stmt->fetchAll();
        echo "Dans la DAO de fonction get All ";
        
        return $allRows;
    }

    public function createDairyProducts(){
        echo "dans la fonction createDrink";
        $dao = new DAO();
        echo "Dans la DAO de fonction create ";
        $dbh = $dao->getDbh();
        echo "Dans dbh de fonction create ";
       $stmt = $dbh->prepare("INSERT INTO dairyProducts (productName, animalOrPlant, state, fermentation) VALUES (:un, :deux, :trois, :quatre);");
       echo "Dans la stmt de fonction create ";
        $stmt->bindParam(':un', $this->productName);
        $stmt->bindParam(':deux', $this->animalOrPlant);
        $stmt->bindParam(':trois', $this->state);
        $stmt->bindParam(':quatre', $this->fermentation);
        var_dump($this->productName);
        var_dump($this->animalOrPlant);
        var_dump($this->state);
        var_dump($this->fermentation);
        $stmt->execute();
    }

}

?>