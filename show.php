<?php
    $paragraph = $_POST['paragraph'];
    $content_sub = $_POST['content-sub'];

    $new_string = str_replace($content_sub, '***', $paragraph);
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
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="form-control text-center fs-3 bg-warning">PARAGRAFO ORIGINALE</h1>
                <p class=form-control>
                    <span class="fw-bold text-decoration-underline">Testo:</span> <?php echo $paragraph ?>   
                </p>
                <p class="form-control">
                    <span class="fw-bold text-decoration-underline">Lunghezza:</span> <?php echo strlen ($paragraph); ?> caratteri
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="form-control text-center fs-3 bg-warning">PARAGRAFO SOSTITUITO</h1>
                <p class=form-control>
                    <span class="fw-bold text-decoration-underline">Testo:</span> <?php echo $new_string ?>    
                </p>
                <p class="form-control">
                    <span class="fw-bold text-decoration-underline">Lunghezza:</span> <?php echo strlen ($new_string); ?> caratteri
                </p>
            </div>
        </div>
    </div>
</body>
</html>