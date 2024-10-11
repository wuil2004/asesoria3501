<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI PRIMERA APLICACION CON PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <section class="content-form">
        <h1>Soy un encabezado de html</h1>
        <?php
          #Script php
          //tambien soy un comentario de una linea
          /*soy un comentario
          de multiples de lineas*/ 
          //Las variables simpre comiensan con $
          //PHP no es tipado, el tipo de dato se crea con la asignacion
            $nombre = "TESJI";
            $mensaje = "mi primera aplicacion en PHP";
            echo "<h2>Hola mundo desde PHP</h2>";
            echo "<h3>bienvenido $nombre</h3><h4>$mensaje</h4>"
        ?>
        <ul>
            <a href="pagina2.php"><li>Formularios</li></a>
        </ul>
    </section>

</body>
</html>