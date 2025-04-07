<?php
$serverName = "sql204.infinityfree.com"; // Cambia esto con tu servidor MySQL de InfinityFree
$username = "root";   // Cambia esto con tu nombre de usuario de MySQL
$password = "123456";   // Cambia esto con tu contraseña de MySQL
$database = "Biblioteca";       // Cambia esto con el nombre de tu base de datos

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

