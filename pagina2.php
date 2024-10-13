<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/estilo2.css">
</head>
<body>

    <section class="content-form">

        <div class="aneis">
            <i style="--clr:#00ff0a;"></i>
            <i style="--clr:#ff0057;"></i>
            <i style="--clr:#fffd44;"></i>
        

        <h1>FOMULARIOS CON PHP</h1>

        <form action="procesar_form.php" method="post">
            <input type="text" placeholder="Nombre" name="txtNombre" class="cajas-texto">
            <input type="number" placeholder="Edad" name="txtEdad" class="cajas-texto">

            <select size="1" name="seleccioneCarrera" class="opcion">
                <option>--Seleccione Carrera</option>
                <option value="sistemas">ing sistemas computacionales</option>
                <option value="meca">ing mecatronica</option>
                <option value="logistica">ing logistica</option>
                <option value="industrial">ing industrial</option>
                <option value="civil">ing civil</option>
            </select>

            <button class="botones">Registrar</button>
            <button class="botones"><Nav>Nuevo</Nav></button>
        </form>
        </div>
    </section>


</body>
</html>