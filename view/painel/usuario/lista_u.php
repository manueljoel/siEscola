<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once("../../../Controller/Cusuario.php");


$l_usuario = listausuario();
?>


<div class="col-md-12">
    <div class="card-header col-md-12 text-center">
        <h3>Lista de Alunos</h3>
    </div>
</div>
</div>

<div class="content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">

                <table class="table shadow-sm">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>

                            <th>Enail</th>

                            <th>Nome</th>

                            <th>permissāo</th>

                            <th>Alterações</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $i = 1;
                        foreach ($l_usuario as $linha) {



                        ?>

                            <tr>
                                <th scope="row"><?php echo $i ?>

                                <td scope=""><?php echo $linha['nome_usuario'] ?></td>
                                <td scope="row"><?php echo $linha['email'] ?></td>
                                <td scope="row"><?php echo $linha['descricao_permissao'] ?></td>


                                <th>
                                    <a href="../../../Controller/Cusuario.php?acao=eliminar&idusuario=<?php echo $linha['idusuario'] ?>" class="btn btn-primary btn-sm btn-danger">
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


                <a href="../../painel/usuario/usuario.php" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Adicionar
                </a>
            </div>
        </div>

    </div>
</div>

</div>


<?php
include_once('../../../view/painel/layouts/footer.php');
?>