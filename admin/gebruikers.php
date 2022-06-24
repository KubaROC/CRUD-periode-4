<?php include_once('../includes/session.php');
include_once('../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin.css" />
    <script src="../js/script.js"></script>
    <title>Admin page</title>
  </head>
  <body>
    <div class="navbar">
      <div class="logo">
        <p>Logo</p>
      </div>
      <div class="link">
        <a href="admin.php"><p>Home</p></a>
        <a href="vluchten.php"><p>Vluchten</p></a>
        <a href="gebruikers.php"><p>Gebruikers</p></a>
        <a href="contact.php"><p>EMPTY</p></a>
      </div>
    </div>
    <div class="main">
    <div class="main">



<?php  
$sql = 'SELECT * FROM gebruikers';
$count = 0;

foreach ($conn->query($sql) as $row) {
  echo("<div class='vlucht-box'>");
  echo("<h1>" . $row['username']. "</h1>");
  echo("<p>" ."Gebruker ID: ". $row['gebruikerID'] ."</p>");
  $a = 0;
  if ($row['admin'] > $a) {
    $a = 'true';
  }else{
    $a = 'false';
  }
  if (empty($row['mail'])) { 
    $mail = 'No mail registered';
  }

  echo("<p>" ."Is an admin: ". $a . "</p>");
  echo ("<button class='edit' onclick='vluchtInfo(".$count.")'>Edit</button>");
  echo("</div>");
  echo("<div class='vlucht-info'>");
  echo("<form method='POST'>");
  echo("<label>" . 'locatie' . "</label>");
  echo("<br>");
  echo ("<input name='Username' value='".$row['username']."'></input>");
  echo("<br>");
  echo("<br>");
  echo("<label>" . 'Gebruikers ID' . "</label>");
  echo("<br>");
  echo ("<input name='gebruikerID' value='".$row['gebruikerID']."'></input>");
  echo("<br>");
  echo("<br>");
  echo("<div>");
  echo("<label>" . 'Admin priviliges' . "</label>");
  echo("<br>");
  echo("<input name='admin' value='".$a."'>");
  echo("<br>");
  echo("<br>");
  echo("<label>" . 'E-mail' . "</label>");
  echo("<br>");
  echo("<input name='mail' value='". $mail ."'>");
  echo("</div>"); 
  echo("</form>");
  echo("</div>");
  $count++;
}
?>
  </body>
</html>
