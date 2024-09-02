<?php
include 'db.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM your_table WHERE id = ?");
$stmt->execute([$id]);

echo "Record deleted successfully!";
header("Location: read.php");
exit;
