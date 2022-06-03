<?php include_once("layouts/header.php"); ?>


<div class="login">
    <div class="image">
        <h2>SPP-EXATO</h2>
        <!--<img src="logo.jpg" alt="">-->
    </div>

    <form method="POST" action="../painel/home.php">
        <div class="row">
            <i class="fas fa-user"></i>
            <input type="Email" nome="email" id="email" placeholder="Email ou Telefone" required>
        </div>

        <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" nome="senha" id="senha" placeholder="Senha" required>
        </div>

        <div class="row">

            <button>Entrar</button>
            <a href="#">Esqueceu sua senha?</a>
        </div>
    </form>
</div>

<?php include_once("layouts/footer.php") ?>