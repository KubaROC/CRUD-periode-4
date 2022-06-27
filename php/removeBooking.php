<?php
include_once('../includes/connection.php'); 
    $sql = ("DELETE FROM boekingen WHERE boekingID =:boekingID");
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":boekingID", $_POST['boekingID']);
    $stmt -> execute();
    header("Location: ../admin/bookings.php");
?>
