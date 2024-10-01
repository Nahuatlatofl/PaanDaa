<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Buscar el usuario en la base de datos
    $stmt = $con->prepare("SELECT * FROM usuarios WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $fila = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($password, $fila['password'])) {
            // Iniciar sesión
            session_start();
            $_SESSION['user_id'] = $fila['id'];
            $_SESSION['username'] = $fila['username'];
            $_SESSION['rol'] = $fila['rol'];
            // Redirigir al panel de control o página principal
            header("Location: dashboard.php");
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>