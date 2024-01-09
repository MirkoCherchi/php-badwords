<?php
$badwords = strtolower($_POST['badwords']);
$paragrafo = strtolower($_POST['paragrafo']);
$modifica_paragrafo = str_replace($badwords, '***', $paragrafo);
$count = substr_count($paragrafo, $badwords);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bad Words</h1>

    <main>
        <p>Paragrafo Originale: <?php echo $paragrafo; ?></p>
        <p>Lunghezza Paragrafo Originale: <?php echo strlen($paragrafo); ?></p>

        <p>Parola da Censurare: <?php echo $badwords; ?></p>

        <p>Paragrafo Modificato: <?php echo $modifica_paragrafo; ?></p>
        <p>Lunghezza Paragrafo Modificato: <?php echo strlen($modifica_paragrafo) - (3 * $count); ?></p>
    </main>
</body>
</html>
