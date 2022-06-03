<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once('../../../Controller/Cturma.php');

$classe = trazClasse();
$sala = trazSala();
$curso = trazCurso();

?>

<div class="container">
  <div class="row">
    <div class="row mt-5">

      <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
        <div class="alert alert-primary" role="alert">
          cadastrar Turmas
        </div>
        <form method="post" action="../../../Controller/Cturma.php">

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="acao" value="adicionar" style="display: none;">
                <label for="descricao">Turma</label>
                <input type="text" class="form-control" name="descricao" id="descricao" placeholder="*digite a turma" required>
              </div>

              <div class="col-md-6">
                <input type="text" name="acao" value="adicionar" style="display: none;">
                <label for="directorTurma">Diretor de turma:</label>
                <input type="text" class="form-control" name="directorTurma" id="directorTurma" placeholder="*digite" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="acao" value="adicionar" style="display: none;">
                <label for="numeroSala">Sala</label>
                <select class="form-control" name="selsala" id="selsala" required>
                  <?php foreach ($sala as $linha) { ?>
                    <option value="<?php echo $linha['idsala'] ?>"><?php echo $linha['numeroSala'] ?></option>
                  <?php } ?>
                </select>
              </div>


              <div class="col-md-6">
                <input type="text" name="acao" value="adicionar" style="display: none;">
                <label for="selclasse">Ano escolar:</label>
                <select class="form-control" name="selclasse" id="selclasse" required>
                  <?php foreach ($classe as $linha) { ?>
                    <option value="<?php echo $linha['idclasse'] ?>"><?php echo $linha['descricao'] ?></option>
                  <?php } ?>
                </select>
              </div>


              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="acao" value="adicionar" style="display: none;">
                    <label for="selcurso">Curso:</label>
                    <select class="form-control" name="selcurso" id="selcurso" required>
                      <?php foreach ($curso as $linha) { ?>
                        <option value="<?php echo $linha['idcurso'] ?>"><?php echo $linha['nome'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <br><br>
            <button type="submit" name="bt_s" class="btn btn-success btn-sm">
              <i class="fa fa-dot-circle-o"></i>
              Salvar
            </button>
            <a href="../../painel/turma/l_turma.php" class="btn btn-primary btn-sm">ver registros</a>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include_once('../../../view/painel/layouts/footer.php');
?>