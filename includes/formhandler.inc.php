<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, password, email)
        VALUES (:username, :password, :email);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $pdo = NULL;
        $stmt = NULL;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
       die("Query Failed: ". $e->getMessage());
    }

} else {
    header("Location: ../index.php");
}