<?php
include_once('../includes/connection.php'); 
    $sql = ("DELETE FROM gebruikers WHERE gebruikerID =:gebruikerID");
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":gebruikerID", $_POST['gebruikerID']);
    $stmt -> execute();
    header("Location: ../admin/gebruikers.php");
?>
