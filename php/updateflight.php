<?php
include_once('../includes/connection.php'); 
    $reisID =  $_REQUEST['reisID'];
    $sql = "SELECT * FROM reizen WHERE reisID='$reisID'";
    foreach ($conn->query($sql) as $result) {

        if ($_REQUEST['reisID'] === '') {
            $reisID = $result['reisID'];
        } else {
            $reisID = $_REQUEST['reisID'];
        }
        if ($_REQUEST['locatie'] === '') {
            $locatie = $result['locatie'];
        } else {
            $locatie = $_REQUEST['locatie'];
        }
        if ($_REQUEST['beschrijving'] === '') {
            $beschrijving = $result['beschrijving'];
        } else {
            $beschrijving = $_REQUEST['beschrijving'];
        }
        if ($_REQUEST['vertrektijd'] === '') {
            $vertrektijd = $result['vertrektijd'];
        } else {
            $vertrektijd = $_REQUEST['vertrektijd'];
        }
        if ($_REQUEST['aankomsttijd'] === '') {
            $aankomsttijd = $result['aankomsttijd'];
        } else {
            $aankomsttijd = $_REQUEST['aankomsttijd'];
        }
        if ($_REQUEST['prijs'] === '') {
            $prijs = $result['prijs'];
        } else {
            $prijs = $_REQUEST['prijs'];
        }


      }


    $sql = "UPDATE reizen SET reisID=:reisID,locatie=:locatie,beschrijving=:beschrijving,vertrektijd=:vertrektijd,aankomsttijd=:aankomsttijd,prijs=:prijs WHERE reisID=:reisID";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':reisID', $reisID);
    $stmt->bindParam(':locatie', $locatie);
    $stmt->bindParam(':beschrijving', $beschrijving);
    $stmt->bindParam(':vertrektijd', $vertrektijd);
    $stmt->bindParam(':aankomsttijd', $aankomsttijd);
    $stmt->bindParam(':prijs', $prijs);
    $stmt -> execute();
    header("Location: ../admin/vluchten.php");
    