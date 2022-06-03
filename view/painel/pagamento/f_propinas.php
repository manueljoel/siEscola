<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel//layouts/navbar.php');
?>

<div class="card-header text-center">
  <h5 class="card-title py-1 px-4"></h5>
</div>

<br><br><br>
<div class="content">
  <div class="container">
    <div class="card-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card-body">
            <form method="post" action="../../../Controller/Caluno.php">
              <div class="row">

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Serviço:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Valor Unitário:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Desconto:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>


                <div class="col-md-2">
                  <div class="form-group">
                    <label class="bmd-label-floating">Multa:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating">Pagamento:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row py-3">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tipo de Pagamento:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Banco:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Número de Transição:</label>
                    <input type="text" class="form-control" required>
                  </div>
                </div>
              </div>

              <div class="row py-4">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>

              <br><br>
              <br><br>
              <br><br>

              <div class="card-footer text-center">
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