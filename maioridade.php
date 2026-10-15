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
                <label for="fdtnascto">Data Nascimento:</label>
                <input type="date" name="fdtnascto" required>
                <br><br>
                <button type="submit">Enviar</button>
                <br>
                <br>
            </form>
            <?php
                require_once("funcoes.php");
                if (isset($_GET["fnome"])) {
                
                $nome = $_GET["fnome"];
                $idade = idade($_GET["fdtnascto"]);
                $maior = "";
                if ($idade >=18) {
                    $maior = "Maior de Idade";
                } 

                echo "Nome: $nome <br>Idade: $idade $maior";
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