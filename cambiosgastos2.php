<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambios de Datos de Usuario</title>
    <link rel="stylesheet" type="text/css" href="usuario.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(D.png); /* Fondo oscuro */
            margin: 0;
            padding: 0;
            color: #000000; /* Color de texto negro */
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

        .form-container {
            max-width: 600px; /* Ancho máximo del formulario */
            margin: 20px auto; /* Centrar el formulario */
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

        button {
            background-color: #39b869; /* Color del botón de menú */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff5733; /* Color más claro al pasar el ratón */
        }

        .alert {
            color: red; /* Color de alerta */
            margin: 10px 0; /* Margen arriba y abajo */
        }

        aside {
            background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco */
            padding: 15px;
            border-radius: 10px;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        aside h3 {
            color: rgb(209, 14, 5); /* Color de encabezados */
        }

        a {
            color: #39b869; /* Color verde */
            text-decoration: none; /* Sin subrayado */
            transition: color 0.3s ease; /* Transición de color */
        }

        a:hover {
            color: #ffdd57; /* Color dorado al pasar el ratón */
            text-decoration: underline; /* Subrayado al pasar el ratón */
        }
    </style>
</head>
<body>

    <header>
        <h1>Cambio de Datos de Gastos</h1>
    </header>

    <div class="form-container">
        <?php
        if (isset($_REQUEST['usuario'])) {
            $usuario = $_REQUEST['usuario'];
            
            $conexion = mysqli_connect("localhost", "root", "") or die('Problema conectando porque: ' . mysqli_error());

            // Seleccionando la base de datos
            mysqli_select_db($conexion, 'dinero');

            // Ejecutando el query select regresa un rowset
            $dinero = mysqli_query($conexion, "SELECT * FROM gastos WHERE usuario='$usuario'") or die("Problemas con query");

            // Regresando renglón con registro
            if ($reg = mysqli_fetch_array($dinero)) {
        ?>
                <form action="cambiosgastos3.php" method="post">

                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" value="<?php echo htmlspecialchars($reg['fecha']); ?>" required>

                    <label for="descripcion">Descripcion:</label>
                    <input type="int" name="a_m" value="<?php echo htmlspecialchars($reg['descripcion']); ?>" required>

                    <label for="monto">Monto:</label>
                    <input type="int" name="monto" value="<?php echo htmlspecialchars($reg['monto']); ?>" required>


                    <input type="submit" name="ok" value="Editar">
                </form>
        <?php
            } else {
                echo "<p class='alert'>El Usuario no existe</p>";
            }
            mysqli_close($conexion);
        } else {
            echo "<p class='alert'>No se ha especificado un usuario.</p>";
        }
        ?>
    </div>

    <a href="">
        <button type="button">MENU</button>
    </a>

</body>
</html>
