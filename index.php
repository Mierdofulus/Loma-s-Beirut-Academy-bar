<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Realizar una consulta para obtener todos los suscriptores
$sql = "SELECT * FROM suscriptores";
$resultado = $conn->query($sql);

// Verificar si la consulta ha devuelto resultados
if ($resultado->num_rows > 0) {
    // Mostrar los datos de cada fila
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id_suscriptor"] . " - Nombre: " . $fila["nombre"] . " - Correo: " . $fila["correo"] . " - Teléfono: " . $fila["telefono"] . "<br>";
    }
} else {
    echo "No hay suscriptores registrados.";
}

// Cerrar la conexión
$conn->close();
?>
