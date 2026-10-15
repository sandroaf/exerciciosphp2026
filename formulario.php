<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulário</title>
</head>
<body>
    <main>
        <header>
            <h1>Formulário</h1>
            <p>Altere a aplicação do exercício 1, para que o nome e a idade possam ser informados através de dados de um formulário html</p>
        </header>
        <article>
            <form action="" method="get">
                <label for="fnome">Nome:</label>
                <input type="text" name="fnome" required>
                <label for="fidade">Idade:</label>
                <input type="text" name="fidade" required>
                <br><br>
                <button type="submit">Enviar</button>
                <br>
                <br>
            </form>
            <?php
                if (isset($_GET["fnome"])) {
                $nome = $_GET["fnome"];
                $idade = $_GET["fidade"]; 

                echo "Nome: $nome <br>Idade: $idade";
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