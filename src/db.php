<?php
$host = 'stacktalleraws-rdsinstance-hjq7zkuf8r5c.cvzx8qh37fom.us-east-1.rds.amazonaws.com';  // Nombre del servicio de MySQL en docker-compose
$dbname = 'crud_app';
$username = 'admin';
$password = 'adminpass';

try {
    // Conectar a la base de datos MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
