<?php

if (file_exists('../Models/Turma.php')) {
    require_once('../Models/Turma.php');
} else {
    require_once('../../../Models/Turma.php');
}

extract($_REQUEST);


if (isset($acao)) {

    switch ($acao) {
        case 'adicionar':
            $ob = new Turma(0, $descricao, $directorTurma, $selclasse, $selsala, $selcurso);
            $ob->inserirturma();
            header('Location: ../view/painel/turma/l_turma.php');
            break;


        case 'eliminar':
            $ob = new Turma();
            $ob->deletarturma($idturma);
            header('Location: ../view/painel/turma/l_turma.php');
            break;
    }
}

function listaturma()
{
    $ob = new Turma();
    return $ob->selecionar();
}

function trazturma($id)
{
    $ob = new Turma();
    return $ob->turmaPorID($id);
}


function trazClasse()
{
    $ob = new Turma();
    return $ob->getClasse();
}

function trazSala()
{
    $ob = new Turma();
    return $ob->getSala();
}

function trazCurso()
{
    $ob = new Turma();
    return $ob->getCurso();
}
