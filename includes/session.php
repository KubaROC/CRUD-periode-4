<?php
    session_start();

    if(!isset($_SESSION["name"])){
        header("Location: ../admin/adminLogin.php");
        exit();
    }
?>