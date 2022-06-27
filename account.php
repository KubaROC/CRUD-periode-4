<?php include('./includes/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include('./includes/header.php'); ?>
    <!-- <?php  
        include_once('includes/connection.php');

        $stmt = $conn->prepare("SELECT * FROM gebruikers");
        $stmt->execute();
        $results = $stmt->fetchAll();
        ?> -->
    <div class="accountpagina">
      <div class="accountlinks">
        <div class="persoonlijkeinfo">
          <div class="profielfoto">
          <img src="Images/profielfoto.png" />
          </div>
          <div class="profielnaam">
            <!-- <p><?php echo $results['username']; ?></p> -->
          </div>
          <div class="profieloverigeinfo">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, dolores veniam? Sed, perspiciatis neque fuga maiores aliquam perferendis? Nemo mollitia quam culpa blanditiis asperiores sapiente, deleniti eveniet praesentium ipsum cumque.</p>
          </div>
          <div class="logoutknop">
            <p>Logoutknop</p>
          </div>
        </div>
      </div>
      <div class="accountrechts">
        <div class="accountreizen">
          <div class="accountreizenheader">
            <p>Geboekte reizen</p>
          </div>
          <?php  
            include_once('includes/connection.php');

            $stmt = $conn->prepare("SELECT * FROM reizen");
            $stmt->execute();
            $results = $stmt->fetchAll();

            foreach ($results as $result) {
            ?>
          <div class="accountreis">
            <div class="accountreisnaam">
              <p><?php echo $result['locatie'];?></p>
            </div>
            <div class="annuleerknop">
              <p>Annuleer boeking</p>
            </div>
          </div>
            <?php
              }
          ?>
        </div>
      </div>
    </div>
  </body>
  <?php include('./includes/footer.php'); ?>
</html>
