<?php include_once('../includes/adminSession.php');
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
        <img src="../Images/logo.png" width="50" height="50">
    </div>
      <div class="link">
        <a href="admin.php"><p>Home</p></a>
        <a href="vluchten.php"><p>Vluchten</p></a>
        <a href="gebruikers.php"><p>Gebruikers</p></a>
        <a href="bookings.php"><p>Bookings</p></a>
        <a href="../php/logout.php"><p>Logout</p></a>
      </div>
    </div>
    
  </body>
</html>
