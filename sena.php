<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Sorteio Sena</title>
</head>
<body>
    <main>
        <header>
            <h1>Sorteio Sena</h1>
            <p>Crie uma aplicação que sorteie números para a Mega Sena (sorteia seis números de 0 a 60 sem repetir)</p>
        </header>
        <article>
            <?php 
                $sena = array();
                while (count($sena) < 6) {
                    $nro = rand(0,60);
                    if (!array_search("nro",$sena)) {
                        array_push($sena, $nro);
                        echo $nro.(count($sena)==6?"":", ");
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