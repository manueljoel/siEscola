<?php
include_once('../../../view/painel/layouts/header.php');
include_once('../../../view/painel/layouts/navbar.php');

?>



<div class="card-header text-center">
    <h5 class="card-title py-1 px-4"></h5>
</div>

<br>

<div class=" px-5 m-5">
    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Adicionar sala
    </button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class=" modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova sala</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form method="post" action="../../../Controller/Csala.php">
                    <div class="form-group">
                        <input name="acao" value="adicionar" style="display: none;">
                        <label for="numeroSala">Numero da Sala:</label>
                        <input type="number" class="form-control" name="numeroSala" id="numeroSala" placeholder="*digite..." required>
                    </div>

                    <br>

                    <button type="submit" name="bt_s" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i>
                        Salvar
                    </button>

                    <a href="../../painel/sala/l_sala.php" class="btn btn-primary btn-sm">ver registros</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include_once('../../../view/painel/layouts/footer.php');
?>