<?php
include 'conexion.php';

$id = $_REQUEST['numero'];

$selec2 = $conect -> query("SELECT * FROM productos WHERE numero='$id' ");

if($fila2 = $selec2 -> fetch_assoc())
{}
?>

<doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar</title>
    <link rel="stylesheet" href="NEstilo.css">
    <link rel="stylesheet" href="NEstiloRese.css">
</head>
<body>
<header> 
        <a href="index.html">
            <button>
                Inicio
            </button>
        </a>
        <a href="ofertas.php">
            <button>
               Ofertas
            </button>
        </a>
        <a href="suscripcion.html">
            <button>
                Suscribete
            </button>
        </a> 
        <a href="reseñas.php">
            <button>
                Reseñas
            </button>
        </a> 
        <h1>
            <i>
             La cofradia
            </i>
        </h1>
        <img src="imagenes/logoc.png" width="10%">
    </header>
    <form action="update.php" method="post">
        
            <input type="hidden" name='numero' value="<?php echo $id ?>" placeholder="Ingrese el numero" ><br>
        
        <table border="2px">
    <th>numero</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Serie</th>

    <?php
    $selec2= $conect -> query("SELECT * FROM productos WHERE numero='$id'");
    while($fila2 = $selec2 -> fetch_assoc()){?>
        <tr>
            <td> <?php echo $fila2['numero']?> </td>
            <td> <?php echo $fila2['nombre']?></td>
            <td> <?php echo $fila2['precio']?> </td>
            <td> <?php echo $fila2['tipo']?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>