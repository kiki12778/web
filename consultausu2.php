<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta</title>
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
            background-color: #39b869; /* Color rojo */
            border-radius: 8px;
            margin: 20px auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra suave */
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: white; /* Texto blanco */
        }

        table {
            width: 80%;
            margin: 20px auto; /* Centrar la tabla */
            border-collapse: collapse; /* Colapsar bordes */
            background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco con transparencia */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra */
            border-radius: 10px;
        }

        th, td {
            border: 1px solid #ccc; /* Bordes de celdas */
            padding: 10px; /* Espaciado interno */
            text-align: left; /* Alinear texto a la izquierda */
        }

        th {
            background-color: #39b869; /* Color rojo para el encabezado */
            color: white; /* Texto blanco */
        }

        td {
            color: #000000; /* Texto negro para las celdas */
        }

        button {
            background-color: #39b869; /* Color del botón */
            color: white; /* Texto blanco */
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer; /* Cursor en forma de mano */
            display: block; /* Mostrar como bloque */
            margin: 20px auto; /* Margen automático para centrar */
            transition: background-color 0.3s; /* Transición de color */
        }

        button:hover {
            background-color: #ff5733; /* Color más claro al pasar el ratón */
        }

        /* Estilo de los enlaces */
        a {
            text-decoration: none; /* Sin subrayado */
        }
    </style>
</head>

<body>
    <header>
        <h1>Consulta de Usuario</h1>
    </header>

    <?php
    $conexion = mysqli_connect("localhost", "root", "") or die("Problemas en la conexión");
    mysqli_select_db($conexion, 'dinero') or die("Problemas en la selección de la base de datos");

    $usuario = $_REQUEST['usuario']; // Obtener el valor de curp de la solicitud

    $registros = mysqli_query($conexion, "SELECT  nom, a_p, a_m, usuario, contrasena FROM dp WHERE usuario='$usuario'") or die("Problemas en el select: " . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nombre de Usuario</th><th>Contraseña</th></tr>";
        echo "<tr>";
        echo "<td>" . $reg['nom'] . "</td>";
        echo "<td>" . $reg['a_p'] . "</td>";
        echo "<td>" . $reg['a_m'] . "</td>";
        echo "<td>" . $reg['usuario'] . "</td>";
        echo "<td>" . $reg['contrasena'] . "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>No existe un usuario con ese nombre de usuario</p>";
    }

    mysqli_close($conexion);
    ?>

    <button onclick="window.location.href='index.html';">MENU</button>
</body>
</html>