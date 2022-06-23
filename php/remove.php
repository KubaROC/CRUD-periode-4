<?php
include_once('../includes/connection.php'); 
    $sql = ("DELETE FROM reizen WHERE reisID =:reisID");
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":reisID", $_POST['reisID']);
    $stmt -> execute();
    header("Location: ../admin/vluchten.php");
?>
