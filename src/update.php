<?php
require 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $stmt = $pdo->prepare("UPDATE items SET name = ?, description = ?, price = ? WHERE id = ?");
    $stmt->execute([$name, $description, $price, $id]);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Item</title>
</head>
<body>
    <h1>Editar Item</h1>
    <form method="POST">
        Nombre: <input type="text" name="name" value="<?= $item['name'] ?>"><br>
        Descripción: <input type="text" name="description" value="<?= $item['description'] ?>"><br>
        Precio: <input type="number" step="0.01" name="price" value="<?= $item['price'] ?>"><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
