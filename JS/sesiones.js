document.addEventListener("DOMContentLoaded", ()=>{
    fetch('session_data.php')
            .then(response => {
                // Verificar que la respuesta sea correcta
                if (!response.ok) {
                    throw new Error('Error en la petición');
                }
                // Convertir la respuesta a JSON
                return response.json();
            })
            .then(data => {
                // Asignar los datos obtenidos a los elementos HTML
                document.getElementById('usuario').innerText = data.usuario;
                document.getElementById('email').innerText = data.email;
            })
            .catch(error => {
                console.error('Error:', error);
            });
})