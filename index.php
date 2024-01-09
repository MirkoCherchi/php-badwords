<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- My css -->
    <link rel="stylesheet" href="style.css">
    <!-- /My css -->

</head>
<body>
    <form action="result.php" method="post">
        <label for="badwords">Bad Words</label>
        <input type="text" id="badwords" name="badwords">
        <label for="paragrafo">Paragrafo</label>
        <textarea name="paragrafo" id="paragrafo" cols="30" rows="10"></textarea>
        <button type="submit">Invia</button>
    </form>
</body>
</html>
