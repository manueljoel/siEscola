<?php


require_once "../model/Curso.php";
extract($_REQUEST);

if (isset($acao)){
	
	switch ($acao){
		case 'adicionar':
      
		
			$ob = new Curso(0,$descricao);
			$ob->insertCurso();
			header('Location: ../view/main.php?pagina=l_curso');
			

			break;
		case 'alterar':
			# code...
			break;
			case 'eliminar':
			$ob = new Sala();
			$ob->deleteSala($id);
			header("Location: ../view/main.php?pagina=l_sala");
			break;
		
	}

}
function trazCurso(){
	$ob = new Curso();
	return $ob->GetCurso();	
  } 



?>