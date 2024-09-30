<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaanDaa/Conexion/image-conexion/style2/barra_nav.css">
    <link rel="stylesheet" href="/PaanDaa/Conexion/image-conexion/style2/coment.css">
    <title>Comentarios</title>
</head>

<body>
    <div class="barra-nav">
        <a href="/PaanDaa/Index.php" class="logo-link">
            <div class="logo-container">
                <img src="/PaanDaa/Base de datos/Conexion/image-conexion/LOGO.jpg" alt="Logo">
                <h1>PannDaa</h1>
                <div class="eslogan">Dulzura suave, Tradición fuerte</div>
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
                <li><a href="/PaanDaa/Acerca_de.html">Acerca de</a></li>
                <li><a href="/PaanDaa/Conexion/formulario.php">Opinar</a></li>
                <li><a href="/PaanDaa/Conexion/Comentarios.php">Reseñas</a></li>
            </ul>
        </nav>
    </div>
    
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Sugerencia</th>
            <th>Edad</th>
            <th>Fecha</th>
        </tr>

        <?php
        include 'conexion.php';
        $selec = $con->query("SELECT * FROM 4bmpg");
        while ($fila = $selec->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['NombreCompleto'] ?></td>
            <td><?php echo $fila['Comentario'] ?></td>
            <td><?php echo $fila['Edad'] ?></td>
            <td><?php echo $fila['fecha'] ?></td>
        </tr>
        <?php } ?>

        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Sugerencia</th>
            <th>Edad</th>
            <th>Fecha</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>

        <?php 
        include 'conexion.php';
        $selec = $con -> query("SELECT * FROM 4bmpg");
        while ($fila = $selec-> fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['NombreCompleto'] ?></td>
            <td><?php echo $fila['Comentario'] ?></td>
            <td><?php echo $fila['Edad'] ?></td>
            <td><?php echo $fila['fecha'] ?></td>
            <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
            <td><a href="borrar.php?id=<?php echo $fila['id']?>">ELIMINAR</a></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>
