<?php
$host = "localhost";
$user = "root";
$password = 'IR4BRhVaVGFddsV('; 
$db = "sticky_template";
$port = 3307;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
?>
