<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/PaanDaa/CSS/styles.css">
    <script src="/PaanDaa/JS/webComponents.js"></script>
    <link rel="icon" href="/PaanDaa/CSS/favicon/favicon.ico" type="image/x-icon">
    <title>Formulario</title>
</head>

<body>

    <style>
        /* Estilos generales del cuerpo */

        /* Contenedor del formulario centrado */
        #formulario-container {
            margin-top: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        /* Estilos del formulario */
        #formulario {
            background-color: #b98a0a;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgb(255, 255, 255);
            /* Sombra para darle profundidad */
            border: 1px solid #007bff;
            /* Borde con color que resalta */
        }

        /* Estilos de los inputs */
        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Estilos al enfocar inputs */
        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px #007bff;
        }

        /* Botón submit */
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Botón de comentarios */
        button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Estilo del texto del botón */
        button a {
            color: white;
            text-decoration: none;
        }

        /* Título del formulario */
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        /* Enlaces */
        .links {
            text-align: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Estilo de las etiquetas */
        label {
            font-family: Georgia, serif;
            color: white;
        }
    </style>

    <custom-navbar></custom-navbar>

    <div id="formulario-container">
        <div id="formulario">
            <h1>Comenta</h1>
            <form id="comentarioForm">
                <label for="NombreCompleto">Nombre Completo:</label><br>
                <input type="text" id="NombreCompleto" name="NombreCompleto" placeholder="Nombre Completo" required><br>

                <label for="Comentario">Sugerencia o queja:</label><br>
                <input type="text" id="Comentario" name="Comentario" placeholder="Sugerencia o queja" required><br>

                <label for="Edad">Edad:</label><br>
                <input type="number" id="Edad" name="Edad" placeholder="Edad" required><br>

                <label for="fecha">Fecha actual:</label><br>
                <input type="text" id="fecha" name="fecha" placeholder="Fecha ddmmyy" readonly><br>

                <input type="submit" value="Guardar">
            </form>




        </div>
    </div>

    <custom-footer></custom-footer>

    <script>
        function setFechaActual() {
            const today = new Date();
            const day = String(today.getDate()).padStart(2, '0');
            const month = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
            const year = today.getFullYear(); // Usa todo el año completo

            const fechaActual = `${day}${month}${year}`;
            document.getElementById('fecha').value = fechaActual;
        }

        window.onload = setFechaActual;
    </script>
    <script>
        document.getElementById('comentarioForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que se recargue la página

            const formData = new FormData(this); // Obtiene los datos del formulario

            // Enviar datos al servidor con fetch
            fetch('conect_bd.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(result => {
                    // Mostrar el resultado en una alerta
                    alert(result);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Ocurrió un error al enviar el formulario.');
                });
        });
    </script>

</body>

</html>