<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Agentur Lupo">
    <meta name="keywords" content="Personalagentur, Zeitarbeit, Arbeit, München, Lupo">
    <meta name="author" content="Fin, Andre Dierl">
    <link href="../bootstrap/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../universal/universellClass.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 800px)"
          href="../header/headerDestop.css">
    <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 799px)"
          href="../header/headerMobil.css">
    <link rel="stylesheet" type="text/css" href="../header/fUnternehmer.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    <link rel="icon" href="../bilder/logo/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php include_once "../header/header.php"; ?>
<br>
<br>
<br>


<div class="container-fluid bgHellGrey">
    <div class="row">
        <div class="col-md-12">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br>

                        <p class="float-right"><a style="color: black; " href="logout.php">Abmelden</a></p>
                        <br>
                        <h1 class="center">Admin Panel
                            <br> Herzlich Willkommen <?= htmlspecialchars($benututzername); ?></h1>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php

include "../datenbank/db_connect.php";


if ($resultat = $db->query('SELECT * FROM foInitiativbewerbung ORDER by id')) {
// Antwort der Datenbank in ein Objekt übergeben und
// mithilfe der while-Schleife durchlaufen
    while ($daten = $resultat->fetch_object()) {
        $_SESSION['title'] = $daten->title;
        $_SESSION['fname'] = $daten->fname;
        $_SESSION['lname'] = $daten->lname;
        $_SESSION['tele'] = $daten->tele;
        $_SESSION['mobil'] = $daten->mobil;
        $_SESSION['email'] = $daten->email;
        $_SESSION['job'] = $daten->job;
        $_SESSION['bdate'] = $daten->bdate;
        $_SESSION['kommi'] = $daten->kommi;
        $_SESSION['firstdate'] = $daten->firstdate;
    }
// Speicher freigeben
    $resultat->close();
} else {
// Sollten keine Datensätze enthalten sein, diese Meldung ausgeben
    echo "Es konnten keine Daten aus der Datenbank ausgelesen werden";
}

// Verbindung zum Datenbankserver beenden
$db->close();

$title = ($_SESSION['title']);
$fname = ($_SESSION['fname']);
$lname = ($_SESSION['lname']);
$tele = ($_SESSION['tele']);
$mobil = ($_SESSION['mobil']);
$email = ($_SESSION['email']);
$job = ($_SESSION['job']);
$bdate = ($_SESSION['bdate']);
$kommi = ($_SESSION['kommi']);
$firstdate = ($_SESSION['firstdate']);


?>

<div class="container">
    <div class=row>
        <div class="col-md-12">
            <h2 class="page-header">Initiativbewerbung</h2>


            <div class="col-md-2">
                <h4>Anrede:</h4>
                <?php echo $title ?>
            </div>

            <div class="col-md-2">
                <h4>Vorname:</h4>
                <?php echo $fname ?>
            </div>

            <div class="col-md-2">
                <h4>Nachname:</h4>
                <?php echo $lname ?>

            </div>

            <div class="col-md-2">
                <h4>Telefonnummer:</h4>
                <?php echo $tele ?>
            </div>

            <div class="col-md-2">
                <h4>Mobilnummer:</h4>
                <?php echo $mobil ?>
            </div>

            <div class="col-md-2">
                <h4>E-Mail:</h4>
                <?php echo $email ?>
            </div>

            <div class="col-md-2">
                <h4>Bewerbungsberug:</h4>
                <?php echo $job ?>
            </div>

            <div class="col-md-2">
                <h4>Frühster Arbeitsg:</h4>
                <?php echo $bdate ?>
            </div>

            <div class="col-md-2">
                <h4>Kommentar:</h4>
                <?php echo $kommi ?>
            </div>

            <div class="col-md-4">
                <h4>Termin für Vorstellung:</h4>
                <?php echo $firstdate ?>
            </div>

            <div class="col-md-1">

            </div>



        </div>
    </div>
</div>


<div class="container">
    <div class="col-md-4">
        <h2 class="page-header">Personalanfrage</h2>
    </div>

    <div class="col-md-4">
        <h2 class="page-header">ID-Bewerbung</h2>
    </div>
</div>


<?php if ($istBenutzerAngemeldet): ?>

<?php else: ?>
    <p>Zugriff nur für angemeldete Benutzer</p>
    <p><a href="login.php">Login</a></p>


<?php endif; ?>

<?php include_once "../footer/footer.php"; ?>
</body>
</html>






















