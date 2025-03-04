<?php
// 1. Verificar si el archivo fue subido correctamente
if ($_FILES['imagen']['error'] == 0) {

    // 2. Limitar el tamaño máximo del archivo (por ejemplo, 5MB)
    $maxSize = 5000000; // 5 MB
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    $imagenTipo = $_FILES['imagen']['type'];
    $imagenTamanio = $_FILES['imagen']['size'];

    // 3. Verificar tipo y tamaño de archivo
    if (in_array($imagenTipo, $allowedTypes) && $imagenTamanio <= $maxSize) {

        // 4. Verificar si la carpeta 'uploads/' existe, si no, crearla
        $directorioDestino = 'uploads/';
        if (!is_dir($directorioDestino)) {
            mkdir($directorioDestino, 0777, true); // Crear el directorio si no existe
        }

        // 5. Obtener el nombre del archivo y definir el destino
        $imagenTmp = $_FILES['imagen']['tmp_name'];
        $imagenNombre = $_FILES['imagen']['name'];
        $imagenDestino = $directorioDestino . basename($imagenNombre);

        // 6. Mover el archivo a la carpeta de destino
        if (move_uploaded_file($imagenTmp, $imagenDestino)) {
            echo "Archivo subido correctamente.";
        } else {
            echo "Error al mover el archivo.";
        }

    } else {
        echo "Archivo no válido o demasiado grande.";
    }

} else {
    echo "Error en la carga del archivo: " . $_FILES['imagen']['error'];
}
?>
