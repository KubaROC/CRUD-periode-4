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
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();
          
    if(($user['username'] == $username) && 
        ($user['password'] == $password)) {
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