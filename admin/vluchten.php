<?php include_once('../includes/session.php');
include_once('../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Admin page</title>
    <script src="../js/script.js"></script>
  </head>
  <body>
    <div class="navbar">
      <div class="logo">
        <p>Logo</p>
      </div>
      <div class="link">
        <a href="admin.php"><p>Home</p></a>
        <a href="vluchten.php"><p>Vluchten</p></a>
        <a href="reizen.php"><p>EMPTY</p></a>
        <a href="contact.php"><p>EMPTY</p></a>
      </div>
    </div>
    <div class="main">

    <?php  
    $sql = 'SELECT * FROM reizen';
    
    foreach ($conn->query($sql) as $row) {
      echo("<div class='vlucht-box'>");
      echo("<h1>" . $row['locatie']. "</h1>");
      echo("<p>" . $row['beginDatum'] . " t/m " .$row['eindDatum']. "</p>");
      echo("<p>" ."reis ID ". $row['reisID']. "</p>");
      echo("<h3> $ " . $row['prijs']. ",-</h3>");
      echo ("<button class='edit' onclick='openEdit()'>Edit</button>");
      echo("</div>");
    }
    ?>
    
    </div>
    <button class="open" onclick="options()">opties</button>

<div class="form-popup" id="nieuw">
  <form action="../php/addFlight.php" class="form-container" method="POST">

    <label>Verbinding tussen</label>
    <input type="text" placeholder="vertrek plek + aankomst plek" name="locatie" required></br>

    <label>Datum</label>
    <input type="text" placeholder="Vertrek datum + aankomst datum" name="datum" required>
    <label>Prijs</label>
    <input type="text" placeholder="Prijs" name="prijs" required>

    <button type="submit" class="send">voeg toe</button>
  </form>
</div>
<div class="form-popup" id="edit">
  <form action="/action_page.php" class="form-container">

    <label>Verbinding tussen</label>
    <input type="text" placeholder="vertrek plek + aankomst plek" name="locatie" required></br>

    <label>Datum</label>
    <input type="text" placeholder="Vertrek datum + aankomst datum" name="datum" required>
    <label>Prijs</label>
    <input type="text" placeholder="Prijs" name="prijs" required>
    <label>ID</label>
    <input type="text" placeholder="ID" name="id" required>

    <button type="submit" class="send">Edit</button>
  </form>
</div>
<div class="form-popup" id="delete">
  <form action="../php/remove.php" class="form-container" method="POST">
    <label>ID</label>
    <input type="text" placeholder="ID" name="id" required>

    <button type="submit" class="send">Verwijder</button>
  </form>
</div>
<div class="options" id="options">
  <form>
  <button type="button" class="add" id="button-nieuw" onclick="openForm()">Nieuw</button>
  <button type="button" class="edit" onclick="openEdit()">Edit</button>
  <button type="button" class="delete" onclick="openDelete()">Verwijder</button> 
  </form> 
</div>


  </body>
</html>
