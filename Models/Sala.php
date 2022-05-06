<?php

include_once 'connection.php';

/**
 * 
 */
class Sala
{
	private $id;
	private $descricao;
	
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

	function constructArg($id, $descricao){
		$this->idSala = $id;
		$this->descricao =$descricao;
		

		
	}
	
	function getSala(){
		$sql = "select * from sala";
		$ob = new connection();
		$result = $ob->getResultados($sql);
		return $result;
	}
	
	function insertSala(){

		$sql = "INSERT INTO sala (descricao) values('$this->descricao')";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function updateUsuario(){
		$sql = "UPDATE usuario SET '$this->nome', '$this->login', '$this->senha', $this->permissao WHERE idusuario=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteSala(){
		$sql = "DELETE FROM sala WHERE idsala=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}





}



?>