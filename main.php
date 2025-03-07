<?php
session_start();
include_once 'conexao.php';
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <style type="text/css">
        body {
            background-image: url('\img.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 0;
            position: relative;
            height: 100vh;
        }

        .players div {
            width: 70vw;
            height: 80vh;
            margin: auto auto;
        }

        .players {
            width: 90vw;
            height: 100vh;
            margin: auto auto;
        }

        .hidden {
            display: none;
            z-index: 1;
        }

        .todos {
            max-width: 25vw;
            max-height: 20vh;

        }

        button {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #333;
            /* Cor de fundo do botão (pode personalizar) */
            color: #fff;
            /* Cor do texto do botão (pode personalizar) */
            border: none;
            /* Remove a borda do botão */
            border-radius: 5px;
            /* Borda arredondada */
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        iframe {
            border-radius: 20px;
        }

        .todosPlayers {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            justify-content: space-around;
            width: 100vw;
            height: 90vh;
            margin: auto auto;
        }
    </style>
</head>

<body class="body">
    <div onclick="carregar" class="players">
        <button class="button1" onclick="  window.location.href = 'player.php'">Voltar</button>
        <button style="background-color:red;" onclick="logout()">Logout</button>
        <div class="todosPlayers">
            <div id="div1" class="todos">
                <h2 style="color:white;">Fogo</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div2" class="todos">
                <h2 style="color:white;">Agua</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div3" class="todos">
                <h2 style="color:white;">Terra</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div4" class="todos">
                <h2 style="color:white;">São Paulo</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div5" class="todos">
                <h2 style="color:white;">Estúdio 3</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div6" class="todos">
                <h2 style="color:white;">Poli</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div7" class="todos">
                <h2 style="color:white;">Lab</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%;" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow="autoplay *; fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div8" class="todos">
                <h2 style="color:white;">Outros-Eventos 1</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow="autoplay *; fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>
            <div id="div9" class="todos">
                <h2 style="color:white;">Retransmissao</h2>
                <iframe type="text/javascript"
                    src='link to kaltura'
                    style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
                    allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
            </div>


        </div>


    </div>
    <script>

        function logout() {
            var urlLogout = 'logout.php';
            window.location.href = urlLogout;
        }
        function mostrarDiv(numeroDiv) {
            // Oculta todas as divs
            for (let i = 1; i <= 9; i++) {
                if (i == numeroDiv) {
                    // Mostra a div selecionada
                    document.getElementById(`div${numeroDiv}`).style.display = 'block';
                } else {

                    document.getElementById(`div${i}`).style.display = 'none';

                }
            }

        }
    </script>
</body>

</html>
