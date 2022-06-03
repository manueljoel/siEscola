<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once("../../../Controller/Ccurso.php");

$l_curso = listaCurso();


?>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="card-header col-md-12 text-center">
        <h4>Lista dos Cursos</h4>
    </div>
</div>

<br><br>

<div class="content">
    <div class="container">
        <div class=" mt-2">
            <div class="col-lg-12">

                <div class="row mt-2">
                    <div class="col-md-12">

                        <table class="table shadow-sm">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>

                                    <th>Nome</th>

                                    <th>Abreviatura</th>

                                    <th>Acçōes</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $i = 1;
                                foreach ($l_curso as $linha) {
                                ?>

                                    <tr>
                                        <th scope="row"><?php echo $i ?>
                                        <td><?php echo $linha['nome'] ?></td>
                                        <td><?php echo $linha['abreviatura'] ?></td>
                                        <th>
                                            <a href="../../../Controller/Ccurso.php?acao=eliminar&idcurso=<?php echo $linha['idcurso'] ?>" class="btn btn-primary btn-sm btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>

                                            <a href="../../painel/curso/editar_curso.php?&idcurso=<?php echo $linha['idcurso'] ?>" class="btn btn-primary btn-sm ">
                                                <i class="bi bi-pen-fill"></i>
                                            </a>
                                        </th>
                                    </tr>



                                <?php
                                    $i++;
                                }

                                ?>
                            </tbody>
                        </table>


                        <a href="../../painel/curso/f_curso.php" class="btn btn-success">
                            <i class="bi bi-file-plus-fill"></i> Adicionar
                        </a>
                    </div>
                </div>

            </div>

            <?php
            include_once('../../../view/painel/layouts/footer.php');
            ?>