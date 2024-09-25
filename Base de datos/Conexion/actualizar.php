<?php include 'conexion.php';
$id = $_REQUEST['id'];

$selec =$con -> query("SELECT * FROM 4bmpg WHERE id='$id' ");
if ($fila = $selec-> fetch_assoc());{
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image-conexion/SYNTHMIND.ico">
    <title>Actualizacion</title>
    <link rel="stylesheet" href="\proyecto_web\Conexion\image-conexion\style2\act.css">

   
</head>

<body>
    <form action="/proyecto_web/Conexion/update.php" method="post">
        <input type="hidden" name='id' value="<?php echo $id ?>">
        <input type="text" name='NombreCompleto' placeholder="Nombre Completo"
            value="<?php echo $fila['NombreCompleto'] ?>"><br>
        <input type="submit" value="actualizar">
    </form><br>
</body>

</html>