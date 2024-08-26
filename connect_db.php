<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "sena1234";
try {
    $conn = new PDO("mysql:host=$servername,dbname=securitydb", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>