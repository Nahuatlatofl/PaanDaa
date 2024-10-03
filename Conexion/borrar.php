<?php
include 'conexion.php';

$id = $_REQUEST['id'];
$del =$con-> query("DELETE FROM 4bmpg WHERE id='$id'");
if($del){
    echo "<script>
    location.href='Comentarios.php';
    </script>";
}else{
    echo"<script>
    alert('El registro no pudo ser Eliminado');
    location.href='Comentarios.php';
    </script>";
}

?>