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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <h1 class="text-center text-danger">PHP Badwords</h1>
    <div class="container">
        <form action="./show.php" method="POST">
            <div class="input-group mb-3 height-250">
                <span class="input-group-text width-150">Paragrafo</span>
                <textarea class="form-control" name="paragraph" id="paragraph" placeholder="Inserisci il contenuto"></textarea>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text width-150" id="basic-addon1">Parola</span>
                <input type="text" class="form-control" name="content-sub" id="content-sub" placeholder="Inserisci la parola da nascondere">
            </div>
            <div>
                <button name="submit" class="btn btn-primary">Invia</button>
            </div>
        </form>
    </div>
</body>
</html>