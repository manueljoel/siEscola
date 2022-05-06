<?php include_once("layouts/header.php"); ?>

<div class="container">
    <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0 ">
            <div class="img-left d-none d-md-flex"></div>
            <div class="card-body">
                <h4 class="title text-center mt-4"> Iniciar Sessão </h4>
                <form class="form-box px-3">
                    <div class="form-input">
                        <input type="text" id="nome" name="nome" placeholder="Nome de utilizador" class="form-control"
                            required>
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-group">
                            <input type="password" id="senha" name="senha" placeholder="Senha de utilizador"
                                class="form-control" required>
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="custom-control custom-chekbox">
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="../painel/index.php" type="submit" class="btn btn-outline-primary btn-block text-uppercase">Entrar</a>
                        </div>

                        <div class="text-right">
                            <a href="nova_conta.php" forget-link center">Criar conta</a>
                        </div>

                        <div class="text-center mb-3 ">
                        </div>
                        <div class="row mb-3">
                            <div class="col-4">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once("layouts/footer.php") ?>
