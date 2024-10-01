if (isLoggedIn) {
    document.getElementById('auth-links').style.display = 'none'; // Ocultar enlaces de login
    document.getElementById('user-info').style.display = 'block'; // Mostrar información del usuario
    document.getElementById('username-display').innerText = "Hola, " + "<?php echo $_SESSION['username']; ?>"; // Mostrar nombre de usuario
} else {
    document.getElementById('auth-links').style.display = 'block'; // Mostrar enlaces de login
    document.getElementById('user-info').style.display = 'none'; // Ocultar información del usuario
}