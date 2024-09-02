<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    
    $query = "INSERT INTO clientes (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
    $conn->query($query);
}

header("Location: index.php");
?>
