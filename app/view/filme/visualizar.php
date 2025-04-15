<?php

require_once __DIR__ . "/../../config/env.php";
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../model/Filme.php";

$id = $_GET["id"];

if ($id == "") {
    return header("Location: listar.php");
}

$filmeModel = new Filme();
$filme = $filmeModel->findById($id);

// var_dump(($filme))
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Catalogo-filmes/public/css/style.css">
</head>

<body>
    <section class="conteiner">
        <h2>Detalhes do filme</h2>


        <img class="img-filme" src="<?php echo $filme->img ?>" alt="img filme">
        <h3>Nome: <?php echo $filme->nome ?></h3>
        <p>Ano: <?php echo $filme->ano ?></p>
        <p>Descrição: <?php echo $filme->descricao ?></p>
        <button onclick="history.back()">
            <span class="material-symbols-outlined">
                arrow_back
            </span>
        </button>
    </section>
    <!-- Voltar -->

</body>

</html>