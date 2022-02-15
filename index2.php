<?php


$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$email = $_GET["email"];
$age = $_GET["age"];

if (strlen($nome) != 3) {
    echo "Il Nome deve avere lunghezza pari a 3";
};

if (is_numeric($age)) {
    echo "L'età deve contenere un numero";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Benvenuto <?php echo $nome; ?> <?php echo $cognome; ?></h1>
    
</body>
</html>