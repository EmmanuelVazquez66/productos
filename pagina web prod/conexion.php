<?php
// Datos de conexión a la base de datos
$host = "localhost"; // o tu servidor de base de datos
$dbname = "productos_db";
$username = "root"; // o tu usuario de MySQL
$password = ""; // o tu contraseña

// Crear la conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
