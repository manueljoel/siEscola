<?php


if (file_exists('../Models/Curso.php')) {
    require_once('../Models/Curso.php');
} else {
    require_once('../../../Models/Curso.php');
}

extract($_REQUEST);


if (isset($acao)) {

    switch ($acao) {
        case 'adicionar':
            $ob = new Curso(0, $nome, $abreviatura);
            $ob->inserirCurso();
            header('Location: ../view/painel/curso/l_curso.php');
            break;

        case 'editar':
            $ob = new Curso($idcurso, $nome, $abreviatura);
            $ob->editarCurso();
            //header('Location: ../view/painel/curso/l_curso.php');
            break;

        case 'eliminar':
            $ob = new Curso();
            $ob->eliminarCurso($idcurso);
            header('Location: ../view/painel/curso/l_curso.php');
            break;
    }
}

function listaCurso()
{
    $ob = new Curso();
    return $ob->listarCurso();
}

function trazCurso($id)
{
    $ob = new Curso();
    return $ob->findCurso($id);
}
