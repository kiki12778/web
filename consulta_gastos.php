<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Gastos por Usuario</title>
    <link rel="stylesheet" href="pruevagas.css">
</head>
<body>
    <div class="container">
        <h1>Consultar Gastos</h1>

        <form method="POST" action="ver_gastos.php">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <button type="submit">Consultar Gastos</button>
        </form>
    </div>
</body>
</html>
