<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');

include_once("../../../Controller/Caluno.php");


$l_aluno = listarAluno();



?>


<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="card-header col-md-12 text-center">
        <h3>Lista de Alunos</h3>
    </div>
</div>

<br><br>

<div class="container">
    <div class="row col-lg-12">
        <nav class="navbar navbar-light bg-white">
            <div class="">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="buscar aluno..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        Pesquisar
                    </button>

                </form>
            </div>
        </nav>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">

                <table class="table table-responsive-md shadow-sm">

                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>

                            <th scope="col">Nome</th>

                            <th scope="col">Telefone</th>

                            <th scope="col">BI</th>

                            <th scope="col">N°Processo</th>

                            <th scope="col">Data</th>

                            <th scope="col">Nacionalidade</th>

                            <th scope="col">Naturalidade</th>

                            <th scope="col">Sexo</th>

                            <th scope="col">Turno</th>

                            <th scope="col">Residência</th>

                            <th scope="col">Classe</th>

                            <th scope="col">Turma</th>

                            <th scope="col">Curso</th>

                            <th scope="col">Acção</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        if (count($l_aluno) > 0) {
                            $i = 1;
                            foreach ($l_aluno as $linha) {

                        ?>

                                <tr>
                                    <th scope="row"><?php echo $i ?>
                                    <td scope="row"><?php echo $linha['nome'] ?></td>
                                    <td scope="row"><?php echo $linha['telefone'] ?></td>
                                    <td scope="row"><?php echo $linha['bi'] ?></td>
                                    <td scope="row"><?php echo $linha['nprocesso'] ?></td>
                                    <td scope="row"><?php echo $linha['data_nascimento'] ?></td>
                                    <td scope="row"><?php echo $linha['nacionalidade'] ?></td>
                                    <td scope="row"><?php echo $linha['naturalidade'] ?></td>
                                    <td scope="row"><?php echo $linha['sexo'] ?></td>
                                    <td scope="row"><?php echo $linha['turno'] ?></td>
                                    <td scope="row"><?php echo $linha['localreside'] ?></td>
                                    <td scope="row"><?php echo $linha['descricao_classe'] ?></td>
                                    <td scope="row"><?php echo $linha['descricao'] ?></td>
                                    <td scope="row"><?php echo $linha['abreviatura'] ?></td>
                                    <th>
                                        <a href="../../../Controller/Caluno.php?acao=eliminar&idaluno=<?php echo $linha['idaluno'] ?>" class="btn btn-primary btn-sm btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>

                                        <a href="" class="btn btn-primary btn-sm ">
                                            <i class="bi bi-file-plus-fill"></i>
                                        </a>
                                    </th>
                                </tr>



                        <?php
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>


                <a href="../../painel/aluno/f_aluno.php" class="btn btn-success btn-md">
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