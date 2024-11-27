<?php
// Configuración de la conexión a la base de datos
$host = "localhost";
$usuario = "root"; // Usuario predeterminado en XAMPP
$contrasena = ""; // Contraseña vacía en XAMPP
$baseDatos = "lomas_beirut"; // Nombre de tu base de datos

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);

// Verificar si hay errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Establecer el juego de caracteres
$conexion->set_charset("utf8");
?>
