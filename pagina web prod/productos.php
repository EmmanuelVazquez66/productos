<?php
// Incluir archivo de conexión
include 'conexion.php';

// Consultar los productos
$result = $conn->query("SELECT * FROM productos");

echo "<h1>Lista de Productos</h1>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Imagen</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($row['descripcion']) . "</td>";
    echo "<td>" . number_format($row['precio'], 2) . "</td>";
    echo "<td><img src='" . htmlspecialchars($row['imagen']) . "' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>
