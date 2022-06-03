<?php

include_once 'PDOConnection.php';


/**
 * 
 */
class Classe
{
    private $id;
    private $descricao;
    private $idciclo;
    private $pdo;
    private $ob;

    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if ($i > 0) {
            call_user_func_array(array($this, 'constructArg'), $a);
        }
        $this->pdo = new PDOConnection();
    }



    //Constructor de preenchimento. 

    function constructArg($id, $descricao, $ciclo)
    {
        $this->idclasse = $id;
        $this->descricao = $descricao;
        $this->idciclo = $ciclo;
    }



    public function selecionar()
    {
        $sql = 'SELECT
        C.idclasse,
        C.descricao as descricao_classe,
        Ci.descricao as descricao_ciclo
        FROM
            Classe C
        INNER JOIN  ciclo Ci ON
            Ci.idciclo = C.idciclo';
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }



    function getCiclo()
    {
        $sql = "select * from ciclo";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function classePorID($id)
    {
        $stmt = $this->pdo->conect()->prepare("SELECT * FROM classe WHERE idclasse=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }



    function inserirclasse()
    {
        $data = [
            'descricao' => $this->descricao,
            'ciclo' => $this->idciclo
        ];
        $sql = "INSERT INTO classe (descricao, idciclo) VALUES (:descricao, :ciclo)";
        $stmt = $this->pdo->conect()->prepare($sql);
        return $stmt->execute($data);
    }

    function deletarClasse($id)
    {
        return $this->pdo->conect()->prepare("DELETE FROM classe WHERE idclasse=?")->execute([$id]);
    }
}
