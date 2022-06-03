<?php

include_once 'PDOConnection.php';


/**
 * 
 */
class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $permissao;
	private $pdo;




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

	function constructArg($id, $nome, $email, $senha, $permissao)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->idpermissao = $permissao;
	}

	function getPermissao()
	{
		$sql = "select * from permissao";
		$result = $this->pdo->conect()->query($sql);
		return $result->fetchAll();
	}


	public function selecionar()
	{
		$sql = 'SELECT
        U.idusuario,
        U.nome as nome_usuario,
        U.email,
		U.senha,
		P.descricao as descricao_permissao
        FROM
            usuario U
        INNER JOIN  permissao P ON
            P.idpermissao = U.idpermissao';
		$result = $this->pdo->conect()->query($sql);
		return $result->fetchAll();
	}

	function getUsuario()
	{
		$sql = "select * from usuario";
		$result = $this->pdo->conect()->query($sql);
		return $result->fetchAll();
	}



	public function listarUsuario()
	{
		return $this->pdo->conect()->query("SELECT * FROM usuario");
	}


	function usuarioPorID($id)
	{
		$stmt = $this->pdo->conect()->prepare("SELECT * FROM usuario WHERE idusuario=:id");
		$stmt->execute(['id' => $id]);
		return $stmt->fetch();
	}



	function inserirUsuario()
	{
		$data = [
			'nome' => $this->nome,
			'email' => $this->email,
			'senha' => $this->senha,
			'permissao' => $this->idpermissao
		];
		$sql = "INSERT INTO usuario (nome, email, senha, idpermissao) VALUES (:nome, :email, md5(:senha), :permissao)";
		$stmt = $this->pdo->conect()->prepare($sql);
		return $stmt->execute($data);
	}

	function deletarUsuario($id)
	{
		return $this->pdo->conect()->prepare("DELETE FROM usuario WHERE idusuario=?")->execute([$id]);
	}


	public function comprovar($email, $senha)
	{
		$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
		$sql = $this->pdo->conect()->prepare($sql);
		$sql->bindValue("email", $email);
		$sql->bindValue("senha", $senha);
		$sql->execute();
	}
}
