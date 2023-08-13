<?php

$dsn = "mysql:host=localhost;dbname=my_db";
$dbusername = "root";
$dppassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dppassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: ". $e-> getMessage();
}