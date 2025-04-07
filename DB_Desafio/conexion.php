<?php
$serverName = "sql204.infinityfree.com"; 
$username = "root"; 
$password = "123456";  
$database = "Biblioteca"

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>

