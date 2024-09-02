<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM your_table");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Visualizar los registros -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Column Name</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($rows as $row): ?>
    <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['column_name']) ?></td>
        <td><?= htmlspecialchars($row['created_at']) ?></td>
        <td>
            <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
