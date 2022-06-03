<?php

if (file_exists('../Models/Usuario.php')) {
	require_once('../Models/Usuario.php');
} else {
	require_once('../../../Models/Usuario.php');
}

extract($_REQUEST);


if (isset($acao)) {

	switch ($acao) {
		case 'adicionar':
			$ob = new Usuario(0, $nome, $email, $senha, $nivel);
			$ob->inserirUsuario();
			header('Location: ../view/login/index.php');
			break;

		case 'eliminar':
			$ob = new Usuario();
			$ob->deletarUsuario($idusuario);
			header('Location: ../view/painel/usuario/lista_u.php');
			break;
	}
}


if (isset($entrar)) {

	switch ($entrar) {

		case 'acessar':
			header('Location: ../view/painel/home.php');
			break;
	}
}


function listaUsuario()
{
	$ob = new Usuario();
	return $ob->selecionar();
}

function trazUsuario($id)
{
	$ob = new Usuario();
	return $ob->usuarioPorID($id);
}


function trazPermissao()
{
	$ob = new Usuario();
	return $ob->getPermissao();
}
