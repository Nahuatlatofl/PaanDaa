<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cofradia</title>
    <link rel="stylesheet" href="NEstilo.css">
    <link rel="stylesheet" href="NEstiloOfertas.css">
</head>
<body>
    
    <header> 
        <a href="index.html">
            <button class="menu">
                Inicio
            </button>
        </a>
        <a href="ofertas.php">
            <button class="menu">
               Ofertas
            </button>
        </a>
        <a href="suscripcion.html">
            <button class="menu">
                Suscribete
            </button>
        </a> 
        <a href="reseñas.php">
            <button class="menu">
                Reseñas
            </button>
        </a>
        <a href="nosotros.html">
            <button class="menu">
                Nosotros
            </button>
        </a>  
        <h1>
            <i>
             La cofradia
            </i>
        </h1>
        <a href="index.html">
            <img src="imagenes/logoc.png" class="logo" width="10%">
        </a>
        
    </header>
    <table>
        <td>
            <img src="imagenes/batmanPop.png" ><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/jazminPop.png" ><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/anaPop.png"><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/calamardoPop.png" ><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/narutoPop.png" ><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/sashaPop.png" ><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/ochacoPop.png"><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
        <td>
            <img src="imagenes/squirtlePop.png" ><br>
            <a href="suscripcion.html">
                <button >
                    Comprar
                </button>
            </a>
        </td>
    </table>
    <h4>
        <i>
            Estas buscando un producto ¿?<br>
            solo coloca el numero y presiona en buscar¡¡
        </i>
    </h4>
    <form action="buscar.php" method="post">
        <p>
            numero <br>
            <input type="number"
            size="27"
            name="numero">
          </p>
        <p>
        <input type="submit"
             name="Enviar">
        </p>
    </form><br>

    <h4>
        <i>
            Quieres agregar un producto ¿?<br>
            solo llena el formulario y agregalo¡¡
        </i>
    </h4>

    <form action="insertProducts.php" method="post" style="text-align: center;" >
        <p>
            numero <br>
            <input type="number"
            size="27"
            name="numero"
            class="eso">
          </p>
        <p>
          Nombre <br>
          <input type="text"
          size="27"
          name="nombre">
        </p>
        <p>
            Precio <br>
            <input type="number" 
            size="7"
            name="precio"
            class="eso">
        </p>
        <p>
            Serie <br>
            <input type="text" 
            size="27%"
            name="serie">
        </p>
       <p>
            <input type="submit"
             name="Enviar">
       </p>    
    </form>
    <footer>
        <h5>
            Nuestras politicas!!  
            <p class="pFooter">
                Es importante que conozcas las plítas de la empresa <br>
                de inicio a fin, para que así no existan complicaciones, <br>
                Todo lo que hacemos es para nuestra matoy comodidad. <br>
            </p>
            <a href="politicas.html" class="enlace">politicas</a>
        </h5>
        <img src="imagenes/whats.png" class="redes">
        <a href="https://www.instagram.com/lacofradia_tlx/p/C5q_EiPOvx8/?img_index=1">
            <img src="imagenes/insta.png" class="redes">
        </a>
        <a href="https://www.facebook.com/CofradiaTlaxcala/">
            <img src="imagenes/face.png" class="redes">
        </a>
    </footer>    
 </body>
 </html>