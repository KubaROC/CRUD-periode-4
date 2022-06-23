<?php
include_once('../includes/connection.php'); 

    $sql = "INSERT INTO reizen(locatie, tijden, prijs) VALUES (:locatie,:datum,:prijs)";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':locatie',$_POST['locatie']);
    $stmt->bindParam(':datum',$_POST['datum']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt -> execute();

    header("Location: ../admin/vluchten.php");
    
?>
