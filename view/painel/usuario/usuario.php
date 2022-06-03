<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');
?>

<?php
include_once('../../../Controller/Cusuario.php');


$permissao = trazPermissao();


?>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
  <div class="card-header col-md-12 px-5">
    <h4>Inserir Usuário</h4>
  </div>

  <br><br><br>
  <!-- End Navbar -->
  <div class="content">
    <div class="container">
      <div class="row-fluid">
        <div class="card-fluid">
          <div class="card-body">
            <form method="post" action="../../../Controller/Cusuario.php">
              <div class="col-md-12">
                <div class="row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                      <label class="bmd-label-floating" name="nome">Nome de Usuário:</label>
                      <input type="text" name="nome" id="nome" placeholder="digite o seu nome..." class="form-control" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                      <label class="bmd-label-floating" name="email" )>Email (obrigatório):</label>
                      <input type="email" name="email" id="email" placeholder="digite o seu email..." class="form-control" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="acao" value="adicionar" style="display: none;">
                      <label class="bmd-label-floating">Senha:</label>
                      <input type="password" name="senha" id="senha" placeholder="digite uma senha..." class="form-control" required>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nivel" class="bmd-label-floating">Permissão:</label>
                      <select class="input sm form-control" name="nivel" id="nivel" required>
                        <?php foreach ($permissao as $linha) { ?>
                          <option value="<?php echo $linha['idpermissao'] ?>"><?php echo $linha['descricao'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>

                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <div class="card-footer-fluid text-center">
                  <button href="../../../view/painel/home.php" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                  <button type="submit" name="bt_s" class="btn btn-success">
                    Salvar
                  </button>

                  <a href="../usuario/lista_u.php" type="button" class="btn btn-dark">
                    <strong>ver registos</strong>
                  </a>
                </div>
            </form>
          </div>
        </div>
      </div>

      <?php
      include_once('../../../view/painel/layouts/footer.php');
      ?>