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
    <title>PHP Badwords</title>
</head>
<body>
    <h1>PARAGRAFO ORIGINALE</h1>
    <h2>
        Testo: <?php echo $paragraph ?>   
    </h2>
    <h2>
        Lunghezza: <?php echo strlen ($paragraph); ?> caratteri
    </h2>
    <h1>PARAGRAFO SOSTITUITO</h1>
    <h2>
        Testo: <?php echo $new_string ?>   
    </h2>
    <h2>
        Lunghezza: <?php echo strlen ($new_string); ?> caratteri
    </h2>
</body>
</html>