class CustomNavbar extends HTMLElement {
    constructor() {
        super();

        let shadow = this.attachShadow({ mode: 'open' });
        const header = document.createElement('header');
        header.innerHTML = `
            <h1>
                <a href="Index.html" class="logo">PaaDaa</a>
            </h1>
            <ul>
                <li><a href="Index.html" class="active">Inicio</a></li>
                <li><a href="html/Acerca_De.html">Acerca de</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="Conexion/formulario.php">Opinar</a></li>
                <li><a href="Conexion/Comentarios.php">Reseñas</a></li>
            </ul>
            <ul id="register-field">
                <li><a href="html/Log_in.html" id="login" class="register">Log In</a></li>
                <li><a href="html/Sign_in.html" id="login" class="register">Sign In</a></li>
            </ul>
            <div class="footer disabled" style="color: white;" id="user-field">
                <ul>
                    <li>
                        <a href="#" aria-label="Usuario">
                            <i class="fas fa-user"></i>
                        </a>    
                        <h3 id="username">Usuario</h3>                
                    </li>
                </ul>
            </div>
        `;

        const linkElement = document.createElement('link');
        linkElement.setAttribute('rel', 'stylesheet');
        linkElement.setAttribute('href', 'http://localhost/PaanDaa/CSS/styles.css');

        shadow.appendChild(linkElement);
        shadow.appendChild(header);
    }
}

customElements.define("custom-navbar", CustomNavbar);

class CustomFooter extends HTMLElement {
    constructor() {
        super();

        let shadow = this.attachShadow({ mode: 'open' });
        const div = document.createElement('div');
        div.innerHTML = `
            <footer class="footer">
                <div class="list">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.533499223841!2d-98.24644318930703!3d19.302642744743295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd969b30c6a3d%3A0x3c5091eed9635c7b!2sCentro%20de%20Bachillerato%20Tecnol%C3%B3gico%20Industrial%20y%20de%20Servicios%20No.%203!5e0!3m2!1ses!2smx!4v1727738857468!5m2!1ses!2smx"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                        <p>Centro de Bachillerato Tecnológico Industrial y de Servicios No. 3</p>
                    </div>
                    <ul class="list">
                        <h2 class="title-list">PÁGINAS</h2>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                    <ul class="list">
                        <h2 class="title-list">LEGALES</h2>
                        <li><a href="#">Aviso Legal</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
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
            </footer>
        `;

        const linkElement = document.createElement('link');
        linkElement.setAttribute('rel', 'stylesheet');
        linkElement.setAttribute('href', 'http://localhost/PaanDaa/CSS/styles.css');

        shadow.appendChild(linkElement);
        shadow.appendChild(div);
    }
}

customElements.define("custom-footer", CustomFooter);
