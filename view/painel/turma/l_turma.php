<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once("../../../Controller/Cturma.php");



$l_turma = listaturma();

?>


<div class="col-md-12">
    <div class="card-header col-md-12 text-center">
        <h4>Lista das Turmas</h4>
    </div>
</div>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Ano escolar</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Sala</th>
                        <th scope="col">Director de Turma</th>


                        <th scope="col">Acção</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i = 1;
                    foreach ($l_turma as $linha) {



                    ?>

                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $linha['descricao_classe'] ?></td>
                            <td><?php echo $linha['nome_curso'] ?></td>
                            <td><?php echo $linha['descricao_turma'] ?></td>
                            <td><?php echo $linha['numeroSala'] ?></td>
                            <td><?php echo $linha['directorTurma'] ?></td>


                            <th>
                                <a href="../../../Controller/Cturma.php?acao=eliminar&idturma=<?php echo $linha['idturma'] ?>" class="btn btn-primary btn-sm btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </a>

                                <a href="" class="btn btn-primary btn-sm ">
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


            <a href="../../painel/turma/f_turma.php" class="btn btn-success">
                <i class="bi bi-file-plus-fill"></i>Adicionar
            </a>
        </div>
    </div>

</div>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>