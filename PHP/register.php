<?php
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nombre_completo = $_POST['nombre_completo'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $con->prepare("INSERT INTO usuarios (username, password, email, nombre_completo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $hashed_password, $email, $nombre_completo);

    if ($stmt->execute()) {
        $user_id = $stmt->insert_id; 

        session_start();
        $_SESSION['user_id'] = $user_id; 
        $_SESSION['username'] = $username; 
        $_SESSION['rol'] = 'usuario';
        echo json_encode(array(
            'userId' => $_SESSION['user_id'],
            'username' => $_SESSION['username'],
            'rol' => $_SESSION['rol']
        ));
        exit();
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>

