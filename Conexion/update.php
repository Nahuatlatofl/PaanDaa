<?php include 'conexion.php';

$fecha = $_POST['id'];
$name = $_POST['NombreCompleto'];
$act = $con-> query("UPDATE 4bmpg SET NombreCompleto='$name' WHERE id='$fecha'");
if ($act) {
    echo "<script>
    location.href='/PaanDaa/Conexion/Comentarios.php'
    </script>";
}else {
    "<script>
    location.href='actualizar.php? id=".$id."';
    </script>";
}
?>