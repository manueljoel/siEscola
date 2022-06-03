<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<?php
include_once('../../../Controller/Cclasse.php');


$ciclo = trazCiclo();

?>


<div class="container py-5">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
            <div class="alert alert-primary" role="alert">
                cadastrar classes
            </div>
            <form method="post" action="../../../Controller/Cclasse.php">
                <div class="form-group">
                    <input type="text" name="acao" value="adicionar" style="display: none;">
                    <label for="descricao">Classe:</label>
                    <input type="number" class="form-control" name="descricao" id="descricao" placeholder="*digite a classe" required>
                </div>


                <div class="form-group">
                    <label for="selciclo" class="bmd-label-floating">Ciclo:</label>
                    <select class="input sm form-control" name="selciclo" id="selciclo">
                        <?php foreach ($ciclo as $linha) { ?>
                            <option value="<?php echo $linha['idciclo'] ?>"><?php echo $linha['descricao'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <br><br>

                <button type="submit" name="bt_s" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i>
                    Salvar
                </button>

                <a href="../../painel/classe/l_classe.php" class="btn btn-primary btn-sm">ver registros</a>
            </form>
        </div>
    </div>
</div>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>