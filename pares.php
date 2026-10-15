<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Pares</title>
</head>
<body>
    <main>
        <header>
            <h1>Pares</h1>
            <p>Crie uma aplicação que receba através de um formulário um valor e liste em tela os números pares de    0 até o valor informado.</p>
        </header>
        <article>
            <form action="" method="get">
                <label for="fnro">Número:</label>
                <input type="number" name="fnro" required>
                <br><br>
                <button type="submit">Enviar</button>
                <br>
                <br>
            </form>
            <?php
                if (isset($_GET["fnro"])) {
                $nro = $_GET["fnro"];
                for ($n = 0;$n <= $nro; $n++) {
                    if ($n % 2 == 0) {
                        echo $n.($nro==$n?"":", ");
                    }
                }
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