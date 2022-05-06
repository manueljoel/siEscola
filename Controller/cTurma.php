<?php


require_once "../model/Turma.php";
extract($_REQUEST);

if (isset($acao)){
	
	switch ($acao){
		case 'adicionar':
      
		
			$ob = new Turma(0,$descricao);
			$ob->insertTurma();
			header('Location: ../view/main.php?pagina=l_turma');
			

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
function trazTurma(){
	$ob = new Turma();
	return $ob->GetTurma();	
  } 



?>