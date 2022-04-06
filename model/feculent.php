<?php
echo "fec";
include($_SERVER['DOCUMENT_ROOT']."/BAndD/model/dao.php");
echo "Dans le fichier deculent avant la class " ;
class Feculent
{

    private $idFeculent;
    private $productName;
    private $originPlant;
    private $transform;
    private $cooked;
    
    
   
    public function __construct($productName, $originPlant, $transform, $cooked)
    {
        $this->productName = $productName;
        $this->originPlant = $originPlant;
        $this->transform = $transform;
        $this->cooked = $cooked;
        
    }

    /*public static function getAllFeculent()
    {

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM Feculent;");
        $rows = $stmt->fetchAll();

        return $rows;

        
    }*/
    
    public static function getAllFeculent(){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM Feculent;");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function createFeculent()
    {

        $request = "INSERT INTO Feculent (productName, originPlant, transform, cooked,) 
            VALUES (:productName, :originPlant, :transform, :cooked)";

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare($request);

        $stmt->bindParam(":productName", $this->productName);
        $stmt->bindParam(":originPlant", $this->originPlant);
        $stmt->bindParam(":transform", $this->transform);
        $stmt->bindParam(":cooked", $this->cooked);
   

        $stmt->execute();
    }

    public static function getFeculentById($idFeculent)
    {

        $request = "SELECT * FROM Feculent WHERE IdFeculent = :idFeculent";

        $Dao = new Dao();
        $dbh = $Dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":idFeculent", $idFeculent);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

   

    public function updateFeculent(){
        $Dao = new Dao();
        $dbh =$Dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Feculent SET (productName, originPlant, transform, cooked,) 
        VALUES (:productName, :originPlant, :transform, :cooked);");
       

       $stmt->bindParam(":productName", $this->productName);
       $stmt->bindParam(":originPlant", $this->originPlant);
       $stmt->bindParam(":transform", $this->transform);
       $stmt->bindParam(":cooked", $this->cooked);
        
      return $stmt->execute();
    }




    public static function deleteFeculentById($idFeculent){
        $Dao = new Dao();
        $dbh = $Dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Feculent WHERE idFeculent = :idFeculent;");
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
