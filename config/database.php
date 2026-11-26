<?php

$host = "localhost";
$dbname = "beauty_clinic";
$username = "root";
$password = "";

try {

    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conexion->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    http_response_code(500);

    echo json_encode([
        "error" => "Error de conexión con la base de datos"
    ]);

    exit;
}

?>