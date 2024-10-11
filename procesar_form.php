<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar de datos del formulario</title>
</head>
<body>
    <?php
        //recibir los datos por post
        $nombre = $_POST["txtNombre"];

        echo "<h1>tu nombre es $nombre</h1>"
    ?>
    
</body>
</html>