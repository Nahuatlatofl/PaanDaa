<?php
include 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nombre_completo = $_POST['nombre_completo'];

    $stmt = $con->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(array('error' => 'El email ya está registrado.'));
        exit(); 
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $con->prepare("INSERT INTO usuarios (username, password, email, nombre_completo) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $hashed_password, $email, $nombre_completo);

    try {
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
            echo json_encode(array('error' => 'Error al registrar: ' . $stmt->error));
        }
    } catch (mysqli_sql_exception $e) {
        echo json_encode(array('error' => $e->getMessage()));
    } finally {
        $stmt->close();
        $con->close();
    }
}
?>

