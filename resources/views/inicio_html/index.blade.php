<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veibul</title>
    <!-- Biblioteca Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color:  #F5EBE0;  /* Fondo blanco */
        }

        .franja-negra {
            background-color: #000000; /* Franja negra */
            color: #ffffff; /* Texto blanco */
            padding: 10px;
            width: 100%;
            display: block;
        }

        .mensaje {
            margin: 50px;
            font-size: small;
            color: #ffffff; /* Texto blanco */
        }

        .veibul {
            font-size: x-large; /* Tamaño más grande que larger */
            margin-top: 20px;
            margin-bottom: 0; /* Elimina el margen inferior */
            color: #000000; /* Texto negro */
            font-family: 'High Tower Text', serif;
            margin-right: auto; /* Centra horizontalmente */
            margin-left: auto; /* Centra horizontalmente */
        }

        .nav-bar {
            background-color: #000000; /* Color de fondo de la barra de navegación */
            color: #ffffff; /* Color del texto de la barra de navegación */
            padding: 10px;
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Ajuste de espacio superior */
        }

        .nav-link {
            margin: 0 20px; /* Espacio entre enlaces de la barra de navegación */
            text-decoration: none;
            color: #ffffff;
            font-family: 'High Tower Text', serif;
            text-align: center; /* Centra el texto */
        }

        .icon-container {
            float: right; /* Alinea los iconos a la derecha */
            margin-top: 10px; /* Espacio superior reducido */
            margin-right: 20px; /* Espacio derecho */
        }

        .carrito-icon,
        .buscador-icon,
        .fa-user {
            font-size: 24px; /* Tamaño del icono */
            color: #000000; /* Color del icono */
            margin-left: 10px; /* Espacio entre los iconos */
        }

        img.full-width {
            width: 100%; /* Asegura que la imagen ocupe el ancho completo */
            height: auto; /* Mantiene la proporción de aspecto */
        }
        h1 {
            font-size: 50px;
            font-weight: bold;
            color: #000000;
        }

        .button {
            background-color: #000000;
            color: #FFFFFF;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 23px;
            margin: 20px 2px;
            cursor: pointer;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="franja-negra">
        ¡Celebra un día especial con ventajas exclusivas! Regístrate y aprovecha hasta un 20 % de descuento: <a href="/registrarse" style="color: #ffffff;">registrarse</a>
    </div>
    <div class="veibul">
        VEIBUL
        <div class="icon-container">
            <i class="fas fa-user"></i>
            <i class="fas fa-shopping-cart carrito-icon"></i>
            <i class="fas fa-search buscador-icon"></i>
        </div>
    </div>
    <div class="nav-bar">
        <a href="#" class="nav-link">HOMBRE</a>
        <a href="#" class="nav-link">MUJER</a>
    </div>
    <img src="https://i.pinimg.com/474x/a8/fa/d5/a8fad5d4f6e01640bf8b6648bb0915ad.jpg" alt="Mujer con ropa de moda" class="full-width">

    <h1>NUEVAS COLECCIONES DE NUESTRA MARCA</h1>
    <button class="button">VER MÁS</button>
</body>
</html>
