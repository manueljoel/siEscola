<?php

include_once 'PDOConnection.php';


/**
 * 
 */
class Sala
{
    private $id;
    private $numeroSala;
    private $pdo;
    private $ob;

    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if ($i > 0) {
            call_user_func_array(array($this, 'constructArg'), $a);
        } else {
            call_user_func_array(array($this, 'constructEmpty'), $a);
        }
        $this->pdo = new PDOConnection();
    }

    // Constructor vazio!!
    function constructEmpty()
    {
    }

    //Constructor de preenchimento. 

    function constructArg($id, $numeroSala)
    {
        $this->idsala = $id;
        $this->numeroSala = $numeroSala;
    }



    public function listarSala()
    {
        return $this->pdo->conect()->query("SELECT * FROM sala");
    }



    function salaPorID($id)
    {
        $stmt = $this->pdo->conect()->prepare("SELECT * FROM sala WHERE idsala=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }



    function inserirSala()
    {
        $data = [
            'numeroSala' => $this->numeroSala
        ];
        $sql = "INSERT INTO sala (numeroSala) VALUES (:numeroSala)";
        $stmt = $this->pdo->conect()->prepare($sql);
        return $stmt->execute($data);
    }

    function deletarSala($id)
    {
        return $this->pdo->conect()->prepare("DELETE FROM sala WHERE idsala=?")->execute([$id]);
    }
}
