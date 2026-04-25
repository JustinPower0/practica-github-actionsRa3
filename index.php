<?php
$conn = new mysqli("localhost", "root", "", "practica");

if ($conn->connect_error) {
    die("Error conexión");
}

echo "Conectado a MySQL ✔";
echo "Hello word";
?>