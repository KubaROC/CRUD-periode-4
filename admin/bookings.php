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
        <a href="bookings.php"><p>Bookings</p></a>
        <a href="../php/logout.php"><p>Logout</p></a>
      </div>
    </div>
    <div class="main">



<?php  
$sql = 'SELECT * FROM boekingen';
$count = 0;

foreach ($conn->query($sql) as $row) {
  echo("<div class='vlucht-box'>");
  echo("<h2> GebruikerID:   " . $row['gebruikerID']. "</h2>");
  echo("<h3>" ."ReisID: ". $row['reisID']. "</h3>");
  echo("<h3> BoekingID: " . $row['boekingID']. "</h3>");
  echo ("<button class='edit' onclick='vluchtInfo(".$count.")'>Edit</button>");
  echo("</div>");
  echo("<div class='vlucht-info'>");
  echo("<form method='POST'>");
  echo("<label>" . 'Gebruiker ID' . "</label>");
  echo("<br>");
  echo ("<input name='gebruikerID' value='".$row['gebruikerID']."'></input>");
  echo("<br>");
  echo("<br>");
  echo("<label>" . 'Reis ID' . "</label>");
  echo("<br>");
  echo ("<input name='reisID' value='".$row['reisID']."'></input>");
  echo("<br>");
  echo("<br>");
  echo("<div>");
  echo("<label>" . 'Boeking ID' . "</label>");
  echo("<br>");
  echo("<input name='boekingID' value='".$row['boekingID']."'>");
  echo("<input class='deleteBoeking' type='submit' value='Delete' formaction='../php/removeBooking.php'>");
  echo("</form>");
  echo("</div>");
  echo("</div>");
  $count++;
}
?>
  </body>
</html>
