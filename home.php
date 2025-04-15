
<?php

require_once __DIR__ . "/../../config/env.php";
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../model/Filme.php";

$id = $_GET["id"];


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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="conteiner">
        <h1>Filmes Disponiveis</h1>
        <div>
        <img class="figure_img" src="https://th.bing.com/th/id/OIP.XHKTPBAIQQ_zzUreiaKeQAHaKk?rs=1&pid=ImgDetMain"
            alt="">
            
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um thriller alucinante sobre sonhos dentro de sonhos.</h4>
        </div>
        </div>
        <div>
        <img class="img_fil" src="https://images-na.ssl-images-amazon.com/images/I/91wkDmLK3UL._SX600_.jpg" alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um hacker descobre que a realidade em que vive é uma simulação.</h4>
        </div>
        </div>
        <div>
        <img class="figure_img" src="https://i.pinimg.com/originals/11/1c/5c/111c5c9ad99661af2d80e38948cf29d8.jpg"
            alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Uma equipe de exploradores viaja através de um buraco de minhoca no espaço.</h4>
        </div>
        </div>
        <div>
        <img class="figure_img" src="https://th.bing.com/th/id/OIP.fEyRW5eAi8GKIINct9xatwHaKh?rs=1&pid=ImgDetMain"
            alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>O patriarca envelhecido de uma dinastia do crime organizado transfere o controle para seu filho
                relutante.</h4>
        </div>
        </div>
        <div>
        <img class="img_fil" src="https://th.bing.com/th/id/OIP.GvEKHTpEwxeBAuyL1-RJgAHaJ4?rs=1&pid=ImgDetMain" alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>As vidas de dois assassinos de aluguel, um boxeador e outros se entrelaçam em quatro contos de violência
                e redenção.</h4>
        </div>
        </div>
        <div>
        <img class="img_bat" src="https://th.bing.com/th/id/OIP.kSwFiORSXMmuk_Mk9Uh8XwHaLH?rs=1&pid=ImgDetMain" alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Batman enfrenta o Coringa, um gênio do crime que quer mergulhar Gotham City na anarquia.</h4>
        </div>
        </div>
        <div>
        <img class="img_bat" src="https://image.tmdb.org/t/p/w1280/r3pPehX4ik8NLYPpbDRAh0YRtMb.jpg" alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um trabalhador insone e um vendedor de sabonetes formam um clube de luta clandestino.</h4>
        </div>
        </div>
        <div>
        <img class="figure_img" src="https://th.bing.com/th/id/OIP.WyEL6hzFk3jPtdgnQzmObwHaLH?rs=1&pid=ImgDetMain"
            alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>A história de um homem com QI baixo que alcança grandes feitos na vida.</h4>
        </div>
        </div>
        <div>
        <img class="img_sonho" src="https://th.bing.com/th/id/OIP.1XVb-IU7zDZSi6Wp7UhYDQHaJ4?rs=1&pid=ImgDetMain"
            alt="">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Dois homens presos criam um vínculo ao longo dos anos, encontrando consolo e eventual redenção.</h4>
        </div>
        </div>
        <div>
        <img class="figure_img" src="https://th.bing.com/th/id/OIP.-KWrWajXbGI4hOpvioesfQHaLH?rs=1&pid=ImgDetMain">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um jovem hobbit parte em uma jornada para destruir um anel poderoso.</h4>
        </div>
        </div>
        <div>
        <img class="img_star"
            src="https://th.bing.com/th/id/R.ac4013b9dd2f660b96fdd9511fd44d67?rik=pHov14HZx80E3w&pid=ImgRaw&r=0">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um jovem fazendeiro se junta a uma rebelião para salvar a galáxia de um império maligno.</h4>
        </div>
        </div>
        <div>
        <img class="figure_img"
            src="https://th.bing.com/th/id/R.bd58a966f89fbc2cf37c881d93c98e14?rik=Dp7Nsv%2fcmUJKAg&pid=ImgRaw&r=0">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um parque temático sofre uma grande falha de energia que permite que seus dinossauros clonados escapem.
            </h4>
        </div>
        </div>
        <div>
        <img class="img_leao" src="https://th.bing.com/th/id/OIP.j5UTML-xxUizaIus_uXPWAHaJr?rs=1&pid=ImgDetMain">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um jovem príncipe leão foge de seu reino apenas para aprender o verdadeiro significado de
                responsabilidade e coragem.</h4>
        </div>
        </div>
        <div>
        <img class="img_gladiador" src="https://th.bing.com/th/id/OIP._uTiuQpZcWBpBigvXzHa7AHaKj?rs=1&pid=ImgDetMain">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um ex-general romano busca vingança contra o imperador corrupto que assassinou sua família.</h4>
        </div>
        </div>
        <div>
        <img class="img_titnic" src="https://i.pinimg.com/originals/b1/4e/ae/b14eaef50b33c4bb77a9f1284c8c177b.jpg">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um jovem casal de classes sociais diferentes se apaixona a bordo do malfadado R.M.S. Titanic.</h4>
        </div>
        </div>
        <div>
        <img class="img_avatar" src="https://th.bing.com/th/id/OIP.nwsaXiHUDBS-pLpNTZq-IQHaLH?rs=1&pid=ImgDetMain">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um fuzileiro naval paraplégico enviado à lua Pandora em uma missão única se vê dividido entre seguir
                suas ordens e proteger o mundo que sente ser seu lar.</h4>
        </div>
        </div>
        <div>
        <img class="img_vingadores"
            src="https://media.themoviedb.org/t/p/w220_and_h330_face/j9hwS307Zlc5mQTbAnwV75vXG0H.jpg">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Os heróis mais poderosos da Terra devem se unir para impedir um semideus de escravizar a humanidade.
            </h4>
        </div>
        </div>
        <div>
        <img class="img_vingadores"
            src="https://th.bing.com/th/id/R.54bd2e76872cbcc027ca8a4c4a674987?rik=wbJTQ09uTK%2fhWQ&riu=http%3a%2f%2fwww.cafecomfilme.com.br%2fmedia%2fk2%2fitems%2fcache%2f21f17c9e863ce68047046a2d88bbdae5_XL.jpg&ehk=Xq4wVtR3lwBuvDe3hcOm8tZONmO7G%2f3hBK917dtSLjY%3d&risl=&pid=ImgRaw&r=0">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Um jovem descobre que é um bruxo e frequenta uma escola de magia.</h4>
        </div>
        </div>
        <div>
        <img class="img_vingadores" src="https://th.bing.com/th/id/OIP.c5xl3AH5OsgLdkIb0m2UqwAAAA?rs=1&pid=ImgDetMain">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Uma jovem cadete do FBI deve confiar em um assassino manipulado e encarcerado para capturar outro serial
                killer.</h4>
        </div>
        </div>
        <div>
        <img class="figure_img"
            src="https://th.bing.com/th/id/R.8d639c313b02cd1cd8bcc7a434654fde?rik=eFPhHHBPxBj2Ag&riu=http%3a%2f%2fbr.web.img2.acsta.net%2fmedias%2fnmedia%2f18%2f90%2f59%2f58%2f20103846.jpg&ehk=jNvwjDFWs0EuVYp8N%2fbgOCK2RZgCTdjZ4IKysUdL2zs%3d&risl=&pid=ImgRaw&r=0">
        <div class="painel">
            <h3>Descrição:</h3>
            <h4>Na Polônia ocupada pelos nazistas durante a Segunda Guerra Mundial, Oskar Schindler gradualmente se
                preocupa com sua força de trabalho judaica após testemunhar sua perseguição pelos nazistas.</h4>
        </div>
        </div>
    </section>
    <button onclick="history.back()">
        <span class="material-symbols-outlined">
            Voltar
        </span>
    </button>
    <!-- Voltar -->

</body>

</html>