<?php
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');

try {
    $pdo = new PDO("mysql:host=$host", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Leer el contenido de db.sql y ejecutar las consultas
    $sql = file_get_contents('/var/www/html/db.sql');
    $pdo->exec($sql);

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}
?>
