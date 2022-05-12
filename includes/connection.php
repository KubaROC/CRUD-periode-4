<?php
  
$conn = "";
   
try {
    $servername = "sql11.freemysqlhosting.net:3306";
    $dbname = "sql11491761";
    $username = "sql11491761";
    $password = "m19jbnPaHI";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=sql11491761",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>