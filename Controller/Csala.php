<?php

if (file_exists('../Models/Sala.php')) {
    require_once('../Models/Sala.php');
} else {
    require_once('../../../Models/Sala.php');
}

extract($_REQUEST);


if (isset($acao)) {

    switch ($acao) {
        case 'adicionar':
            $ob = new Sala(0, $numeroSala);
            $ob->inserirSala();
            header('Location: ../view/painel/sala/l_sala.php');
            break;


        case 'eliminar':
            $ob = new Sala();
            $ob->deletarSala($idsala);
            header('Location: ../view/painel/sala/l_sala.php');
            break;
    }
}

function listaSala()
{
    $ob = new Sala();
    return $ob->listarSala();
}

function trazSala($id)
{
    $ob = new Sala();
    return $ob->salaPorID($id);
}
