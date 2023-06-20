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

// Obtener los valores enviados en la URL
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$ciudad = $_GET['ciudad'];
$estado = $_GET['estado'];
$regalo = $_GET['regalo'];

// Preparar la consulta SQL
$sql = "INSERT INTO carta (nombre, edad, ciudad, estado, regalo) VALUES (:nombre, :edad, :ciudad, :estado, :regalo)";
$stmt = $conn->prepare($sql);

// Asignar los valores a los parámetros de la consulta
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':edad', $edad);
$stmt->bindParam(':ciudad', $ciudad);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':regalo', $regalo);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Éxito en la inserción de los datos
    $response = array("status" => "success", "message" => "Datos almacenados correctamente");
} else {
    // Error en la inserción de los datos
    $response = array("status" => "error", "message" => "Error al almacenar los datos");
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
