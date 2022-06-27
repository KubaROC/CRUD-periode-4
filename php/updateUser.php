<?php
include_once('../includes/connection.php'); 
    $gebruikerID =  $_REQUEST['gebruikerID'];
    $sql = "SELECT * FROM gebruikers WHERE gebruikerID='$gebruikerID'";
    foreach ($conn->query($sql) as $result) {

        if ($_REQUEST['gebruikerID'] === '') {
            $gebruikerID = $result['gebruikerID'];
        } else {
            $gebruikerID = $_REQUEST['gebruikerID'];
        }
        if ($_REQUEST['admin'] === '') {
            $admin = $result['admin'];
        } else {
            $admin = $_REQUEST['admin'];
        }
        if ($_REQUEST['mail'] === '') {
            $mail = $result['mail'];
        } else {
            $mail = $_REQUEST['mail'];
        }
        if ($_REQUEST['username'] === '') {
            $username = $result['username'];
        } else {
            $username = $_REQUEST['username'];
        }

      }


    $sql = "UPDATE gebruikers SET gebruikerID=:gebruikerID,admin=:admin,mail=:mail,username=:username WHERE gebruikerID=:gebruikerID";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':gebruikerID', $gebruikerID);
    $stmt->bindParam(':admin', $admin);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':username', $username);
    $stmt -> execute();
    header("Location: ../admin/gebruikers.php");
    