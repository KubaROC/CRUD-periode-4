<?php
Session_start();
if  ($_SESSION["name"] = 'admin'){
    Session_destroy();
    header("Location: ../admin/adminLogin.php");
}else{
    header("Location: ../login.php");
}


?>