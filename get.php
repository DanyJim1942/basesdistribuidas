<?php

header("Access-Control-Allow-Origin: *"); // Permite cualquier origen
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Permite los métodos GET, POST y OPTIONS
header("Access-Control-Allow-Headers: Content-Type"); // Permite el encabezado Content-Type


// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cartaasanta";

// Crear una conexión a la base de datos
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Consulta SQL para obtener los datos
$sql = "SELECT nombre, edad, ciudad, estado, regalo FROM carta";
$stmt = $conn->query($sql);

// ...

// Verificar si se encontraron registros
if ($stmt->rowCount() > 0) {
    // Array para almacenar los registros
    $registros = array();

    // Recorrer los resultados y agregarlos al array
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $registros[] = $row;
    }

    // Respuesta con los registros encontrados
    $response = $registros;
} else {
    // No se encontraron registros
    $response = array("status" => "error", "message" => "No se han encontrado datos.");
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);

?>
