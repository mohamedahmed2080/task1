<?php
session_start();
include('db.php');

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM employees WHERE id = ?");
$stmt->execute([$id]);

header("Location: employees.php");
exit();