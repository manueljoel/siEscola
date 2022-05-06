<?php

include_once 'connection.php';

/**
 * 
 */
class Usuario
{
	private $id;
	private $nome;
	private $login;
	private $senha;
	private $permissao;
	
	function __construct()
	{
		$a = func_get_args();
		$i = func_num_args();
		if ($i>0) {
			call_user_func_array(array($this,'constructArg'),$a);
		}
		else{
			call_user_func_array(array($this,'constructEmpty'),$a);
		}
	}

// Constructor vazio!!
	function constructEmpty(){

	}

	//Constructor de preenchimento. 

	function constructArg($id, $nome, $login, $senha, $permissao){
		$this->idfuncionario = $id;
		$this->nome =$nome;
		$this->login =$login;
		$this->senha =$senha;
		$this->permissao =$permissao;

		
	}
	function getPermissao(){
		$sql = "select * from permissao";
		$ob = new connection();
		$result = $ob->getResultados($sql);
		return $result;
	}
	function getUsuario(){
		$sql = "select * from usuario";
		$ob = new connection();
		$result = $ob->getResultados($sql);
		return $result;
	}
	
	function insertUsuario(){

		$sql = "INSERT INTO usuario (nome,login,senha,idpermissao) values('$this->nome', '$this->login', '$this->senha',$this->permissao)";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function updateUsuario(){
		$sql = "UPDATE usuario SET '$this->nome', '$this->login', '$this->senha', $this->permissao WHERE idusuario=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteUsuario($id){
		$sql = "DELETE FROM usuario WHERE idusuario=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}





}



?>