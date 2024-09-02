<?php
$host = 'db';  // Nombre del servicio de MySQL en docker-compose
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

try {
    // Conectar a la base de datos MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
