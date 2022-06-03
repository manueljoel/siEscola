<?php

include_once 'PDOConnection.php';

/**
 * 
 */
class Curso
{
    private $id;
    private $nome;
    private $abreviatura;

    private $pdo;

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

    function constructArg($id, $nome, $abreviatura)
    {
        $this->idCurso = $id;
        $this->nome = $nome;
        $this->abreviatura = $abreviatura;
    }


    function getCurso()
    {
        $sql = "select * from curso";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    public function listarCurso()
    {
        return $this->pdo->conect()->query("SELECT * FROM curso");
    }

    function findCurso($id)
    {
        $sql = "select idcurso, nome, abreviatura from curso where idcurso = $id";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function cursoPorID($id)
    {
        $stmt = $this->pdo->conect()->prepare("SELECT * FROM curso WHERE idcurso=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }


    function inserirCurso()
    {
        $data = [
            'nome' => $this->nome,
            'abreviatura' => $this->abreviatura,
        ];
        $sql = "INSERT INTO curso (nome, abreviatura) VALUES (:nome, :abreviatura)";
        $stmt = $this->pdo->conect()->prepare($sql);
        return $stmt->execute($data);
    }


    function editarCurso()
    {
        $data = [
            'idcurso' => $this->id,
            'nome' => $this->nome,
            'abreviatura' => $this->abreviatura

        ];
        $sql = "UPDATE curso SET nome=:nome, abreviatura=:abreviatura WHERE idcurso=:id";
        $stmt = $this->pdo->conect()->prepare($sql);
        print_r($data);
        //return $stmt->execute($data);
    }



    function eliminarCurso($id)
    {
        return $this->pdo->conect()->prepare("DELETE FROM curso WHERE idcurso=?")->execute([$id]);
    }
}
