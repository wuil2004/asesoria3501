<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <section>
        <h1>FOMULARIOS CON PHP</h1>
        <form action="procesar_form.php" method="post">
            <input type="text" placeholder="Nombre" name="txtNombre">
            <input type="number" placeholder="Edad" name="txtEdad">
            <select size="1" name="seleccioneCarrera">
                <option>--Seleccione Carrera</option>
                <option value="sistemas">ing sistemas computacionales</option>
                <option value="meca">ing mecatronica</option>
                <option value="logistica">ing logistica</option>
                <option value="industrial">ing industrial</option>
                <option value="civil">ing civil</option>
            </select>
            <button>Registrar</button>
            <button><Nav>Nuevo</Nav></button>
        </form>
    </section>


</body>
</html>