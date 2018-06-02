<?php

class DBHandler {

    private $serverName;
    private $username;
    private $password;
    private $dbname;
    //Another property for PDO
    private $charset;

    public function connect(){
        $this->serverName = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "oopexample";
        // For PDO
        $this->charset = "utf8mb4";

        // For myslqi
        /*$conn = new mysqli($this->serverName,$this->username,
                            $this->password,$this->dbname);*/

        // For PDO
        try {
            // Data source name
            $dsn = "mysql:host=".$this->serverName.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username,$this->password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }

    }

}

?>