<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/productos.css"> <!-- CSS para el diseño de los productos -->
    <link rel="icon" href="CSS/favicon/favicon.ico" type="image/x-icon">
    <script src="JS/webComponents.js"></script>
    <title>PaanDaa</title>
</head>

<body>
    <!-- Navegación personalizada -->
    <custom-navbar></custom-navbar>
   
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
        <?php foreach ($resultado as $row) { ?>
            <div class="col">
                <div class="card shadow-sm">
                    <?php
                    $id = $row['id'];
                    $imagen = "img/productos/" . $id . "/pan.jpeg";

                    if (!file_exists($imagen)) {
                        $imagen = "img/error.jpeg";
                    }
                    ?>
                    <img src="<?php echo $imagen; ?>" class="card-img-top" alt="Imagen del producto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                        <p class="card-text">$<?php echo number_format($row['precio'], 2); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                            <a href="#" class="btn btn-success">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


    <!-- Footer personalizado -->
    <custom-footer></custom-footer>

</body>
<script src="JS/carrousel.js"></script>
</html>
