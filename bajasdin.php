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

// Eliminar registro si se recibe un ID
if (isset($_POST['delete'])) {
    $usuario = $_POST['usuario'];

    // Preparar la consulta de eliminación
    $stmt = $conn->prepare("DELETE FROM dp WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);

    if ($stmt->execute()) {
        echo "<div class='success'>Usuario eliminado exitosamente.</div>";
    } else {
        echo "<div class='alert'>Error al eliminar el usuario: " . $stmt->error . "</div>";
    }

    $stmt->close();
}

// Obtener todos los usuarios de la base de datos
$result = $conn->query("SELECT usuario FROM dp");

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .alert {
            color: #39b869; /* Cambiado de rojo a #39b869 */
            text-align: center;
            margin: 10px 0;
        }
        .success {
            color: green;
            text-align: center;
            margin: 10px 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #39b869; /* Cambiado de rojo a #39b869 */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #2a9e5f; /* Color más oscuro para el hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Eliminar Usuario</h1>
        <form action="" method="POST">
            <label for="usuario">Selecciona un usuario para eliminar:</label>
            <select name="usuario" required>
                <option value="">-- Selecciona --</option>
                <?php
                // Mostrar usuarios en el dropdown
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . htmlspecialchars($row['usuario']) . "'>" . htmlspecialchars($row['usuario']) . "</option>";
                    }
                }
                ?>
            </select>
            <button type="submit" name="delete">Eliminar</button><br><br>

            <button type="button" onclick="window.location.href='index.html';">MENU</button>
        </form>
    </div>
</body>
</html>
