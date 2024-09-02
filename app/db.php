<?php
$servername = "db";
$username = "admin";
$password = "adminpass";  // Contraseña de la base de datos

// Crear conexión inicial sin especificar la base de datos
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$dbname = "crud_db";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created or already exists";
} else {
    die("Error creating database: " . $conn->error);
}

// Conectar a la base de datos específica
$conn->select_db($dbname);

// Verificar conexión a la base de datos
if ($conn->connect_error) {
    die("Failed to connect to database: " . $conn->connect_error);
}
?>