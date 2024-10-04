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
                        const jsonData = JSON.parse(data);

                        if (jsonData.error) {
                            console.error('Error del servidor:', jsonData.error);
                            alert(jsonData.error);
                            return;
                        }

                        const navbar = document.querySelector('custom-navbar');
                        if (!navbar) {
                            console.error('Navbar no encontrado');
                            return;
                        }

                        const registerField = navbar.getRegisterField();
                        const userField = navbar.getUserField();
                        const usernameElement = navbar.getUsernameElement();

                        if (!registerField || !userField || !usernameElement) {
                            console.error('Uno de los elementos no se encontró');
                            return;
                        }

                        usernameElement.innerText = jsonData.username;
                        userField.classList.remove('disabled');
                        registerField.classList.add('disabled');

                    } catch (error) {
                        console.error('Error al parsear JSON:', error);
                        alert('Error al procesar la respuesta del servidor.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error en la conexión con el servidor.');
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

                        if (jsonData.error) {
                            console.error('Error del servidor:', jsonData.error);
                            alert(jsonData.error);
                            return;
                        }

                        const navbar = document.querySelector('custom-navbar');
                        if (!navbar) {
                            console.error('Navbar no encontrado');
                            return;
                        }

                        const registerField = navbar.getRegisterField();
                        const userField = navbar.getUserField();
                        const usernameElement = navbar.getUsernameElement();

                        if (!registerField || !userField || !usernameElement) {
                            console.error('Uno de los elementos no se encontró');
                            return;
                        }

                        usernameElement.innerText = jsonData.username;
                        userField.classList.remove('disabled');
                        registerField.classList.add('disabled');

                    } catch (error) {
                        console.error('Error al parsear JSON:', error);
                        alert('Error al procesar la respuesta del servidor.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error en la conexión con el servidor.');
                });
        });
    }
});
