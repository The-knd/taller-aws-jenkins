<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $stmt = $pdo->prepare("INSERT INTO items (name, description, price) VALUES (?, ?, ?)");
    $stmt->execute([$name, $description, $price]);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Nuevo Item</title>
</head>
<body>
    <h1>Crear Nuevo Item</h1>
    <form method="POST">
        Nombre: <input type="text" name="name"><br>
        Descripción: <input type="text" name="description"><br>
        Precio: <input type="number" step="0.01" name="price"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
