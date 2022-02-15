<?php


$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$email = $_GET["email"];
$age = $_GET["age"];

if ( (strlen($nome) <= 3) && (is_numeric($age)) && (strpos($email, '@') !== false) ) {
    echo "il tuo accesso è valido";
}


/*else {
    echo "il tuo nome è $nome";
};

if (is_numeric($age)) {
    echo " la tua età è: $age";
} else {
    echo " L'età deve contenere un numero";
};

if (strpos($email, '@') !== false) {
    echo " la tue email è: $email";
} else {
    echo " la tua email non è valida";
}*/

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


<h1>Benvenuto</h1>
    
</body>
</html>