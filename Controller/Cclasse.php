<?php


require_once "../model/Classe.php";
extract($_REQUEST);

if (isset($acao)){
	
	switch ($acao){
		case 'adicionar':
      
		
			$ob = new Classe(0,$descricao);
			$ob->insertClasse();
			header('Location: ../view/main.php?pagina=l_classe');
			

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
function trazClasse(){
	$ob = new Classe();
	return $ob->GetClasse();	
  } 



?>