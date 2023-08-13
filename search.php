<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userSearch = $_POST["usersearch"];
      
    
        try {
            require_once "includes/dbh.inc.php";
    
            $query = "SELECT * FROM comments WHERE username = :usersearch;";
    
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(":usersearch", $userSearch);
           
            $stmt->execute();

            $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
            $pdo = NULL;
            $stmt = NULL;
    
        } catch (PDOException $e) {
           die("Query Failed: ". $e->getMessage());
        }
    
    } else {
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Results: </h3>

    <?php 
        if(empty($results)){
            echo "<div>";
            echo "There were no results found";
            echo "</div>";
        } else {
            foreach($results as $row){
                echo "<div>";
                echo "<p>" .htmlspecialchars($row["username"]). "</p>";
                echo "<p>" .htmlspecialchars($row["comment_text"]). "</p>";
                echo "<p>" .htmlspecialchars($row["created_at"]). "</p>";
                echo "</div>";
            }
        }

    ?>
</body>
</html>