<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaanDaa/Conexion/image-conexion/style2/barra_nav.css">
    <link rel="stylesheet" href="/PaanDaa/Conexion/image-conexion/style2/formulario.css">
    <title>Formulario</title>
    
</head>

<body>
<div class="barra-nav">
        <a href="\PaanDaa\Index.php" class="logo-link">
            <div class="logo-container">
                <img src="\PaanDaa\Conexion\image-conexion\LOGO.jpg" alt="Logo">
                <h1>PannDaa</h1>
                <div class="eslogan">Dulzura suave, Tradicion fuerte</div>
            </div>
        </a>
        <div class="busqueda-container">
            <input type="text" placeholder="Buscar...">
        </div>
        <nav>
            <ul>
                <li><a href="#">Carrito</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="\PaanDaa\Acerca_de.html">Acerca de</a></li>
                <li><a href="\PaanDaa\Conexion\formulario.php">Opinar</a></li>
                <li><a href="\PaanDaa\Conexion\Comentarios.php">Reseñas</a></li>
            </ul>
        </nav>
    </div>
    
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

        <div class="links" onclick="window.location.href='Comentarios.php'" style="cursor: pointer;">
    <button>Comentarios</button>
</div>

    </div>  
</body>
</html>
