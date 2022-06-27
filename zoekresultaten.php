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
    <div class="pagina">

      <?php include('./includes/header.php'); ?>

      <div class="afbeelding">
        <div class="afbeeldingtekst">
          <h1>
            Wij zijn Reisorganisatie X. Dé leukste bestemmingen vindt u bij ons!
          </h1>
        </div>
        <img src="Images/indeximage2.jpeg" />
      </div>
      <div class="indexonder">
        <div class="tekstblok">
          <p>
            Zoek uw droomreis uit op de 'Reizen' pagina. Bepaal de bestemming en
            tijd, en wij doen de rest voor u!
          </p>
        </div>
        <div class="tekstblok">
          <p>
            Wilt u meer weten over ons? Ga dan naar de 'Over ons' pagina en leer
            meer over ons bedrijf.
          </p>
        </div>
        <div class="tekstblok">
          <p>
            Heeft u een vraag of klacht? Dan kunt u altijd bij ons terecht. Ga
            naar de 'Contact' pagina voor al onze contactgegevens.
          </p>
        </div>
      </div>
      <div class="zoekresultaatcontainer">
          <div class="zoekresultatentekst">
              <p>Hier zijn de zoekresultaten:</p>
          </div>
          <div class="zoekresultaten">
          <?php 
              require_once("includes/connection.php");

              
              $zoekvraag = $_GET['zoekbalk'];
              $reisMetLike = '%'.$zoekvraag.'%';


              $query = "SELECT * FROM reizen WHERE `locatie` LIKE :locatie";
              $stmt = $conn->prepare($query);
              $stmt->bindParam(':locatie', $reisMetLike, PDO::PARAM_STR);
              $stmt->execute();

              $result = $stmt->fetchAll();

              foreach($result as $reis) {
                ?>

                <div class="zoekresultaat">
                  <div class="reisnaam">
                    <p><?php echo $reis['locatie']; ?></p>
                  </div>
                  <div class="reisprijs">
                    <p>€<?php echo $reis['prijs']; ?>,-</p>
                  </div>
                </div>
                <?php
                }
              ?>
              
    </div>
    <?php include('./includes/footer.php'); ?>
  </body>
</html>