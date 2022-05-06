<?php

include_once 'connection.php';

/**
 * 
 */
class Curso
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
		$this->idTurma = $id;
		$this->descricao =$descricao;
		

		
	}
	
	function getCurso(){
		$sql = "select * from curso";
		$ob = new connection();
		$result = $ob->getResultados($sql);
		return $result;
	}
	
	function insertCurso(){

		$sql = "INSERT INTO curso (descricao) values('$this->descricao')";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function updateUsuario(){
		$sql = "UPDATE usuario SET '$this->nome', '$this->login', '$this->senha', $this->permissao WHERE idusuario=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}

	function deleteTurma(){
		$sql = "DELETE FROM sala WHERE idsala=$this->id";
		$ob = new connection();
		$ob->executeQuery($sql);
	}





}



?>