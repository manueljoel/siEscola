<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once("../../../Controller/Cclasse.php");

$l_classe = listaclasse();

?>



<div class="col-md-12">
    <div class="card-header col-md-12 text-center">
        <h4>Lista das Classes</h4>
    </div>
</div>

<br><br>

<div class="content">
    <div class="container">
        <div class=" mt-2">
            <div class="col-md-12">
                <table class="table shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Ciclo</th>
                            <th scope="col">Acção</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $i = 1;
                        foreach ($l_classe as $linha) {



                        ?>

                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td><?php echo $linha['descricao_classe'] ?></td>
                                <td><?php echo $linha['descricao_ciclo'] ?></td>


                                <th>
                                    <a href="../../../Controller/Cclasse.php?acao=eliminar&idclasse=<?php echo $linha['idclasse'] ?>" class="btn btn-primary btn-sm btn-danger">
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


                <a href="../../painel/classe/f_classe.php" class="btn btn-success">
                    <i class="bi bi-file-plus-fill"></i> Adicionar
                </a>
            </div>
        </div>

    </div>
    <?php
    include_once('../../../view/painel/layouts/footer.php');
    ?>