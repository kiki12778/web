<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-image: url('imfondo.avif'); /* Añade la imagen de fondo */
            background-size: cover; /* Cubre toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* No repetir la imagen */
        }
        .header {
            margin-bottom: 20px;
        }
        .description-container {
            border: 1px solid black; /* Contorno del cuadro en negro */
            border-radius: 8px; /* Esquinas redondeadas */
            padding: 20px;
            width: 80%; /* Ancho del cuadro */
            max-width: 800px; /* Ancho máximo */
            background-color: rgba(249, 249, 249, 0.9); /* Color de fondo con transparencia */
            margin: auto; /* Centra el cuadro en la página */
        }
        .content {
            display: flex;
            justify-content: space-between; /* Espaciado entre texto e imagen */
            align-items: center; /* Alinea verticalmente el contenido */
        }
        .text-area {
            flex: 1;
            text-align: left;
            margin-right: 20px; /* Espacio entre el texto y la imagen */
        }
        .image-area {
            flex-shrink: 0; /* No permitir que la imagen se reduzca */
            max-width: 150px; /* Ancho máximo de la imagen */
        }
        .menu {
            margin: 20px 0; /* Espacio arriba y abajo del menú */
        }
        .menu .large-button {
            display: inline-block;
            padding: 15px 80px; /* Botones más alargados */
            margin: 10px; /* Espacio entre botones */
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center; /* Centra el texto del botón */
            font-size: 1.4em; /* Tamaño de fuente más grande */
            font-weight: bold; /* Negrita para mayor énfasis */
        }
        .menu .large-button:hover {
            background-color: #0056b3;
        }
        .menu .small-button {
            display: inline-block;
            padding: 10px 15px; /* Botones más pequeños */
            margin: 5px; /* Espacio entre botones */
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center; /* Centra el texto del botón */
            font-size: 1em; /* Tamaño de fuente más pequeño */
        }
        .menu .small-button:hover {
            background-color: #0056b3;
        }
        .header img, .image-area img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="imencabezado.jfif" alt="Encabezado">
    </div>
    
    <h1>PresuApp</h1>

    <div class="description-container">
        <div class="content">
            <div class="text-area">
                <h2>Página para administrar tu presupuesto</h2>
                <p>
                    Bienvenido a nuestra plataforma, donde la simplicidad y la funcionalidad se unen para ofrecerte una experiencia óptima. 
                    En esta página, puedes acceder fácilmente a las dos opciones principales: registrarte como nuevo usuario o iniciar sesión 
                    si ya posees una cuenta.
                </p>
                <p>
                    El encabezado presenta una imagen atractiva que refleja nuestra misión y valores, mientras que el menú principal te ofrece 
                    enlaces claros y directos. A la izquierda, encontrarás una sección de texto que proporciona información adicional sobre 
                    nuestros servicios, destacando los beneficios de unirte a nuestra comunidad y cómo puedes aprovechar al máximo nuestra 
                    plataforma.
                </p>
                <p>
                    Nuestro objetivo es hacer que cada usuario se sienta bienvenido y apoyado, asegurando que tengas todas las herramientas 
                    necesarias para unirte y participar en nuestra comunidad. ¡Explora, regístrate y forma parte de algo grande!
                </p>
            </div>
            <div class="image-area">
                <img src="grafdinero.png" alt="Imagen de gráfico de dinero">
            </div>
        </div>

        <div class="menu">
            <a href="altas.php" class="large-button">Registrar</a> 
            <a href="iniciar_sesion.php" class="large-button">Iniciar Sesión</a>
        </div>
        
        <div class="menu">
            <a href="cambios1.php" class="small-button"> CAMBIOS</a>
            <a href="consultausu.php" class="small-button">CONSULTA USUARIO</a>
            <a href="bajasdin.php" class="small-button">BAJAS</a>
        </div>
    </div>
</body>
</html>
