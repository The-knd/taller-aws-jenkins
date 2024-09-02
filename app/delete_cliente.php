<?php
require 'db.php';

$id = $_GET['id'];
$query = "DELETE FROM clientes WHERE id=$id";
$conn->query($query);

header("Location: index.php");
?>
