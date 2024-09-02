<?php
$host = 'your-rds-endpoint';
$dbname = 'your-database-name';
$username = 'your-username';
$password = 'your-password';

try {
    // Conectar al servidor MySQL sin seleccionar una base de datos específica
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear la base de datos si no existe
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    
    // Seleccionar la base de datos
    $pdo->exec("USE $dbname");

    // Leer el archivo init.sql
    $sql = file_get_contents('sql/init.sql');
    if ($sql === false) {
        throw new Exception("Error reading SQL file");
    }

    // Ejecutar el contenido de init.sql
    $pdo->exec($sql);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

