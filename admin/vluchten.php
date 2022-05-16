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
    <table>
        <tr>
          <th>Locatie<js/th>
          <th>tijd</th>
          <th>prijs</th>
          <th>ID</th>
          </tr>
    <?php  
    $sql = 'SELECT * FROM vluchten';
    
    foreach ($conn->query($sql) as $row) {
      echo("<tr>");
      echo("<td>" . $row['locatie']. "</td>");
      echo("<td>" . $row['tijden']. "</td>");
      echo("<td>" . $row['prijs']. "</td>");
      echo("<td>" . $row['id']. "</td>");
      echo("</tr>");
    }
    ?>
    </div>
    <button class="open" onclick="options()">opties</button>

<div class="form-popup" id="nieuw">
  <form action="/action_page.php" class="form-container">

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
  <form action="/action_page.php" class="form-container">
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
<script>
function openForm() {
  document.getElementById("nieuw").style.display = "block";
  document.getElementById("button-nieuw").style.display = "none";
} 
function openEdit() {
  document.getElementById("edit").style.display = "block";
  document.getElementById("button-nieuw").style.display = "none";
} 
function openDelete() {
  document.getElementById("delete").style.display = "block";
  document.getElementById("button-nieuw").style.display = "none";
} 

function options() {
  document.getElementById("options").style.display = "block";
}

</script>

  </body>
</html>
