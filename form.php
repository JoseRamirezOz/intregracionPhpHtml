<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario</title>
</head>
<body>
    <form action="server.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"></input>

        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad"></input>

        <label for="imagen">Imagen</label>
        <input type="file" name="image" id="imagen"></input>

        <button type="submit">Mandar formulario</button>
    </form>



</body>
</html>