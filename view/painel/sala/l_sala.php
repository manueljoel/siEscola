<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once("../../../Controller/Csala.php");

$l_sala = listaSala();

?>



<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="card-header col-md-12 text-center">
        <h4>Lista das Salaas</h4>
    </div>
</div>

<br><br>

<div class="content">
    <div class="container">
        <div class=" ">
            <div class="col-md-12">


                <table class="table shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Sala</th>
                            <th scope="col">Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $i = 1;
                        foreach ($l_sala as $linha) {



                        ?>

                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td><?php echo $linha['numeroSala'] ?></td>


                                <th>
                                    <a href="../../../Controller/Csala.php?acao=eliminar&idsala=<?php echo $linha['idsala'] ?>" class="btn btn-primary btn-sm btn-danger">
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


                <a href="../../painel/sala/f_sala.php" class="btn btn-success">
                    <i class="bi bi-file-plus-fill"></i> Adicionar
                </a>
            </div>
        </div>

    </div>
    <?php
    include_once('../../../view/painel/layouts/footer.php');
    ?>