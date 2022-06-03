<?php

if (file_exists('../Models/Classe.php')) {
    require_once('../Models/Classe.php');
} else {
    require_once('../../../Models/Classe.php');
}

extract($_REQUEST);


if (isset($acao)) {

    switch ($acao) {
        case 'adicionar':
            $ob = new Classe(0, $descricao, $selciclo);
            $ob->inserirclasse();
            header('Location: ../view/painel/classe/l_classe.php');
            break;


        case 'eliminar':
            $ob = new Classe();
            $ob->deletarClasse($idclasse);
            header('Location: ../view/painel/classe/l_classe.php');
            break;
    }
}

function listaclasse()
{
    $ob = new Classe();
    return $ob->selecionar();
}

function trazclasse($id)
{
    $ob = new   Classe();
    return $ob->classePorID($id);
}


function trazCiclo()
{
    $ob = new Classe();
    return $ob->getCiclo();
}
