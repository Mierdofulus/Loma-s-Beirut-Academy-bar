<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos enviados desde el formulario
    $nombre = $conexion->real_escape_string($_POST['name']);
    $email = $conexion->real_escape_string($_POST['email']);
    $telefono = $conexion->real_escape_string($_POST['phone']);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO suscripciones (nombre, email, telefono) 
            VALUES ('$nombre', '$email', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        // Redirigir al usuario a una página de éxito
        header("Location: gracias.html");
        exit();
    } else {
        echo "Error al guardar la suscripción: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loma's Beirut - Suscripciones</title>
</head>
<body>
    <?php
    // Mostrar mensaje si existe
    if (isset($mensaje)) {
        echo "<p>" . htmlspecialchars($mensaje) . "</p>";
    }
    ?>

    <h1>Suscríbete a Loma's Beirut</h1>
    <form action="procesar_suscripcion.php" method="post">
        <label for="name">Nombre:</label>
        <br>
        <input type="text" id="name" name="name" placeholder="Tu nombre" required maxlength="100">
        <br>     
        <label for="email">E-Mail:</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required maxlength="100">
        <br>
        <label for="phone">Teléfono:</label><br>
        <input type="tel" id="phone" name="phone" placeholder="Tu teléfono" required maxlength="20">
        <br>
        <input type="submit" value="Suscribirse">
    </form>
</body>
</html>