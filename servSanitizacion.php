<?php

$name = $_GET["nombre"];

$responseSecure = htmlentities($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>
<body>
    <h1>Bienvenido <?= $responseSecure?></h1>
</body>
</html>