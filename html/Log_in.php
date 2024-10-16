<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaanDaa/CSS/log_in.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="../CSS/favicon/favicon.ico" type="image/x-icon">
    <script src="http://localhost/PaanDaa/JS/webComponents.js"></script>
    <title>PaanDaa</title>
</head>
<body> 
    <custom-navbar></custom-navbar>

    <div class="form-container">
        <form action="../PHP/login.php" method="POST" class="login-form" id="login-form">
            <h2 class="form-title">Formulario de acceso</h2>
            <label for="username" class="form-label">Usuario o Email:</label>
            <input type="text" name="username" id="username" class="form-input" required>

            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-input" required>

            <input type="submit" value="Iniciar Sesión" class="submit-btn">
        </form>
    </div>
</body>
<script src="../JS/sesiones.js"></script>
</html>
