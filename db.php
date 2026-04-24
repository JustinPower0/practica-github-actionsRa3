<?php
$conn = new mysqli(
    getenv('DB_HOST') ?: 'localhost',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASS') ?: '',
    getenv('DB_NAME') ?: 'practica'
);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}