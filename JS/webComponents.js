class CustomNavbar extends HTMLElement {
    constructor() { 
        super();
        this.attachShadow({ mode: 'open' });
    }
    
    connectedCallback() {
        this.render();
        this.updateActiveLink();
        this.checkUserSession();
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
                <li><a href="/PaanDaa/Acerca_de.html" class="nav-link">Acerca de</a></li>
                <li><a href="/PaanDaa/html/Politica.html" class="nav-link">Politica</a></li>
                <li><a href="#" class="nav-link">Contacto</a></li>
                <li><a href="/PaanDaa/Conexion/formulario.php" class="nav-link">Opinar</a></li>
                <li><a href="/PaanDaa/Conexion/Comentarios.php" class="nav-link">Reseñas</a></li>
            </ul> 
            <ul id="register-field">
                <li><a href="/PaanDaa/html/Log_in.html" class="register">Log In</a> <a href="/PaanDaa/html/Sign_in.html" class="register">Sign In</a></li>
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

        this.shadowRoot.getElementById('user-field').style.display = 'none';
    }

    async checkUserSession() {
        try {
            const response = await fetch('/PaanDaa/PHP/login.php'); 
            const data = await response.json();

            if (data.loggedIn) {
                this.showUserInfo(data.username);
            } else {
                this.showLoginRegister();
            }
        } catch (error) {
            console.error('Error al comprobar la sesión:', error);
        }
    }

    showUserInfo(username) {
        const userField = this.shadowRoot.getElementById('user-field'); 
        userField.style.display = 'block';  
        userField.querySelector('#username').innerText = username; 
        this.shadowRoot.getElementById('register-field').style.display = 'none';  
    }

    showLoginRegister() {
        this.shadowRoot.getElementById('register-field').style.display = 'block'; 
        const userField = this.shadowRoot.getElementById('user-field');
        userField.style.display = 'none';  
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

}

// Define el nuevo elemento
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
            <li><a href="/PaanDaa/Index.html">Inicio</a></li>
            <li><a href="/PaanDaa/html/Acerca_de.html">Acerca de</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <ul class="list">
            <h2 class="title-list">LEGALES</h2>
            <li><a href="#">Aviso Legal</a></li>
            <li><a href="/PaanDaa/html/Politica.html">Términos y Condiciones</a></li>
        </ul>
        <div class="list">
            <h2 class="title-list">SÍGUENOS</h2>
            <div class="social-icons">
                <a href="#" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
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
