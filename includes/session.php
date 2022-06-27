<?php
    session_start();

<<<<<<< HEAD
    if(!isset($_SESSION["gebruiker"])){
        header("Location: accountlogin.php");
=======
    if(!isset($_SESSION["name"])){
        header("Location: ../accountlogin.php");
>>>>>>> f372c9bf01fa4db1214b6e299caf4ee2ac9e6c61
        exit();
    }
?>