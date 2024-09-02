<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $column_name = $_POST['column_name'];

    $stmt = $pdo->prepare("INSERT INTO your_table (name, email, column_name) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $column_name]);

    echo "Record created successfully!";
}
?>

<!-- Formulario para crear un nuevo registro -->
<form action="create.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    
    <label for="column_name">Column Name:</label>
    <input type="text" name="column_name" required>
    
    <button type="submit">Create</button>
</form>
