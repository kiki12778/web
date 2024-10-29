<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambios de Datos de Usuario</title>
    <link rel="stylesheet" type="text/css" href="cambios.css">
    <style>
        body {
            background-image: url('D.png'); /* Fondo oscuro */
            font-family: "Century Gothic", sans-serif;
            color: white; /* Color de texto blanco */
            margin: 0;
            padding: 0;
            animation: fadeIn 1.5s; /* Efecto de aparición */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #39b869; /* Color verde */
            border-radius: 8px;
            margin: 20px auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra suave */
        }

        h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .form-container {
            max-width: 400px; /* Ancho máximo del formulario */
            margin: 20px auto; /* Centrar el formulario */
            background-color: rgba(255, 255, 255, 0.95); /* Fondo blanco con transparencia */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Sombra */
        }

        label {
            display: block; /* Hacer el label un bloque */
            margin-bottom: 10px; /* Margen inferior */
            color: #307037; /* Color verde */
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
        }
    </style>
</head>
<body>

    <header>
        <h1>Cambios de Datos de Gastos</h1>
    </header>

    <div class="form-container">
        <form action="cambiosgastos2.php" method="post">
            <label for="usuario">Ingrese el Usuario del contacto a cambiar:</label>
            <input type="text" id="usuario" name="usuario" required>
            <input type="submit" name="ok" value="BUSCAR">
        </form>
        <a href="http://localhost/Menu.php">
            <button type="button">MENU</button>
        </a>
    </div>

</body>
</html>
