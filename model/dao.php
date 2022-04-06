<?php
echo "Dans la DAO avant la class ";
class Dao{

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
        echo "avant le this dsn et la phrase de connexion";
        $this->dsn="mysql:host=$this->host:$this->port;dbname=$this->dbname;charset=$this->charset";
        echo "apres l";
            try{
                echo "dans le try avant le dbh";
                $this->dbh =  new PDO($this->dsn,$this->user,$this->password);
                echo "dans le try apres le dbh est connecté"; 
            }catch(PDOException $e){
                echo "non connecté";
                $e->getMessage();
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

