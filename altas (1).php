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

// Si se envía el formulario
$nom = $a_p = $a_m = $usuario = $contrasena = ''; // Inicializar variables
$error = ''; // Variable para errores

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nom = $_POST['nom'];
    $a_p = $_POST['a_p'];
    $a_m = $_POST['a_m'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena']; // Sin hashing

    // Validar si el nombre de usuario ya existe
    $stmt = $conn->prepare("SELECT * FROM dp WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "El nombre de usuario ya está en uso.";
    } else {
        // Insertar datos en la base de datos sin hashear la contraseña
        $stmt = $conn->prepare("INSERT INTO dp (nom, a_p, a_m, usuario, contrasena) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nom, $a_p, $a_m, $usuario, $contrasena);
        
        if ($stmt->execute()) {
            // Redirigir a prueba.php al registro exitoso
            header("Location: prueva.php");
            exit();
        } else {
            $error = "Error: " . $stmt->error;
        }
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
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfd;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #39b869;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .info {
            flex: 1;
            padding: 40px;
            background-color: #e9ecef;
            margin-right: 20px;
            border-radius: 5px;
        }
        .form-container {
            flex: 1;
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
        .success {
            color: green;
            text-align: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="logo.png" height="200" width="200">
    </div>
    <div class="container">
        <div class="info">
            <h2>Registrate o Inicia Sesion</h2>
            <p>Aquí puedes registrar nuevos usuarios. Por favor, completa todos los campos requeridos.</p>
            <p>Los nombres de usuario deben ser únicos. Asegúrate de que no esté en uso antes de registrar.</p>
            <img src="imaltasreg.png" height="300" width="300">
        </div>
        <div class="form-container">
            <h1>Formulario de Registro</h1>
            <form action="" method="POST">
                <label for="nom">Nombre:</label>
                <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>" required>

                <label for="a_p">Apellido Paterno:</label>
                <input type="text" name="a_p" value="<?php echo htmlspecialchars($a_p); ?>" required>

                <label for="a_m">Apellido Materno:</label>
                <input type="text" name="a_m" value="<?php echo htmlspecialchars($a_m); ?>" required>

                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" name="usuario" value="<?php echo htmlspecialchars($usuario); ?>" required>

                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" required>

                <a href="iniciar_sesion.php" style="display: block; text-align: center; margin: 10px 0; color: black;">¿Ya tienes una cuenta? Inicia sesión aquí.</a>
                <button type="submit">Registrar</button>
            </form>
            <?php if ($error): ?>
                <div class="alert"><?php echo $error; ?></div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
