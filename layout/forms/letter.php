<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>E-Mail wurde versendet</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Agentur Lupo">
    <meta name="keywords" content="Personalagentur, Zeitarbeit, Arbeit, München, Lupo">
    <meta name="author" content="Fin, Andre Dierl">
    <link href="../bootstrap/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../universal/universellClass.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 800px)" href="../header/headerDestop.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 799px)" href="../header/headerMobil.css">
    <link rel="stylesheet" type="text/css" href="runapplicationform.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    <link rel="icon" href="../bilder/logo/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php
include_once "../header/header.php";
?>
<br><br><br><br>

<h2 class="center">Ihre Personalanfrage wurde erfolgreich an uns versendet!
    <br>
    Vielen Dank!
    <br>
</h2>



<img id="picmail" src="../bilder/logo/picmail.png" alt="Bild konnte nicht geladen werden!"<br>
<br>
<h4 class="center">Sie werden unverzüglich eine Bestätigungsmail auf der von Ihnen
    angegebene E-Mail Adresse erhalten.
</h4>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6 runapplicationform_button">
            <button class="myButton"><a class="bgwhite white" href="../header/index.php">Zurück zur Homepage</a></button>
        </div>
        <div class="col-md-6 runapplicationform_button">
            <button class="myButton"><a class="bgwhite white" href="../header/jobboerse.php">Zurück zur Jobbörse</a></button>
        </div>
    </div>
</div>

<br><br><br>

<?php
include_once "../footer/footer.php";
?>
</body>
</html>
