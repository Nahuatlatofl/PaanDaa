<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="icon" href="image-conexion/SYNTHMIND.ico">
    <link rel="stylesheet" href="\proyecto_web\Conexion\image-conexion\style2\vercoment.css">
</head>
<body>
    <table border="1px">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Nombre Completo</th>
                <th>Sugerencia</th>
                <th>Edad</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $selec = $con->query("SELECT * FROM 4bmpg");
            while ($fila = $selec->fetch_assoc()) {?>
                <tr>
                    <td data-label="ID"><?php echo $fila['id'] ?></td>
                    <td data-label="Nombre Completo"><?php echo $fila['NombreCompleto'] ?></td>
                    <td data-label="Sugerencia"><?php echo $fila['Comentario'] ?></td>
                    <td data-label="Edad"><?php echo $fila['Edad'] ?></td>
                    <td data-label="Fecha"><?php echo $fila['fecha'] ?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
    
</body>
</html>
