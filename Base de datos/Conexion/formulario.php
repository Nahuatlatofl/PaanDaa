<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/barra_nav.css">
    <title>Formulario</title>
    <link rel="stylesheet" href="\proyecto_web\Conexion\image-conexion\style2\formulario.css">
</head>

<body>
    <div id="formulario">
        <h1>Comenta</h1>
        <form action="conect_bd.php" method="post">
            <label  for="NombreCompleto">Nombre Completo:</label><br>
            <input type="text" id="NombreCompleto" name="NombreCompleto" placeholder="Nombre Completo" required><br>

            <label for="Comentario">Queja o Sugerencia:</label><br>
            <input type="text" id="Comentario" name="Comentario" placeholder="Queja o Sugerencia" required><br>

            <label for="Edad">Edad:</label><br>
            <input type="number" id="Edad" name="Edad" placeholder="Edad" required><br>

            <label for="fecha">Fecha (ddmmyy):</label><br>
            <input type="text" id="fecha" name="fecha" placeholder="Fecha ddmmyy" required><br>

            <input type="submit" value="Guardar">
        </form>

        <div class="links">
            <button onclick="window.location.href='/proyecto_web/index.php'">Synthmind_IV</button>
            <button onclick="window.location.href='Comentarios.php'">Comentarios Mas Populares</button>
        </div>
        <p>jpjwpxwwdinidw</p>
    </div>  
</body>
</html>
