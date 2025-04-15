<?php

require_once __DIR__ . "\..\..\model\Filme.php";
require_once __DIR__ . "home.php";

$filmeModel = new Filme();
$filmes = $filmeModel->findAll();

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

    <link rel="stylesheet" href="/Catalogo-filmes/public/css/style.css">
</head>

<body>
    <section class="conteiner">
        <h2>Filmes</h2>

        <div class="acao">
            <a href="cadastro.php">
                <button>
                    <span>Novo</span>
                    <span class="material-symbols-outlined">
                        add
                    </span>
                </button>
            </a>
        </div>
        <div>
            <a href="home.php">
                <button>
                    <span ></span>
                    <span class="material-symbols-outlined">
                        Home
                    </span>
                </button>
            </a>
        </div>

        <table class="table">
            <thead>
                <th>Nome</th>
                <th>Ano</th>
                <th>Descrição</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php foreach ($filmes as $filme) { ?>
                    <tr>
                        <td><?php echo $filme->nome ?></td>
                        <td><?php echo $filme->ano ?></td>
                        <td><?php echo $filme->descricao ?></td>
                        <td>
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $filme->id; ?>">
                                <button title="detalhes">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>
                            <!--Funcionalidade de deletar-->
                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $filme->id ?>">
                                <button title="excluir" onclick="return confirm('Tem certeza que quer excluir?')">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
                            </form>
                            <!--Funcionalidade de editar-->
                            <form action="cadastro.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $filme->id ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        edit
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <script src="/Catalogo-filmes/public/js/main.js" defer></script>
</body>

</html>
<!-- // echo"<tr>";
            // echo"<td>".$filme["nome"]."</td>";
            // echo"<td>".$filme["ano"]."</td>";
            // echo "<td>".$filme["descricao"]."</td>";
            // echo"</tr>"; -->