<?php

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];

/*Nombre del archivo*/
$baseName = $_FILES["image"]["name"]; 

/*Ruta temporal del archivo*/
$imgTpm = $_FILES["image"]["tmp_name"];

/*Ruata persistente del archivo*/
$updateRuta = "images/$baseName";

/*Fn para mover a la ruta persistente */
move_uploaded_file($imgTpm,$updateRuta);

?>


<img src="<?= $updateRuta?>" alt=""/>


<input type="file" multiple name="fotos[]">



