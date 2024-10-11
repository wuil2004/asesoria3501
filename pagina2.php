<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/estilo2.css">
</head>
<body>
    <section class="content_form">

        <h1>FOMULARIOS CON PHP</h1>

        <form action="procesar_form.php" method="post">
            <input type="text" placeholder="Nombre" name="txtNombre">
            <input type="number" placeholder="Edad" name="txtEdad">

            <select size="1" name="seleccioneCarrera" class="opcion">
                <option>--Seleccione Carrera</option>
                <option value="sistemas">ing sistemas computacionales</option>
                <option value="meca">ing mecatronica</option>
                <option value="logistica">ing logistica</option>
                <option value="industrial">ing industrial</option>
                <option value="civil">ing civil</option>
            </select>

            <div class="botones">
                <button>Registrar</button>
                <button><Nav>Nuevo</Nav></button>
            </div>
        </form>
    </section>


</body>
</html>