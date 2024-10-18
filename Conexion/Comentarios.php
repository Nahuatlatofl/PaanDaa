<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaanDaa/Conexion/CSS/comentarios.css">
    <link rel="stylesheet" href="/PaanDaa/CSS/styles.css">
    <script src="/PaanDaa/JS/webComponents.js"></script>
    <link rel="icon" href="/PaanDaa/CSS/favicon/favicon.ico" type="image/x-icon">
    <title>Comentarios</title>
    <script>
        function editarComentario(id, nombreCompleto) {
            const nuevoNombre = prompt("Editar Nombre de: " + nombreCompleto, nombreCompleto);
            if (nuevoNombre !== null && nuevoNombre.trim() !== "") {
                alert("Nuevo nombre: " + nuevoNombre + " (ID: " + id + ")");
                // Aquí podrías agregar lógica para enviar el nuevo nombre al servidor
            }
        }

        function confirmarEliminar(id, nombreCompleto) {
            const confirmacion = confirm("¿Estás seguro de que deseas eliminar el comentario de " + nombreCompleto + " (ID: " + id + ")?");
            if (confirmacion) {
                // Redirige a la página de eliminación
                window.location.href = "borrar.php?id=" + id;
            }
        }
    </script>
</head>

<body>
<custom-navbar></custom-navbar>
    
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
        $selec = $con->query("SELECT * FROM 4bmpg");
        while ($fila = $selec->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['NombreCompleto'] ?></td>
            <td><?php echo $fila['Comentario'] ?></td>
            <td><?php echo $fila['Edad'] ?></td>
            <td><?php echo $fila['fecha'] ?></td>
            <td><a href="javascript:void(0)" onclick="editarComentario(<?php echo $fila['id'] ?>, '<?php echo $fila['NombreCompleto'] ?>')">EDITAR</a></td>
            <td><a href="javascript:void(0)" onclick="confirmarEliminar(<?php echo $fila['id'] ?>, '<?php echo $fila['NombreCompleto'] ?>')">ELIMINAR</a></td>
        </tr>
        <?php } ?>
    </table>
    <custom-footer></custom-footer>
</body>
</html>
