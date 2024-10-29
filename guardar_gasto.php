<?php
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Cambia si es necesario
$password = ""; // Cambia si es necesario
$dbname = "dinero"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$date = $_POST['date'];
$description = $_POST['description'];
$amount = $_POST['amount'];

$sql = "INSERT INTO gastos (fecha, descripcion, monto) VALUES ('$date', '$description', $amount)";

if ($conn->query($sql) === TRUE) {
    $_SESSION['mensaje'] = "Gasto agregado exitosamente";
} else {
    $_SESSION['mensaje'] = "Error al agregar gasto: " . $conn->error;
}

$conn->close();

// Redirigir a la página de registro de gastos
header("Location: prueva.php");
exit();
?>
