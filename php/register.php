<?php
include_once('../includes/connection.php'); 

    $sql = "INSERT INTO gebruikers(username, mail, password) VALUES (:username,:mail,:password)";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':mail',$_POST['mail']);
    $stmt->bindParam(':password',$_POST['password']);
    $stmt -> execute();

    header("Location: ../accountlogin.php");
    
?>
