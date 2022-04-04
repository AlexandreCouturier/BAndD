<?php
echo "coucou";
class DAO{

    private $host="localhost";
    private $port = "8889";
    private $dbname ="BAndD";
    private $charset = "UTF8";
    private $user = "root";
    private $password= "root";
    private $dsn;
    private $dbh;

    public function __construct()
    {
        $this->dsn="mysql:host=$this->host;dbname=$this->dbname;port=$this->port;charset=$this->charset";
            try{
                echo "avant la connexion a la BDD";
                $this->dbh =new PDO($this->dsn,$this->user,$this->password);
                echo"connecté a la bdd BAndD";
            }catch(PDOException $e){
                $e->getMessage();
                echo"pas connecté";

            }
    }

    /**
     * Get the value of dbh
     */ 
    public function getDbh()
    {
        return $this->dbh;
    }
}
?>
