<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion</title>
</head>
<body>
<table border="1px">
        <th>Fecha</th>
        <th>Nombre Completo</th>
        <th>sugerencia</th>
        <th>Edad</th>
        <th>Actualizar</th>
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
                <td id="A1"> <a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR </a></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>