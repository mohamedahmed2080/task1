<?php
session_start();
include('db.php');
include "head.php";

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM managers WHERE email = ?");
$stmt->execute([$email]);
$manager = $stmt->fetch();

if ($manager && password_verify($password, $manager['password'])) {
    $_SESSION['manager_id'] = $manager['id'];
    header("Location: employees.php");
    exit();
} else {
    $error= "invalid username or password";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="alert alert-danger" role="alert">
  <?php  echo $error;   ?>
</div>
    
</body>
</html>
