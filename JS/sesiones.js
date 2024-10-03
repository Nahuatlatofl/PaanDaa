document.addEventListener("DOMContentLoaded", () => {
    const registerForm = document.getElementById('register-form');
    if (registerForm) {
        registerForm.addEventListener('submit', (event) => {
            event.preventDefault(); 
            const formData = new FormData(registerForm); 
            fetch('../PHP/register.php', {
                method: 'POST',
                body: formData 
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la petición');
                }
                return response.text();
            })
            .then(data => {
                console.log('Respuesta del servidor:', data);

                try {
                    const jsonData = JSON.parse(data); // Intenta parsear a JSON
                    document.getElementById('username').innerText = jsonData.username;
                    document.getElementById('user-field').classList.remove('disabled');
                    document.getElementById('register-field').classList.add('disabled');
                    window.location.href = '../Index.html';
                } catch (error) {
                    console.error('Error al parsear JSON:', error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }

    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', (event) => {
            event.preventDefault(); 
            const formData = new FormData(loginForm); 
            fetch('../PHP/login.php', {
                method: 'POST',
                body: formData 
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la petición');
                }
                return response.text();
            })
            .then(data => {
                console.log('Respuesta del servidor:', data);

                try {
                    const jsonData = JSON.parse(data); 
                    document.getElementById('username').innerText = jsonData.username;
                    document.getElementById('user-field').classList.remove('disabled');
                    document.getElementById('register-field').classList.add('disabled');
                    window.location.href = '../Index.html'; 
                } catch (error) {
                    console.error('Error al parsear JSON:', error);
                }
                
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }
});
