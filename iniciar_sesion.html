<?php 
$servername = "localhost"; // Cambia si es necesario
$username = "root";        // Cambia por tu usuario de MySQL
$password = "";            // Cambia por tu contraseña de MySQL
$dbname = "dinero";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Variables para almacenar los datos del formulario
$usuario = $contrasena = '';

// Si se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena']; // Sin hashing

    // Validar las credenciales
    $stmt = $conn->prepare("SELECT * FROM dp WHERE usuario = ? AND contrasena = ?");
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso, redirigir a prueba.php
        header("Location: prueva.php");
        exit(); // Asegurarse de que no se ejecute más código
    } else {
        echo "<div class='alert'>Usuario o contraseña incorrectos.</div>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfd;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #39b869;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .alert {
            color: red;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <form action="" method="POST">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" name="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <div class="link">
            <p>¿No estás registrado? <a href="altas.php">Regístrate aquí</a>.</p>
        </div>
    </div>
</body>
</html>
