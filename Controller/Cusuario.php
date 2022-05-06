<?php


require_once "../model/Usuario.php";
extract($_REQUEST);

if (isset($acao)){
	
	switch ($acao){
		case 'adicionar':
      
		
			$ob = new Usuario(0,$nome,$login,$senha,$permissao);
			$ob->insertUsuario();
			header('Location: ../view/main.php?pagina=list_user');
			

			break;
		case 'alterar':
			# code...
			break;
			case 'eliminar':
			$ob = new Usuario ();
			$ob->deleteUsuario($id_usu);
			header('Location: ../view/main.php?pagina=list_user');
			break;
		
	}

}
function trazUsuario(){
	$ob = new Usuario();
	return $ob->GetUsuario();	
  } 
function trazPermissao(){
  $ob = new Usuario();
  return $ob->GetPermissao();	
}


?>