<?php
include_once('../includes/connection.php'); 

    $sql = "INSERT INTO reizen(locatie, beschrijving, vertrektijd, aankomsttijd, prijs) VALUES (:locatie,:beschrijving,:vertrektijd,:aankomsttijd,:prijs)";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':locatie',$_POST['locatie']);
    $stmt->bindParam(':beschrijving',$_POST['beschrijving']);
    $stmt->bindParam(':vertrektijd',$_POST['vertrektijd']);
    $stmt->bindParam(':aankomsttijd',$_POST['aankomsttijd']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt -> execute();

    header("Location: ../admin/vluchten.php");
    
?>
