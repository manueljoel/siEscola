<?php


include_once 'PDOConnection.php';


/**
 * 
 */
class Aluno
{
    private $id;
    private $nome;
    private $telefone;
    private $bi;
    private $nprocesso;
    private $data_nascimento;
    private $nacionalidade;
    private $naturalidade;
    private $sexo;
    private $turno;
    private $localreside;
    private $idclasse;
    private $idturma;
    private $idcurso;
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

    function constructArg($id, $nome, $telefone, $bi, $nprocesso, $data_nascimento, $nacionalidade, $naturalidade, $sexo, $turno, $localreside, $classe, $turma, $curso)
    {
        $this->idaluno = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->bi = $bi;
        $this->nprocesso = $nprocesso;
        $this->data_nascimento = $data_nascimento;
        $this->nacionalidade = $nacionalidade;
        $this->naturalidade = $naturalidade;
        $this->sexo = $sexo;
        $this->turno = $turno;
        $this->localreside = $localreside;
        $this->idclasse = $classe;
        $this->idturma = $turma;
        $this->idcurso = $curso;
    }


    function getClasse()
    {
        $sql = "select * from classe";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    public function selecionar()
    {
        $sql = 'SELECT
        A.idaluno,
        A.nome,
        A.telefone,
        A.bi,
        A.nprocesso,
        A.data_nascimento,
        A.nacionalidade,
        A.naturalidade,
        A.sexo,
        A.turno,
        A.localreside,
        C.descricao as descricao_classe,
        T.descricao,
        U.nome as nome_curso,
        U.abreviatura
        FROM
            Aluno A
        INNER JOIN  classe C ON
            A.idclasse = C.idclasse
        INNER JOIN turma T ON
            A.idturma = T.idturma
        INNER JOIN curso U ON
            A.idcurso = U.idcurso;';
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }



    function getTurma()
    {
        $sql = "select * from turma";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }

    function getCurso()
    {
        $sql = "select * from curso";
        $result = $this->pdo->conect()->query($sql);
        return $result->fetchAll();
    }


    function alunoPorID($id)
    {
        $stmt = $this->pdo->conect()->prepare("SELECT * FROM aluno WHERE idaluno=:id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }



    function inserirAluno()
    {
        $data = [
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'bi' => $this->bi,
            'nprocesso' => $this->nprocesso,
            'data_nascimento' => $this->data_nascimento,
            'nacionalidade' => $this->nacionalidade,
            'naturalidade' => $this->naturalidade,
            'sexo' => $this->sexo,
            'turno' => $this->turno,
            'localreside' => $this->localreside,
            'classe' => $this->idclasse,
            'turma' => $this->idturma,
            'curso' => $this->idcurso
        ];
        $sql = "INSERT INTO aluno (nome, telefone, bi, nprocesso, data_nascimento, nacionalidade, naturalidade, sexo, turno, localreside, idclasse, idturma, idcurso ) VALUES (:nome, :telefone, :bi, :nprocesso, :data_nascimento, :nacionalidade, :naturalidade, :sexo, :turno, :localreside, :classe, :turma, :curso)";
        $stmt = $this->pdo->conect()->prepare($sql);
        return $stmt->execute($data);
    }


    function deletarAluno($id)
    {
        return $this->pdo->conect()->prepare("DELETE FROM aluno WHERE idaluno=?")->execute([$id]);
    }
}
