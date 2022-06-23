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
      <div class="contactcontainer">
        <div class="afbeeldingcontact">
            <img src="Images/contactafbeelding.jpg" />
        </div>
        <div class="tekstcontact">
          <div class="contactlinks">
            <div class="contactlinksboven">
              <h2>Als u vragen heeft, kunt u altijd contact met ons opnemen!</h2>
            </div>
            <div class="contactlinksonder">
              <ul>
                <li style="display: inline">Telefoon:   06 1234567</li>
                <li style="display: inline">E-mail:   bedrijfx.gmail.com</li>
                <li style="display: inline">Instagram:    bedrijfx</li>
              </ul>
            </div>
          </div>
          <div class="contactrechts">
            <?php 
              if (isset($_GET['bericht'])) {
            ?>
              <p>Bericht verzonden</p>
              <p>Wij zullen uw bericht zo snel mogelijk beantwoorden</p>
              <p>Wilt u nog een bericht sturen? Refresh dan de pagina</p>

            <?php 
              } else {
            ?>
              <form action="php/addReview.php" method="post">
                <label>Naam</label>
                <input type="text" name="naam" />
                <label>Bericht</label>
                <input type="text" name="bericht"/>
                <button type="submit" name="submit" >Verzenden</button>
              </form>
            <?php
              }
            ?>
          </div>   
        </div>
      </div>
    <div>
    <?php include('./includes/footer.php'); ?>
</body>
</html>