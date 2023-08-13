<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND password = :password;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);

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