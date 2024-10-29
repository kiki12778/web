<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Nombre de Usuario</title>
    <link rel="stylesheet" href="pruevagas.css">
</head>
<body>
    <div class="container">
        <h1>Ingresa tu Nombre de Usuario</h1>
        <form action="reporte.php" method="POST">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <button type="submit">Ver Reporte</button>
        </form>
    </div>
</body>
</html>
