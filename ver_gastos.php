<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos Registrados</title>
    <link rel="stylesheet" href="pruevagas.css">
</head>
<body>
    <div class="container">
        <h1>Gastos Registrados</h1>

        <table>
            <thead>
                <tr>
                    <th>Usuario</th> <!-- Columna para el nombre de usuario -->
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Monto ($)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Configuración de la base de datos
                $servername = "localhost"; // Dirección del servidor
                $username = "root"; // Usuario por defecto de XAMPP
                $password = ""; // Sin contraseña
                $dbname = "dinero"; // Nombre de tu base de datos

                // Crear conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Comprobar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Obtener los gastos, incluyendo el nombre de usuario
                $sql = "SELECT usuario, fecha, descripcion, monto FROM gastos"; // Agrega usuario a la consulta
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Salida de cada fila
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row["usuario"]) . "</td> <!-- Mostrar el nombre de usuario -->
                                <td>" . htmlspecialchars($row["fecha"]) . "</td>
                                <td>" . htmlspecialchars($row["descripcion"]) . "</td>
                                <td>" . htmlspecialchars($row["monto"]) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay gastos registrados</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <button onclick="location.href='prueva.php'">Regresar</button>
    </div>
</body>
</html>
