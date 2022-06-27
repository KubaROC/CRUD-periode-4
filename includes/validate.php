<?php
  
include_once('connection.php');
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE username = :username AND admin = 1");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if(($user['username'] == $username) && 
        ($user['password'] == $password) &&
        ($admin <= '1')) {
            session_start();
            $_SESSION["name"] = 'admin';

            header("Location: ../admin/admin.php");
            exit();
    }
    else {
        header("Location: ../admin/adminLogin.php");
        exit();
    }
}
  
?>