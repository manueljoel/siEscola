<nav class="navbar navbar-light bg-white">
    <div class="">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="buscar aluno..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                Pesquisar
            </button>

        </form>
    </div>
    <?php

    $nome = "Joel";

    $query_aluno = "SELECT id, nome, FROM aluno WHERE nome LIKE '$nome'";
    $result_aluno = $dsn->prepare($query_aluno);

    $result_aluno->execute();

    while ($row_aluno = $result_aluno->fetch(PDO::FETCH_ASSOC)) {
        var_dump($row_aluno);
    }

    ?>
</nav>