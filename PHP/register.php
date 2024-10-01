<?php
include 'db.php'; // Asegúrate de que este archivo tenga la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nombre_completo = $_POST['nombre_completo'];

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta para insertar el nuevo usuario
    $stmt = $con->prepare("INSERT INTO usuarios (username, password, email, nombre_completo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $hashed_password, $email, $nombre_completo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        header("Location: ../Index.html");
        exit();
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $con->close();
}
?>
