<?php
include 'conexion.php';

$id = $_POST['numero'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$tipo = $_POST['tipo'];

$insert2 = $conect  -> query ("INSERT INTO productos(numero, nombre, precio, tipo)
                             VALUES ('$id','$nombre', '$precio', '$tipo')");

if($insert2)
{
    echo"Se almaceno de manera correcta";
}
else
{
    echo"No se almaceno de manera correcta";
}
?>