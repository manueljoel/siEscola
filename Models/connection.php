<?php

class connection{

    private $host;
    private $user;
    private $databaseName;
    private $password;
    private $port;
    private $conn;

    public function __construct(){
        
        $this->host = 'localhost';
        $this->user = 'root';
        $this->databaseName = 'db_propinas';
        $this->password = '';
        $this->port = 3306;
        $this->conn = false;

        $this->connect();
    }

    public function connect(){
        
        if(!$this->conn){
            $this->conn = mysqli_connect($this->host,$this->user,$this->password,$this->databaseName, $this->port);

            if(!$this->conn){
                echo 'não foi possível conectar';
                die();
            }
            else{
               # echo 'conexão bem sucedida';
            }
        }

        return $this->conn;
    }

    public function executeQuery($sql){
        
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function getResultados($sql){
       
        $result = $this->executeQuery($sql);
        $registos = array();

       while($result != false && $linha = mysqli_fetch_assoc($result)){
            $registos[] = $linha;
       }

       return $registos;

    }


}


?>