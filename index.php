<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <form action="./show.php" method="POST">
        <input type="text" name="paragraph" id="paragraph" placeholder="Inserisci il contenuto">
        <input type="text" name="content-sub" id="content-sub" placeholder="Inserisci la parola da nascondere">
        <button name="submit">Invia</button>
    </form>
</body>
</html>