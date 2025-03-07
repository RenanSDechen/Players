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
  </style>
</head>

<body class="body">
  <div onclick="carregar" class="players">
    <button type="button" class="main" onclick=" window.location.href = 'main.php'">Todos</button>
    <button class="button1" onclick="mostrarDiv(1)">Fogo</button>
    <button class="button2" onclick="mostrarDiv(2)">Agua</button>
    <button class="button3" onclick="mostrarDiv(3)">Terra</button>
    <button class="button4" onclick="mostrarDiv(4)">São Paulo</button>
    <button class="button5" onclick="mostrarDiv(5)">Estúdio 3</button>
    <button class="button6" onclick="mostrarDiv(6)">Poli</button>
    <button class="button7" onclick="mostrarDiv(7)">Lab</button>
    <button class="button8" onclick="mostrarDiv(8)">Writing</button>
    <button class="button9" onclick="mostrarDiv(9)">Retransmissão</button>
    <button style="background-color:red;" onclick="logout()">Logout</button>

    <div id="div1" class="hidden">
      <iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/51137833?iframeembed=true&entry_id=1_abrq1eel'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe>
    </div>
    <div id="div2" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/51137833?iframeembed=true&entry_id=1_gpj049oa'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div3" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/51137833?iframeembed=true&entry_id=1_vzvyhdp9'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div4" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/46596453?iframeembed=true&entry_id=0_2bls5z33'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div5" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/51137833?iframeembed=true&entry_id=1_gmu1nupr'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div6" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/46596453?iframeembed=true&entry_id=1_ufdv91fj'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div7" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/53346942?iframeembed=true&entry_id=1_p6p83qo6'
        style="width: 100%; height: 100%;" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow="autoplay *; fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div8" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/51137833?iframeembed=true&entry_id=1_haxvq8kl'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>
    <div id="div9" class="hidden"><iframe type="text/javascript"
        src='https://cdnapisec.kaltura.com/p/2444871/embedPlaykitJs/uiconf_id/53346942?iframeembed=true&entry_id=1_wi1cl2t2'
        style="width: 100%; height: 100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen
        allow=" fullscreen *; encrypted-media *" frameborder="0"></iframe></div>





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