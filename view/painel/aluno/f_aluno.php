<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<?php
include_once('../../../Controller/Caluno.php');


$classe = trazClasse();
$turma = trazTurma();
$curso = trazCurso();




?>


<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
  <div class="card-header px-lg-5 col-md-12">
    <h4>Inserir alunos</h4>
  </div>

  <br>
  <br>
  <div class="content">
    <div class="container">
      <div class="card-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <form method="post" action="../../../Controller/Caluno.php">
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nome Completo:</label>
                      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" required>
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Telefone:</label>
                      <input type="text" class="form-control" name="telefone" id="telefone" maxlength="40" placeholder="telefone" required>
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nº do bilhete:</label>
                      <input type="text" class="form-control" name="bi" id="bi" placeholder="..A143" required>
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>
                </div>

                <div class="row py-3">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nº do Processo:</label>
                      <input type="text" class="form-control" name="nprocesso" id="nprocesso" placeholder="****" required>
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Data de Nascimento:</label>
                      <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="Ex: " required>
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nacionalidade:</label>
                      <select class="form-control" name="nacionalidade" id="nacionalidade" required>
                        <option value="">Selecione aqui</option>
                        <option value="Angolana">Angolana</option>
                        <option value="Portuguesa">Portuguesa</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Naturalidade:</label>
                      <input type="text" class="form-control" name="naturalidade" id="naturalidade" maxlength="30" placeholder="Naturalidade" required="">
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>
                </div>

                <div class="row py-2">

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Sexo:</label>
                      <select class="form-control" name="sexo" id="sexo" required>
                        <option value="">Selecione aqui</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femnino</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Turno:</label>
                      <select class="form-control" name="turno" id="turno" required>
                        <option value="">Selecione aqui</option>
                        <option value="manhã">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                      </select>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Local de Residencia:</label>
                      <textarea class="form-control" name="localreside" id="localreside" maxlength="30" placeholder="Bairro" required rows="1"></textarea>
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                    </div>
                  </div>
                </div>

                <div class="row py-2">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="selclasse" class="bmd-label-floating">Classe:</label>
                      <select class="form-control" name="selclasse" id="selclasse" required>
                        <?php foreach ($classe as $linha) { ?>
                          <option value="<?php echo $linha['idclasse'] ?>"><?php echo $linha['descricao'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="selturma" class="bmd-label-floating">Turma:</label>
                      <select class="form-control" name="selturma" id="selturma" required>
                        <?php foreach ($turma as $linha) { ?>
                          <option value="<?php echo $linha['idturma'] ?>"><?php echo $linha['descricao'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="selcurso" class="bmd-label-floating">Curso:</label>
                      <select class="form-control" name="selcurso" id="selcurso" required>
                        <?php foreach ($curso as $linha) { ?>
                          <option value="<?php echo $linha['idcurso'] ?>"><?php echo $linha['nome'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <br><br><br>



                <div class="card-footer-fluid text-center py-2">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                  <button type="submit" name="bt_s" class="btn btn-success">
                    Salvar
                  </button>

                  <a href="../../painel/aluno/l_aluno.php" type="button" class="btn btn-dark">
                    <strong>ver registos</strong>
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php
include_once('../../../view/painel/layouts/footer.php');
?>