<?php
include_once('../includes/connection.php'); 
    $sql = ("DELETE FROM vluchten WHERE id =:id");
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":id", $_POST['id']);
    $stmt -> execute();
    header("Location: ../admin/vluchten.php");
?>
