<?php
    include_once('../includes/connection.php'); 

    $sql = "INSERT INTO contact(naam, bericht) VALUES (:naam,:bericht)";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':naam',$_POST['naam']);
    $stmt->bindParam(':bericht',$_POST['bericht']);
    $stmt -> execute();

    header("Location: ../contact.php?bericht=gelukt");
    
?>
