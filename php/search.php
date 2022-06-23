<?php
include_once('../includes/connectionmenu.php'); 
$sql = "SELECT * FROM menu WHERE Food LIKE ':search'";
$stmt = $conn -> prepare($sql);
$stmt->bindParam(':search',$_POST['search']);
foreach ($conn->query($sql) as $row) {
    echo("<tr>");
    echo("<td>" . $row['Food']. "</td>");
    echo("</tr>");
  };    
?>