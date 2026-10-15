<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Contato</title>
</head>
<body>
    <main>
        <header>
            <h1>Contato</h1>
            <p>Altere a aplicação do exercício 1, para que o nome e a idade possam ser informados através de dados de um formulário html</p>
        </header>
        <article>
            <form action="" method="POST">
                <label for="fnome">Nome:</label>
                <input type="text" name="fnome" required><br>
                <label for="femail">e-mail:</label>
                <input type="text" name="femail" required><br>
                <label for="fassunto">Assunto: </label>
                <input type="text" name="fassunto" required><br>
                <label for="fmsg">Mensagem:</label>
                <textarea name="fmsg"></textarea>
                <br><br>
                <button type="submit">Enviar</button>
                <br>
                <br>
            </form>
            <?php
                if (isset($_POST["fnome"])) {
                    require_once("funcoes.php");
                    echo "<br>".email("sandroaf@unidavi.edu.br",$_POST["femail"],$_POST["fnome"],$_POST["fassunto"],$_POST["fmsg"]);
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