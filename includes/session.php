<?php
    session_start();

    if(!isset($_SESSION["gebruiker"])){
        header("Location: ../accountlogin.php");
        exit();
    }
?>