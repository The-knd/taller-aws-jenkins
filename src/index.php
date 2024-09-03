<?php
require 'db.php';

$stmt = $pdo->query('SELECT * FROM items');
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Items</title>
</head>
<body>
    <h1>Lista de Items</h1>
    <a href="create.php">Agregar nuevo item</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['description'] ?></td>
                <td><?= $item['price'] ?></td>
                <td>
                    <a href="update.php?id=<?= $item['id'] ?>">Editar</a>
                    <a href="delete.php?id=<?= $item['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
