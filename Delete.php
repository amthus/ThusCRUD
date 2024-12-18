<?php
include 'data.php';

$id = $_GET['id'];

$sql = "DELETE FROM articles WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

header('Location: read.php');
exit;
?>
