<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');

include_once('../../../Controller/Ccurso.php');

?>



<div class="container py-5">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
            <div class="alert alert-primary" role="alert">
                Editar Cursos
            </div>

            <form method="post" action="../../../Controller/Ccurso.php">
                <div class="row">
                    <div class="form-group">
                        <label for="descricao">nome do curso</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="*digite o curso" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="descricao">Abreviatura</label>
                        <input type="text" class="form-control" name="abreviatura" id="abreviatura" value="" placeholder=" *" required>
                    </div>
                </div>

                <br>
                <button type="submit" name="bt_s" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i>
                    Salvar
                </button>
                <input type="hidden" name="acao" value="editar" style="display: none;">
                <input type="hidden" name="idcurso" value="" style="display: none;">
                <a href="../../painel/curso/l_curso.php" class="btn btn-primary btn-sm">ver registros</a>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>