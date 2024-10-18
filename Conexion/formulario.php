<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaanDaa/CSS/styles.css">
    <link rel="stylesheet" href="/PaanDaa/Conexion/CSS/formulario.css">
    <script src="/PaanDaa/JS/webComponents.js"></script>
    <link rel="icon" href="/PaanDaa/CSS/favicon/favicon.ico" type="image/x-icon">
    <title>Formulario</title>
    
    
</head>
<body>
<custom-navbar></custom-navbar>
    <div id="formulario">
        <h1>Comenta</h1>
        <form action="conect_bd.php" method="post">
            <label for="NombreCompleto">Nombre Completo:</label><br>
            <input type="text" id="NombreCompleto" name="NombreCompleto" placeholder="Nombre Completo" required><br>

            <label for="Comentario">Sugerencia o queja:</label><br>
            <input type="text" id="Comentario" name="Comentario" placeholder="Sugerencia o queja" required><br>

            <label for="Edad">Edad:</label><br>
            <input type="number" id="Edad" name="Edad" placeholder="Edad" required><br>

            <label for="fecha">Fecha actual:</label><br>
            <input type="text" id="fecha" name="fecha" placeholder="Fecha ddmmyy" readonly><br>

            <input type="submit" value="Guardar">
        </form>

        <div class="links" onclick="window.location.href='Comentarios.php'" style="cursor: pointer;">
            <button>Comentarios</button>
        </div>
    </div>  
    <custom-footer></custom-footer>
</body>
<script>
        function setFechaActual() {
            const today = new Date();
            const day = String(today.getDate()).padStart(2, '0');
            const month = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
            const year = String(today.getFullYear()).slice(-0); // Solo los últimos dos dígitos del año

            const fechaActual = `${day}${month}${year}`;
            document.getElementById('fecha').value = fechaActual;
        }

        window.onload = setFechaActual;
    </script>
    <script src="JS/carrousel.js"></script>
</html>
