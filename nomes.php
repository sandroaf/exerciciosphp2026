<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Nomes</title>
</head>
<body>
    <main>
        <header>
            <h1>Formulário</h1>
            <p>Crie uma aplicação com um formulário que peça o nome de pessoas e guarde em um vetor na sessão. Ter uma opção que exibe todos os nomes guardados.</p>
        </header>
        <article>
            <form action="" method="get">
                <label for="fnome">Nome:</label>
                <input type="text" name="fnome" required>

                <br><br>
                <button type="submit">Enviar</button>
                <br>
                <br>
            </form>
            <?php
                if (isset($_GET["fnome"])) {
                $_SESSION["nomes"][] = $_GET["fnome"];
                echo "Nome: ".$_GET["fnome"]." salvo!<br>";
                echo count($_SESSION["nomes"])."  nomes salvos.<br>";
                }
            ?>
            <form action="" method="GET">
                <br>
                <button type="submit" name="exibir">Exibir</button>&nbsp;
                <button type="submit" name="limpar">Limpar</button>

            </form>
            <?php
                if (isset($_GET["exibir"])) {
                    foreach ($_SESSION["nomes"] as $nome) {
                        echo $nome."<br>";
                    }
                } 
                if (isset($_GET["limpar"])) {
                    session_destroy();
                }
            ?>
        </article>
        <footer>
            <br>
            <hr>
            <a href="index.php">Voltar</a>
        </footer>

    </main>
    
</body>
</html>