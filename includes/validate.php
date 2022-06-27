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
    $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    if(($user['username'] == $username) && 
        ($user['password'] == $password) &&
        ($user['admin'] == '1')) {
            session_start();
            $_SESSION["admin"] = 'admin';

            header("Location: ../admin/admin.php");
            exit();
    }
    elseif(($user['username'] == $username) && 
        ($user['password'] == $password) &&
        ($user['admin'] == '0')) {
            session_start();
            $_SESSION["gebruiker"] = 'gebruiker';

            header("Location: ../account.php");
            exit();
    } 
    else {
        header("Location: ../accountlogin.php");
        exit();
    }
}
  
?>