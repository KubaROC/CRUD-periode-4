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
  echo("<h1>" . $row['locatie']. "</h1>");
  echo("<p>" . $row['vertrektijd'] . " t/m " .$row['aankomsttijd']. "</p>");
  echo("<p>" ."reis ID ". $row['reisID']. "</p>");
  echo("<h3> € " . $row['prijs']. ",-</h3>");
  echo ("<button class='edit' onclick='vluchtInfo(".$count.")'>Edit</button>");
  echo("</div>");
  echo("<div class='vlucht-info'>");
  echo("<form method='POST'>");
  echo("<label>" . 'locatie' . "</label>");
  echo("<br>");
  echo ("<input name='locatie' value='".$row['locatie']."'></input>");
  echo("<br>");
  echo("<br>");
  echo("<label>" . 'Beschrijving' . "</label>");
  echo("<br>");
  echo("<br>");
  echo ("<textarea name='beschrijving'> ".$row['beschrijving']."</textarea>");
  echo("<div class='form-extended'>");
  echo("<label>" . 'Reis ID' . "</label>");
  echo("<br>");
  echo ("<input name='reisID' value='".$row['reisID']."'></input>");
  echo("<br>");
  echo("<br>");
  echo("<div>");
  echo("<label>" . 'Vertrek datum' . "</label>");
  echo("<br>");
  echo("<input name='vertrektijd' value='".$row['vertrektijd']."' type='datetime-local'>");
  echo("<br>");
  echo("<br>");
  echo("<label>" . 'Aankomst datum' . "</label>");
  echo("<br>");
  echo("<input name='aankomsttijd' value='".$row['aankomsttijd']."' type='datetime-local' >");
  echo("<br>");
  echo("<br>");
  echo("<label>" . 'Prijs' . "</label>");
  echo("<br>");
  echo ("<input name='prijs' value='".$row['prijs']."'></input>");
  echo("</div>"); 
  echo("</div>");
  echo("<input class='editForm' type='submit' value='Edit' formaction='../php/updateFlight.php'>");
  echo("<input class='deleteForm' type='submit' value='Delete' formaction='../php/remove.php'>");
  echo("</form>");
  echo("</div>");
  $count++;
}
?>
  </body>
</html>
