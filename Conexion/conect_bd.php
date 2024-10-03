<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link rel="stylesheet" href="\PaanDaa\Conexion\image-conexion\style2\connect.css">
    
</head>
<body>
    <div class="confirmation">
        <?php
        include 'conexion.php';
        $name = $_POST['NombreCompleto'];
        $Coment = $_POST['Comentario'];
        $age= $_POST['Edad'];
        $Registro= $_POST['fecha'];

        $insert = $con->query("INSERT INTO 4bmpg(NombreCompleto,Comentario,Edad,fecha) VALUES ('$name','$Coment','$age','$Registro')");

        if ($insert) {
            echo "<p>Registro Exitoso de datos</p>";
            header("refresh:1; url=formulario.php");
        } else {
            echo "<p>NO se Registró Exitosamente</p>";
        }
        ?>
    </div>
</body>
</html>
