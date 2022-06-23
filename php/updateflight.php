<?php
include_once('../includes/connectionmenu.php'); 
    $ID =  $_REQUEST['id'];
    $sql = "SELECT * FROM vluchten WHERE id='$id'";
    foreach ($conn->query($sql) as $result) {

        if ($_REQUEST['Name'] === '') {
            $Food = $result['Food'];
        } else {
            $Food = $_REQUEST['Name'];
        }
        if ($_REQUEST['Desc'] === '') {
            $Description = $result['Description'];
        } else {
            $Description = $_REQUEST['Desc'];
        }
        if ($_REQUEST['Price'] === '') {
            $Price = $result['Price'];
        } else {
            $Price = $_REQUEST['Price'];
        }

      }


    $sql = "UPDATE menu SET Food=:food,Description=:description,Price=:price WHERE ID=:ID";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':food', $Food);
    $stmt->bindParam(':description', $Description);
    $stmt->bindParam(':price', $Price);
    $stmt->bindParam(':ID', $ID);
    $stmt -> execute();
    header("Location: ../admin/addDish.php");
    