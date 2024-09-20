<?php
$host = 'localhost';
$db = 'employee_management';
$user = 'root';  
$pass = ''; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
} catch (PDOException $e) {
    die(" failed: " . $e->getMessage());
}