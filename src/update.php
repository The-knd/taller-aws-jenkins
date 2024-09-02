<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $column_name = $_POST['column_name'];

    $stmt = $pdo->prepare("UPDATE your_table SET name = ?, email = ?, column_name = ? WHERE id = ?");
    $stmt->execute([$name, $email, $column_name, $id]);

    echo "Record updated successfully!";
    header("Location: read.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM your_table WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!-- Formulario para actualizar un registro -->
<form action="update.php?id=<?= $id ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required>
    
    <label for="column_name">Column Name:</label>
    <input type="text" name="column_name" value="<?= htmlspecialchars($row['column_name']) ?>" required>
    
    <button type="submit">Update</button>
</form>
