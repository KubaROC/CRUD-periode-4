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
    <div class="reizencontainer">
      <div class="reizentekst">
        <h1>Op deze pagina kunt u uw favoriete reizen boeken! U heeft de keuze uit vele leuke bestemmingen. U kunt u zich ook altijd weer uitschrijven. Veel plezier!</h1>
      </div>
      <?php  
        include_once('includes/reizenconnection.php');

        $stmt = $conn->prepare("SELECT * FROM reizen");
        $stmt->execute();
        $results = $stmt->fetchAll();

        foreach ($results as $result) {
        ?>
      <div class="reisbox">
        <div class="reisboven">
          <div class="reisbovenlinks">
            <div class="reisprijs">
              <p><?php echo $result['locatie']; ?></p>
            </div>
            <div class="reislocatie">
            <p>€<?php echo $result['prijs']; ?></p>
            </div>
          </div>

          <div class="reisbovenrechts">
            <div class="reisalgemeen">
              <p>
              <p><?php echo $result['algemeen']; ?></p>
              </p>
            </div>
          </div>
        </div>

        <div class="reismidden">
          <div class="reismiddenlinks">
            <div class="reisbegindatum">
              <p>Begindatum:</p>
            <p><?php echo $result['beginDatum']; ?></p>
            </div>
          </div>

          <div class="reismiddenrechts">
            <div class="reiseinddatum">
              <p>Einddatum:</p>
            <p><?php echo $result['eindDatum']; ?></p>
            </div>
          </div>
        </div>

        <div class="reisonder">
          <div class="reisonderlinks">
            <div class="boeken">
              <Button>Boeken</Button>
            </div>
          </div>
          <div class="reisonderrechts">
            <div class="verwijderen">
            <Button>Verwijderen</Button>
            </div>
          </div>
        </div>
      </div>
        <?php
          }
      ?>
    </div>
    <?php include('./includes/footer.php'); ?>
  </body>
</html>
