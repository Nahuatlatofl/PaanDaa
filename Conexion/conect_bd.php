<?php
include 'conexion.php';

$name = $_POST['NombreCompleto'];
$Coment = $_POST['Comentario'];
$age = $_POST['Edad'];
$Registro = $_POST['fecha'];

$insert = $con->query("INSERT INTO 4bmpg(NombreCompleto,Comentario,Edad,fecha) VALUES ('$name','$Coment','$age','$Registro')");

if ($insert) {
    echo "Registro Exitoso de datos";
} else {
    echo "No se Registró Exitosamente";
}
?>
