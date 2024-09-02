<?php
require 'db.php';

// Obtener lista de clientes
$query = "SELECT * FROM clientes";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Clientes</title>
</head>
<body>
    <h1>CRUD de Clientes</h1>

    <form action="add_cliente.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <button type="submit">Agregar Cliente</button>
    </form>

    <h2>Lista de Clientes</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li><?php echo htmlspecialchars($row['nombre']); ?> - <?php echo htmlspecialchars($row['correo']); ?> - <?php echo htmlspecialchars($row['telefono']); ?>
                <a href="delete_cliente.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </li>
        <?php endwhile; ?>
    </ul>

</body>
</html>
