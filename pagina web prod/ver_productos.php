<?php
// Incluir la conexión a la base de datos
include('db.php');

// Consulta para obtener todos los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Verificar si hay productos registrados
if ($result->num_rows > 0) {
    // Mostrar los productos
    echo "<h2>Productos Registrados</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Imagen</th></tr>";

    // Iterar sobre los productos y mostrarlos en una tabla
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td><img src='uploads/" . $row['imagen'] . "' width='100' height='100'></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se han encontrado productos.";
}

// Cerrar la conexión
$conn->close();
?>
