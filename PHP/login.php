<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT * FROM usuarios WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $fila = $result->fetch_assoc();
  
        if (password_verify($password, $fila['password'])) {
            session_start();
            $_SESSION['user_id'] = $fila['id'];
            $_SESSION['username'] = $fila['username'];
            $_SESSION['rol'] = $fila['rol'];
            
            echo json_encode(array(
                'user_id' => $_SESSION['user_id'],
                'username' => $_SESSION['username'],
                'rol' => $_SESSION['rol']
            ));
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
        exit();
    }
}
?>