<?php
require 'db.php';

$id = $_GET['id'];

// Obtener los detalles del item seleccionado
$stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$item) {
    echo "Item no encontrado";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Item</title>
</head>
<body>
    <h1>Detalles del Item</h1>
    <p><strong>ID:</strong> <?= $item['id'] ?></p>
    <p><strong>Nombre:</strong> <?= $item['name'] ?></p>
    <p><strong>Descripción:</strong> <?= $item['description'] ?></p>
    <p><strong>Precio:</strong> <?= $item['price'] ?></p>
    <p><strong>Creado:</strong> <?= $item['created_at'] ?></p>
    <a href="index.php">Volver a la lista de items</a>
</body>
</html>
