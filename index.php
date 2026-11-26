<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$respuesta = [
    "proyecto" => "BEAUTY CLINIC",
    "mensaje" => "Bienvenido a la API de Beauty Clinic",
    "estado" => "Correcto",
    "version" => "1.0"
];

echo json_encode($respuesta, JSON_PRETTY_PRINT);

?>