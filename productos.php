<?php
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id, nombre, precio, descripcion FROM productos WHERE activo=1");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="JS/webComponents.js"></script>
    <title>PaanDaa</title>
</head>

<body>
    <custom-navbar></custom-navbar>
   
    <div class="container">
        <div class="product-grid">
            <?php foreach ($resultado as $row) { ?>
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
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal" 
                                   onclick="showDetails('<?php echo $row['nombre']; ?>', '<?php echo htmlspecialchars($row['descripcion']); ?>')">Detalles</a>
                            </div>
                            <a href="#" class="btn btn-success">Agregar</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Detalles del Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="productDescription">Descripción del producto aquí...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <custom-footer></custom-footer>


    <script src="JS/carrousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        function showDetails(nombre, descripcion) {
            document.getElementById('productModalLabel').innerText = nombre;
            document.getElementById('productDescription').innerText = descripcion;
        }
    </script>
</body>
</html>
