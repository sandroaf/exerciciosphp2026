<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Variável</title>
</head>
<body>
    <main>
        <header>
            <h1>Variável</h1>
            <p>Crie uma aplicação simples em PHP que crie uma variável com seu nome e outra variável com sua idade e mostre na tela.</p>
        </header>
        <article>
            <?php
                $nome = "Sandro Alencar Fernadnes";
                $idade = "48"; 

                echo "Nome: $nome <br>Idade: $idade";
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