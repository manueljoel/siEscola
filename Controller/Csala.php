<?php


require_once "../model/Sala.php";
extract($_REQUEST);

if (isset($acao)){
	
	switch ($acao){
		case 'adicionar':
      
		
			$ob = new Sala(0,$descricao);
			$ob->insertSala();
			header('Location: ../view/main.php?pagina=l_sala');
			

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
function trazSala(){
	$ob = new Sala();
	return $ob->GetSala();	
  } 



?>