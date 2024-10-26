<?php
$user = 'website';
$password = '123';
$database = 'chessdatabase';
$host = 'localhost:8889';
$port = 3306;

$dsn = "mysql:host=$host;dbname=$database;port=$port;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
