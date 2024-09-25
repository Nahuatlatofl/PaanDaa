<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Comentarios</title>
    <link rel="stylesheet" href="\proyecto_web\Conexion\image-conexion\style2\coment.css">
</head>

<body>
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
        while ($fila = $selec->fetch_assoc()) {?>
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
            <th>Eliminar
            </th>
        </tr>
        <?php 
        include 'conexion.php';
        $selec = $con -> query("SELECT * FROM 4bmpg");
        while ($fila = $selec-> fetch_assoc()) {?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['NombreCompleto'] ?></td>
            <td><?php echo $fila['Comentario'] ?></td>
            <td><?php echo $fila['Edad'] ?></td>
            <td><?php echo $fila['fecha'] ?></td>
            <td id="A1"><a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
            <td id="A1"><a href="borrar.php?id=<?php echo $fila['id']?>">ELIMINAR</a></td>
        </tr>
        <?php } ?>
    </table>
    <center>
        <button><a href="/Paandaa/Index.php">PannDaa</a></button>
    </center>
</body>

</html>
