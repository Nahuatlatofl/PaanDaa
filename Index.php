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
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="CSS/favicon/favicon.ico" type="image/x-icon">
    <script src="JS/webComponents.js"></script>
    <title>PaanDaa</title>
</head>
<body>
    <custom-navbar></custom-navbar>
    
    <section class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="CSS/image/carrousel-1.jpg" alt="Imagen-1">
                <div class="carousel-text">
                    <h2>"A falta de pan, buenas son tortas"</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="CSS/image/carrousel-2.jpg" alt="Imagen-2">
                <div class="carousel-text">
                    <h2>"Pan, uvas y queso, saben a beso"</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="CSS/image/carrousel-3.jpg" alt="Imagen-3">
                <div class="carousel-text">
                    <h2>"Comiendo pan y morcilla, nadie tiene pesadilla"</h2>
                </div>
            </div>
        </div>
        <div class="controls">
            <span class="control-left" onclick="prevSlide()">&#10094;</span>
            <span class="control-right" onclick="nextSlide()">&#10095;</span>
        </div>
    </section>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <?php
             foreach($resultado as $row){
            ?>
             <div class="col">
                <div class="card shadow-sm">
                    <?php
                    $id = $row['id'];
                    $imagen= "img/productos/".$id."/pan.jpeg";

                    if (!file_exists($imagen))
                    {
                        $imagen="img/error.jpeg";
                    }

                    ?>
                    <img src="<?php echo $imagen; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                        <p class="card-text"><?php echo $row['precio']; ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>
                            <a href="#" class="btn btn-success">Agregar</a>
                        </div>
                    </div>
                </div>
             </div>
            <?php
            }
            ?> 
  
    <custom-footer></custom-footer>
    
</body>
<script src="JS/carrousel.js"></script>
</html>
