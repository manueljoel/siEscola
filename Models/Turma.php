<?php

include_once 'PDOConnection.php';


/**
 * 
 */
class Turma
{
    private $id;
    private $descricao;
    private $directorTurma;
    private $idclasse;
    private $idsala;
    private $idcurso;
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

    function constructArg($id, $descricao, $directorTurma, $classe, $sala, $curso)
    {
        $this->idturma = $id;
        $this->descricao = $descricao;
        $this->directorTurma = $directorTurma;
        $this->idclasse = $classe;
        $this->idsala = $sala;
        $this->idcurso = $curso;
    }



    public function selecionar()
    {
        $sql = 'SELECT
        T.idturma,
        T.descricao as descricao_turma,
        T.directorTurma, 
        S.numeroSala, 
        Cl.descricao as descricao_classe,
        U.nome as nome_curso
        FROM
            turma T
        INNER JOIN classe Cl ON
            Cl.idclasse = T.idclasse
        INNER JOIN sala S ON
            S.idsala = T.idsala
        INNER JOIN Curso U ON
            U.idcurso = T.idcurso';

        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    function getClasse()
    {
        $sql = "select * from classe";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    function getSala()
    {
        $sql = "select * from sala";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    function getCurso()
    {
        $sql = "select * from curso";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function turmaPorID($id)
    {
        $stmt = $this->pdo->conect()->prepare("SELECT * FROM turma WHERE idturma=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }



    function inserirturma()
    {
        $data = [
            'descricao' => $this->descricao,
            'directorTurma' => $this->directorTurma,
            'classe' => $this->idclasse,
            'sala' => $this->idsala,
            'curso' => $this->idcurso

        ];
        $sql = "INSERT INTO turma (descricao, directorTurma, idclasse, idsala, idcurso) VALUES (:descricao, :directorTurma, :classe, :sala, :curso)";
        $stmt = $this->pdo->conect()->prepare($sql);
        return $stmt->execute($data);
    }

    function deletarturma($id)
    {
        return $this->pdo->conect()->prepare("DELETE FROM turma WHERE idturma=?")->execute([$id]);
    }
}
