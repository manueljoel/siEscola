<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradientk ">
    <a class="navbar-brand mx-1" href="#"><strong>SPP-EXATO</strong></a>
</nav>

<div class="card-header  bg-gradient">

    <div class=" row-fluid py-3  ">

        <ul class="nav nav-pills" id="pills-tab" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link  text-dark  btn-lg mx-1" href="/escolar-main/view/painel/home.php">
                    <i class="bi bi-house-fill"></i>
                    <strong> Home</strong>
                </a>
            </li>

            <li class="nav-item" role="presentation">
                <a class=" nav-link text-primary btn-lg mx-1" href="/escolar-main/view/painel/aluno/f_aluno.php">
                    <i class="bi bi-mortarboard-fill"></i>
                    <strong>Novo-aluno</strong>
                </a>
            </li>

            <div class="btn-group">
                <button type="button" class=" nav-link text-primary btn-lg dropdown-toggle mx-1" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    <i class="bi bi-clipboard2-plus-fill"></i>
                    <strong>Cadastrar</strong>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/sala/l_sala.php">Sala</a></li>
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/classe/l_classe.php">Classe</a></li>
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/curso/l_curso.php">Curso</a></li>
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/turma/l_turma.php">Turma</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <a class="nav-link text-primary btn-lg dropdown-toggle mx-1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-graph-up-arrow"></i>
                    <strong>Gerenciar</strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/usuario/usuario.php">Editar Usuário</a></li>
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/processoAluno/processoAluno.php">Processo do Aluno</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <a class="nav-link text-primary btn-lg dropdown-toggle mx-1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-cash-stack"></i>
                    <strong>pagamentos</strong>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/pagamento/f_propinas.php">Incrição</a></li>
                    <li><a class="dropdown-item" href="/escolar-main/view/painel/pagamento/f_propinas.php">Propinas</a></li>
                </ul>
            </div>


            <div class="dropdown">
                <a class="nav-link text-primary btn-lg dropdown-toggle mx-1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-wrench-adjustable"></i>
                    <strong>Personalizar</strong>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="">Meus Dados</a></li>
                </ul>
            </div>

            <li class="nav-item text-rigth" role="presentation">
                <a class="nav-link  text-danger  btn-lg mx-1 " href="/escolar-main/view/login/index.php">
                    <i class="bi bi-door-open-fill"></i>
                    <strong>Sair</strong>
                </a>
            </li>

        </ul>

    </div>
</div>