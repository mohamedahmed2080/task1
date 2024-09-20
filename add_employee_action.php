<?php
session_start();
include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$picture = null;
if (isset($_FILES['picture']) ) {
    $picture = 'imges/' . $_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], $picture);
}
$manager_id = $_POST['manager_id'];
$stmt = $pdo->prepare("INSERT INTO employees (name, email, phone, picture, manager_id) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$name, $email, $phone, $picture, $manager_id]);

header("Location: employees.php");
exit();
