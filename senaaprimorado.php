<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Sorteio Sena Aprimorado</title>
</head>

<body>
    <main>
        <header>
            <h1>Sorteio Sena Aprimorado</h1>
            <p>Aprimore esse exercício anterior para após sortear permitir salvar o sorteio em um arquivo texto (Guarde
                a Data e os números sorteados).</p>
        </header>
        <article>
            <?php
                if (isset($_POST["salvar"])) {
                    try {        
                        date_default_timezone_set('America/Sao_Paulo');
                        $data = date("d/m/Y-H:i:s");
                        $arq = fopen(dirname(__FILE__)."/sena.txt","a");
                        fwrite($arq,$data.";".$_POST["sena"]."\n");
                        fclose($arq);
                    } catch (Exception $e) {
                        die($e->getMessage());
                    }
                } 
                $sena = array();
                while (count($sena) < 6) {
                    $nro = rand(0,60);
                    if (!array_search("nro",$sena)) {
                        array_push($sena, $nro);
                        echo $nro.(count($sena)==6?"":", ");
                    }
                }
            ?>
            <br>
            <form action="" method="POST">
                <input type="hidden" name="sena" value="<?= implode(';', $sena) ?>"><br>
                <button type="submit" name="salvar">Salvar</button>
            </form>
        </article>
        <footer>
            <br>
            <hr>
            <a href="index.php">Voltar</a>
        </footer>

    </main>

</body>

</html>