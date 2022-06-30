<?php
$usuarios = [
    "Jose",
    "Alberto",
    "Elon",
    "Nicola",
    "Sandler"
];  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Impresion de textos</h1>

    <?php echo "Hola mundo </br>";?>

    <?= "
        <b>Forma corta de escribir html (textp y etiquetas) en php</b>" 
    ?>


    <?= "</br></br> <h1>Formas de escribir condiconales</h1></br>"?>
    
    <!-- NO ES LA FORMA CORRECTA DE ESCRIBIR CONDICIONALES -->
    <?php if(false){
            echo "Se cumplio";
        }else{
            echo "No se cumplio";
        }
    ?>


    <!-- FORMA ACEPTABLE DE ESCRIBIR CONDICIONALES -->
    <?php if(false){?>
        <b>Es aceptable</b>
    <?php } else {?>
        <b>No es aceptable</b>
    <?php } ?>


    <!-- IMPLEMENTACION CORRECTA -->
    <?php if(true): ?>
        <b>Si ocurrio</b>
    <?php else: ?>
        <b>Nunca paso</b>
    <?php endif;?>



    <h1>Manejo de ciclos</h1>
    
    <!-- Ciclo FOR -->
    <?php for($x=0;$x<10;$x++): ?>
        <i><?= $x ?></i>
    <?php endfor; ?>

    <!-- Ciclo While -->
    <?php while(false):?>
        <?= "Hola" ?>
    <?php endwhile;?>

    <!-- Ciclo FOREACH -->
    <?php foreach($usuarios as $user):?>
        <li><?= $user ?></li>
    <?php endforeach; ?>


</body>
</html>