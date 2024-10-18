class CustomNavbar extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
    }

    connectedCallback() {
        this.render();
        this.setupEventListeners();
        this.updateActiveLink();
        this.updateUsername(); // Verifica y actualiza el nombre de usuario en todas las páginas
    }

    render() {
        const header = document.createElement('header');
        header.innerHTML = `
            <h1>
                <a href="/PaanDaa/Index.php" class="logo">PaaDaa</a>
            </h1>
            <ul>
                <li><a href="/PaanDaa/Index.php" class="nav-link">Inicio</a></li>
                <li><a href="/PaanDaa/productos.php" class="nav-link">Productos</a></li>
                <li><a href="/PaanDaa/html/Politica.php" class="nav-link">Política</a></li>
                <li><a href="/PaanDaa/Conexion/formulario.php" class="nav-link">Opinar</a></li>
                <li><a href="/PaanDaa/Conexion/Comentarios.php" class="nav-link">Reseñas</a></li>
            </ul> 
            <ul id="register-field">
                <li><a href="/PaanDaa/html/Log_in.php" class="register">Log In</a> <a href="/PaanDaa/html/Sign_in.php" class="register">Sign In</a></li>
            </ul>
            <div class="footer" style="color: white;" id="user-field">
                <h3 id="username">Usuario</h3>                
                <button id="logout">Logout</button>
            </div>
        `;

        const linkElement = document.createElement('link');
        linkElement.setAttribute('rel', 'stylesheet');
        linkElement.setAttribute('href', '/PaanDaa/CSS/styles.css');

        this.shadowRoot.appendChild(linkElement);
        this.shadowRoot.appendChild(header);

        this.shadowRoot.getElementById('user-field').style.display = 'none'; // Ocultar por defecto
    }

    updateActiveLink() {
        const links = this.shadowRoot.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname.split('/').pop();
        links.forEach(link => {
            const linkPath = link.getAttribute('href').split('/').pop();
            if (currentPath === linkPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    setupEventListeners() {
        const registerButton = this.shadowRoot.querySelector('.register');
        const loginButton = this.shadowRoot.querySelector('.register');

        registerButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.location.href = '/PaanDaa/html/Sign_in.php';
        });

        loginButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.location.href = '/PaanDaa/html/Log_in.php';
        });

        const logoutButton = this.shadowRoot.getElementById('logout');
        logoutButton.addEventListener('click', () => {
            this.logout();
        });
    }

    setUsername(username) {
        this.username = username;
        this.showUserField();
    }

    showUserField() {
        this.shadowRoot.getElementById('user-field').style.display = 'block';
        this.shadowRoot.getElementById('register-field').style.display = 'none';
        this.shadowRoot.getElementById('username').textContent = this.username;
    }

    logout() {
        fetch('/PaanDaa/PHP/logout.php')
            .then(response => {
                if (response.ok) {
                    window.location.href = '/PaanDaa/Index.php';
                } else {
                    console.error('Error al cerrar sesión');
                    alert('Error al cerrar sesión. Por favor, intenta nuevamente.');
                }
            })
            .catch(error => {
                console.error('Error de conexión:', error);
                alert('Error de conexión. Por favor, intenta nuevamente.');
            });
    }

    updateUsername() {
        // Intentar obtener el nombre del usuario desde `localStorage`
        const username = localStorage.getItem('username');
        if (username) {
            this.setUsername(username);
        } else {
            this.getUsernameFromSession().then(username => {
                if (username) {
                    this.setUsername(username);
                    // Guardar el nombre en `localStorage` para futuras referencias
                    localStorage.setItem('username', username);
                }
            });
        }
    }

    async getUsernameFromSession() {
        try {
            const response = await fetch('/PaanDaa/Conexion/register.php');
            if (!response.ok) {
                throw new Error('Error al obtener el nombre de usuario');
            }

            const jsonData = await response.json();
            const username = jsonData.username;

            if (username) {
                return username;
            }
        } catch (error) {
            console.error('Error al obtener el nombre de usuario:', error);
        }
        return null;
    }

}

customElements.define('custom-navbar', CustomNavbar);

class CustomFooter extends HTMLElement {
    constructor() {
        super();

        let shadow = this.attachShadow({ mode: 'open' });
        const div = document.createElement('div');
        div.innerHTML = `
        

        <footer class="footer">
        <div class="list">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.533499223841!2d-98.24644318930703!3d19.302642744743295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd969b30c6a3d%3A0x3c5091eed9635c7b!2sCentro%20de%20Bachillerato%20Tecnol%C3%B3gico%20Industrial%20y%20de%20Servicios%20No.%203!5e0!3m2!1ses!2smx!4v1727738857468!5m2!1ses!2smx"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <ul class="list">
            <h2 class="title-list">PÁGINAS</h2>
            <li><a href="/PaanDaa/Index.php">Inicio</a></li>
            <li><a href="/PaanDaa/productos.php">Productos</a></li>
            <li><a href="/PaanDaa/Conexion/Comentarios.php">Reseñas</a></li>
        </ul>
        <ul class="list">
            <h2 class="title-list">LEGALES</h2>
            <li><a href="/PaanDaa/html/Politica.php">Politica de privacidad</a></li>
        </ul>
        <div class="list">
            <h2 class="title-list">SÍGUENOS</h2>
            <li><a href=""></a>Instagram</li>
            <li><a href=""></a>Facebook</li>
        </div>
        <div class="footer-bottom">
            <p>Centro de Bachillerato Tecnológico Industrial y de Servicios No. 3</p>
        </div>
    </footer>
 `;

        const linkElement = document.createElement('link');
        linkElement.setAttribute('rel', 'stylesheet');
        linkElement.setAttribute('href', '/PaanDaa/CSS/styles.css');

        shadow.appendChild(linkElement);
        shadow.appendChild(div);
    }
}

customElements.define("custom-footer", CustomFooter);
