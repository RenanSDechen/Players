<?php
session_start();
include_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <title>Login</title>
</head>

<body>

    <?php
    $deuErroMano = "Login";
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['SendLogin'])) {
        $query_usuario = "SELECT id, nome, senha
                                    FROM usuariotudobao
                                    WHERE nome = :nome
                                    LIMIT 1 ";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $result_usuario->execute();
        if ($result_usuario->errorCode() != "00000") {
            $errorInfo = $result_usuario->errorInfo();
            echo "Erro na consulta: " . $errorInfo[2];
            exit;
        }

        if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

            if (password_verify($dados['senha'], $row_usuario['senha'])) {
                $_SESSION['nome'] = $row_usuario['nome'];
                header('Location: player.php');
            } else {
                $deuErroMano = "Usuario ou senha invalida";
                echo "<h2>$deuErroMano</h2>";
            }
        } else {
            $deuErroMano = "Usuario ou senha incorreta";
            echo "<h2>$deuErroMano</h2>";
        }

    }

    ?>
    </div>
    <div class="main-login">
        <div class="right-login">
            <form class="card-login" method="POST" action="">

                <h1>
                    Login
                </h1>
                <div class="textfield">
                    <label for="nome">E-mail</label>
                    <input type="text" name="nome" placeholder="Digite seu nome:">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <input type="submit" class="btn-login" name="SendLogin" value="Login">
            </form>
        </div>
    </div>
</body>

</html>