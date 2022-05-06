<?php include_once("layouts/header.php") ?>

<div class="container">
    <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0 ">
            <div class="img-left d-none d-md-flex"></div>

            <div class="card-body">
                <h4 class="title text-center mt-4">
                    CRIAR CONTA
                </h4>
                <form action="" class="form-box px-3">
                    <div class="form-input">
                        <span><i class="fa fa envelope-o"></i></span>
                        <input type="email" placeholder="seunome@gmail.com " required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa key"></i></span>
                        <input type="password" placeholder="*password" tabindex="10" required>
                    </div>

                    <div class="mb-3">
                        <div class="custom-control custom-chekbox">


                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="view/main.php" class="btn btn-outline-primary btn-block text-uppercase">cadastrar</a>

                    </div>
                    <div class="text-right">
                        <a href="iniciar_sessao.php" class="forget-link center">Iniciar Sessão</a>
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