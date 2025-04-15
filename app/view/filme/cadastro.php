<?php
require_once __DIR__ . "/../../model/Filme.php";

$filmeModel = new Filme();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $sucesso = false;

    if (!empty($_POST["id"])) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $descricao = $_POST["descricao"];
        $img = $_POST["img"];

        $sucesso = $filmeModel->editar($id,$nome, $ano, $descricao, $img);
    } else {

        $nome = $_POST["nome"];
        $ano = $_POST["ano"];
        $descricao = $_POST["descricao"];
        $img = $_POST["img"];


        $sucesso = $filmeModel->cadastro($nome, $ano, $descricao, $img);
    }

    if ($sucesso) {
        return header("Location: listar.php?mensagem=sucesso");
    } else {
        return header("Location: listar.php?mensagem=erro");
    }
} else if ($_SERVER['REQUEST_METHOD'] === "GET") {
    // Bloco execulta quando abre a tela no navegador
    $filme = new Filme();


    if (!empty($_GET["id"])) {

        $filme = $filmeModel->findById($_GET["id"]);
    } else {
            $filme = new Filme();
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/catalogo-filmes/public/css/style.css">
</head>

<body>
    <section class="container">
        <form action="cadastro.php" method="post">
            <div>
            <label for="img">Imagem</label>
                <input type="text" name="img" value="<?php echo $filme->img; ?>"/>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $filme->id; ?>"/>
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?php echo $filme->nome; ?>"/>
            </div>
            <div>
                <label for="ano">Ano</label>
                <input type="text" name="ano" value="<?php echo $filme->ano; ?>"/>
            </div>
            <div>
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" value="<?php echo $filme->descricao; ?>"/>
            </div>
            <button>Salvar</button>

        </form>
    </section>
</body>

</html>