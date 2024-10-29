<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Datos</title>
    <link rel="stylesheet" type="text/css" href="cambios.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(D.png); /* Fondo oscuro */
            margin: 0;
            padding: 20px;
            color: #333; /* Color de texto oscuro */
            animation: fadeIn 1.5s; /* Efecto de aparición */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        header {
            width: 80%;
            text-align: center;
            padding: 20px;
            background-color: #39b869; /* Color verde */
            border-radius: 8px;
            margin: 20px auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra suave */
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: white; /* Texto blanco */
        }

        .container {
            max-width: 600px; /* Ancho máximo del contenedor */
            margin: 20px auto; /* Centrar el contenedor */
            background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco con transparencia */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra */
        }

        label {
            display: block; /* Hacer el label un bloque */
            margin-bottom: 10px; /* Margen inferior */
            color: #39b869; /* Color verde */
        }

        input[type="text"], input[type="submit"] {
            width: 100%; /* Ancho completo */
            padding: 10px;
            margin: 10px 0; /* Margen entre elementos */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #39b869; /* Color del botón */
            color: white; /* Color del texto del botón */
            cursor: pointer; /* Cursor en forma de mano */
            transition: background-color 0.3s; /* Transición de color */
        }

        input[type="submit"]:hover {
            background-color: #ff5733; /* Color más claro al pasar el ratón */
        }

        .alert {
            color: red; /* Color de alerta */
            margin: 10px 0; /* Margen arriba y abajo */
        }

        button {
            background-color: #39b869; /* Color del botón de menú */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #ff5733; /* Color más claro al pasar el ratón */
        }
    </style>
</head>
<body>

<header>
    <h1>Editar Datos</h1>
</header>

<div class="container">
    <?php
    // Comprobar si el formulario se ha enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conexion = mysqli_connect("localhost", "root", "") or die('Problema conectando porque: ' . mysqli_error());

        // Seleccionando la base de datos
        mysqli_select_db($conexion, 'dinero');

        // Recibiendo los datos del formulario
        $fecha = $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $monto = $_POST['monto'];
      

        // Actualizando los datos
        $resultado = mysqli_query($conexion, "UPDATE gastos SET fecha='$fecha', descripcion='$descripcion', monto='$monto' WHERE usuario='$usuario'") or die("Problemas en el update: " . mysqli_error($conexion));

        if ($resultado) {
            echo '<p>Registro editado exitosamente.</p>';
        } else {
            echo '<p class="alert">El contacto no existe.</p>';
        }

        mysqli_close($conexion);
    } else {
        echo '<p class="alert">No se han recibido datos para editar.</p>';
    }
    ?>

    <a href="http://localhost/arg_php/hospital/hospital/Menu.php">
        <button type="button">MENU</button>
    </a>
</div>

</body>
</html>
