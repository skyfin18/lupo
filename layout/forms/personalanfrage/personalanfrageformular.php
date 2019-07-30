<?php session_start();

include "./../../../inc/db.inc.php";
include "./../views/db-output.views.php";
?>

  <!--  <link rel="stylesheet" type="text/css" href="personalanfrageformular.css"> -->
<?php
// Formular - Zeichenkodierung: UTF-8

// Weiterleitung - Nach dem absenden des Formulars,
// gelangt der Benutzer über einen Link auf folgende Seite:
$Weiterleitung = "../header/index.php";

// PHPMailer einbinden, Instanz und Zeichenkodierung setzen.
echo "right ";
$Mailer = new PHPMailer();
$Mailer->CharSet = "UTF-8";



$betreff = "Personalanfrageformular";

$title = isset($_POST["title"]) ? strip_tags(trim($_POST["title"])) : ""; // Anrede
$fname = isset($_POST["fname"]) ? strip_tags(trim($_POST["fname"])) : ""; // Vorname
$lname = isset($_POST["lname"]) ? strip_tags(trim($_POST["lname"])) : ""; // Nachname
$companyname = isset($_POST["companyname"]) ? strip_tags(trim($_POST["companyname"])) : ""; // Firmenname
$adress = isset($_POST["adress"]) ? strip_tags(trim($_POST["adress"])) : ""; // Adresse
$plz = isset($_POST["plz"]) ? strip_tags(trim($_POST["plz"])) : ""; // PLZ
$tele = isset($_POST["tele"]) ? strip_tags(trim($_POST["tele"])) : ""; // Telefonnummer
$mobil = isset($_POST["mobil"]) ? strip_tags(trim($_POST["mobil"])) : ""; // Mobilnummer
$email = isset($_POST["email"]) ? strip_tags(trim($_POST["email"])) : ""; // E-Mail
$job = isset($_POST["job"]) ? strip_tags(trim($_POST["job"])) : ""; // Arbeitstellenbezeichnung
$summePersonal = isset($_POST["summePersonal"]) ? strip_tags(trim($_POST["summePersonal"])) : ""; // Anzahl Arbeitstellen
$localitation = isset($_POST["localitation"]) ? strip_tags(trim($_POST["localitation"])) : ""; // Einsatzort Personal
$bdate = isset($_POST["bdate"]) ? strip_tags(trim($_POST["bdate"])) : ""; // Erster Tag der überlassung
$school = isset($_POST["school"]) ? strip_tags(trim($_POST["school"])) : ""; // Erster Tag der überlassung
$kommi = isset($_POST["kommi"]) ? strip_tags(trim($_POST["kommi"])) : ""; // Kommentar
$firstdate = isset($_POST["firstdate"]) ? strip_tags(trim($_POST["firstdate"])) : ""; // Frühster Arbeitsbeginn



// Benutzereingaben überprüfen
// Die Meldungen müssen eventuell angepasst werden.
$Fehler = array("title" => "", "fname" => "", "lname" => "", "companyname" => "", "tele" => "", "mobil" => "", "email" => "", "job" => "", "bdate" => "", "kommi" => "", "firstdate" => "",);
if (isset($_POST["submit"])) {
    $Fehler["title"] = strlen($_POST["title"]) < 2 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["fname"] = strlen($_POST["fname"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["lname"] = strlen($_POST["lname"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["companyname"] = strlen($_POST["companyname"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["adress"] = strlen($_POST["adress"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["plz"] = strlen($_POST["plz"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["tele"] = strlen($_POST["tele"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["mobil"] = strlen($_POST["mobil"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["email"] = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false ? " Geben Sie eine gültige E-Mail-Adresse ein!" : "";
    $Fehler["job"] = strlen($_POST["job"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["summePersonal"] = strlen($_POST["summePersonal"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["localitation"] = strlen($_POST["localitation"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["bdate"] = strlen($_POST["bdate"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["school"] = strlen($_POST["school"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["kommi"] = strlen($_POST["kommi"]) < 0 ? " Bitte füllen Sie dieses Feld aus (min. 0 Zeichen)!" : "";
    $Fehler["firstdate"] = strlen($_POST["firstdate"]) < 0 ? " Bitte füllen Sie dieses Feld aus (min. 0 Zeichen)!" : "";
}

?>
<div class="responsiveX">

    <script>
        var headline = "Personalanfrage";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div id="borderForm" class="borderOrange bg_florawhite">

                    <br>

                    <?php

                    // Formular erstellen
                    $Formular = "
<form action='personalanfrageformular.php' method='post'>

<img class='imglogo' src='./../bilder/logo/logoFormulare.jpg' alt='Bild wurde nicht geladen'>

<h2 class=\"text-center\">Personalanfrageformular</h2>
<br>
<br>
<br>

<h3>1. Persönliche angaben</h3>

<br>
<!-- Anrede -->
<div class='form-group'>
    <label for='title'>Anrede:</label>
        <span class='pflichtfeld'>&#10034; " . $Fehler["fname"] . "</span><br>

    <select class=\"form-control selectpicker\" name=\"title\" id=\"title\" required='required'>
        <option value=\"\">Anrede</option>
        <option value=\"Herr\">Männlich</option>
        <option value=\"Frau\">Weiblich</option>
        <option value=\"„Divers“\">Divers</option>
    </select>
</div>

<!-- Vorname -->
<div class='form-group'>
    <label for=\"fname\">Vorname:</label>
    <span class='pflichtfeld'>&#10034; " . $Fehler["fname"] . "</span><br>
    <input class=\"form-control\" type='text' name='fname' value='" . $fname . "' placeholder=\"Vorname\" required='required'> 
    <small class=''> Geben Sie hier Ihren Vornamen ein. </small>
</div>

<!-- Nachname -->
<div class='form-group'>
    <label for=\"lname\">Nachname:</label>
     <span class='pflichtfeld'>&#10034; " . $Fehler["lname"] . "</span><br>
     <input class=\"form-control\" type='text' name='lname' value='" . $lname . "' placeholder=\"Nachname\" required='required'> 
    <small class='form-text text-muted'> Geben Sie hier Ihren Nachnmae ein. </small>
</div>

<!-- Companyname -->
<div class='form-group'>
 <label for=\"companyname\">Firmenname:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["companyname"] . "</span><br>
 <input class=\"form-control\" type='text' name='companyname' value='" . $companyname . "' placeholder=\"Firmenname\" required='required'> 
 <span class='form-text text-muted'> Geben Sie hier Ihren Firmenname ein. </span>
</div>
<!-- Adresse -->
<div class='form-group'>
 <label for=\"adress\">Adresse:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["adress"] . "</span><br>
 <input class='form-control' type='text' name='adress' value='" . $adress . "' placeholder=\"Adresse\" required='required'> 
 <span class='form-text text-muted'> Geben Sie hier Ihre Adresse ein. </span>
</div>
<!-- Postleitzahl -->
<div class='form-group'>
 <label for=\"adress\">Postleitzahl:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["plz"] . "</span><br>
 <input class='form-control' type='text' name='plz' value='" . $adress . "' placeholder=\"Postleitzahl\" required='required'> 
 <span class='form-text text-muted'> Geben Sie hier Ihre Postleitzahl ein. </span>
</div>

<!-- Telefonnummer -->
<div class='form-group'>
 <label for=\"tele\">Telefonnummer:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["tele"] . "</span><br>
 <input class='form-control' type='text' name='tele' value='" . $tele . "' placeholder=\"Telefonnummer\" required='required'> 
 <small class='form-text text-muted'> Geben Sie hier Ihre Telefonnummer ein. </small>
</div>

<!-- Mobilnummer -->
<div class='form-group'>
 <label for=\"mobil\">Mobilnummer:</label>
 <span " . $Fehler["mobil"] . "</span><br>
 <input class=\"form-control\" type='text' name='mobil' value='" . $mobil . "' placeholder=\"Mobilnummer\"> 
 <small class='form-text text-muted'> Geben Sie hier Ihre Mobilnummer ein. </small>
</div>

<!-- E-Mail -->
<div class='form-group'>
 <label for='email'> E-Mail:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["email"] . "</span><br>
 <input class=\"form-control\"  type='email' name='email' value='" . $email . "' placeholder='E-Mail' required='required'>
 <small class='form-text text-muted'> Geben Sie hier Ihre E-Mail-Adresse ein. </small>
</div>

<br>

<h3>2. Zu vergebene Arbeitstellen</h3>
<!-- Arbeitsstellenbezeichnung -->
<div class='form-group'>
 <label> Arbeitsstellenbezeichnung:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["job"] . "</span><br>
 <input class='form-control' type='job' name='job' value='" . $job . "' placeholder='z.B. Metallbauer, Logistiker, Zerspanungsmechankiker:' required='required'>
 <span class='form-text text-muted'> Geben Sie hier eine Arbeitstellenbezeichung </span>
</div>
<!-- Anzahl der zu besetzenden Arbeitstellen: -->
<div class='form-group'>
 <label for=\"summePersonal\">Anzahl der zu besetzenden Arbeitstellen:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["summePersonal"] . "</span><br>
 <input class='form-control' type='text' name='summePersonal' value='" . $summePersonal . "' placeholder=\"z.B. Metallbauer, Logistiker, Zerspanungsmechankiker:\" required='required'> 
 <span class='form-text text-muted'> Geben Sie hier die Anzahl der zu besetzenden Arbeitstellen: ein. </span>
</div>
<!-- Einsatzort des Personals: -->
<div class='form-group'>
 <label for=\"localitation\">Einsatzort des Personals:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["localitation"] . "</span><br>
 <input class='form-control' type='text' name='localitation' value='" . $summePersonal . "' placeholder=\"z.B. Standort wie Adresse oben, Musterstr / Musterort\" required='required'> 
 <span class='form-text text-muted'> Geben Sie hier den Ort ein, wo sie Personal benötigen </span>
</div>
<!-- Erster Tag der Überlassung: -->
<div class='form-group'>
 <label> Erster Tag der Überlassung:</label>
 <span class='pflichtfeld'>&#10034; " . $Fehler["bdate"] . "</span><br>
 <input class='form-control' type='bdate' name='bdate' value='" . $bdate . "' placeholder='z.B. Datum, Sofort ' required='required' >
 <span class='form-text text-muted'> Geben Sie hier den ersten Tag der Überlassung ein. </span>
</div>

<!-- school-->
<div class='form-group'>
 <label> Anforderungen der zu besetzenden Arbeitstelle:</label>
 <span>" . $Fehler["school"] . "</span> <br>
 <textarea class='form-control' placeholder='z.B. Schulische Qualifikationen, zusätzliche Zerfikate' name='school' cols='40' rows='8' >" . $school . "</textarea>
 <span class='form-text text-muted'>Beschreiben Sie hier ihre Anforderungen</span>
</div>

<!-- Nachricht: -->
<div class='form-group'>
 <label> Nachricht, Kommentar: </label>
 <span>" . $Fehler["kommi"] . "</span> <br>
 <textarea class='form-control' placeholder='Wünsche, Zusatz, Informationen, Hinweise' name='kommi' cols='40' rows='8' >" . $kommi . "</textarea>
 <span class='form-text text-muted'> Hier haben Sie Raum für Mitteilungen, Kommentare. </span>
</div>

<!-- Bevorzugter Termin: -->
<div class='form-group'>
 <label> Bevorzugter Termin für ein Vorstellungsgespräch:</label>
 <span> " . $Fehler["firstdate"] . "</span><br>
 <input class='form-control' type='bdate' name='firstdate' value='" . $firstdate . "' placeholder='z.B. Mittwoch' >
 <span class='form-text text-muted'> Geben Sie hier Ihren bevorzugten Termin für ein Vorstellungsgespräch ein. </span>
</div>

<!-- Checkbox: -->
<div id='checkbox'>
<input type=\"checkbox\" name=\"datenschutz\" id=\"datenschutz\" required/>
     <label for=\"datenschutz\">Hiermit bestätige ich die <a class='darkorange hover-darkorange' href=\"../footer/datenschutz.php\">Datenschutzvereinbarung</a>
    und <a class='darkorange' href='../footer/agbs.php'>AGBs</a>
    gelesen zu haben.
    </label>
</div>
                        
<p class='submit'>
 <input class='btn-warning' type='submit' name='submit' value='Formular absenden'>
</p>

<p class='submit'>
 <small>Bitte alle mit <span class='pflichtfeld'>&#10034;</span>
 markierten Felder ausfüllen.</small>
</p>
                        

</form>
";

                    // Formular abgesendet
                    if (isset($_POST["submit"])) {

                        // Sind keine Benutzer-Eingabefehler vorhanden
                        if (implode("", $Fehler) == "") {

                            // Daten als E-Mail mit dem PHPMailer versenden (Vorschlag) - Bitte anpassen!

                            // E-Mail Absender
                            $Mailer->setFrom($email, $lname);

                            // E-Mail Empfänger
                            $Mailer->addAddress("andre.dierl@outlook.com", "Andre Dierl CTO");
                            $Mailer->addAddress("schmidt_axel@outlook.de", "Axel Schmidt CEO");

                            // Betreff der E-Mail
                            $Mailer->Subject = $betreff;

                            // Zeitzone und das aktuelle Datum setzen
                            // Siehe: http://php.net/manual/de/timezones.europe.php
                            date_default_timezone_set("Europe/Berlin");
                            $Datum = date("d.m.Y H:i");

                            // Inhalt der E-Mail setzen
                            $Text = "   Gesendet am: $Datum Uhr
   Anrede: $title
   Vorname: $fname
   Nachname: $lname
   Firmenname: $companyname
   Adresse: $adress
   Postleitzahl: $plz
   Telefonnummer: $tele
   Mobilnummer: $mobil
   E-Mail: $email
   Arbeitsstellenbezeichnung: $job
   Anzahl der zu besetzenden Arbeitstellen: $summePersonal
   Einsatzort des Personals: $localitation
   Erster Tag der Überlassung: $bdate
   Anforderungen/Qualifikationen beschreiben: $school
   Nachricht, Kommentar: $kommi
   Bevorzugter Termin für ein Vertragsgespräch: $firstdate

  ";


                            $Mailer->Body = $Text;

                            // E-Mail senden und überprüfen ob diese richtig versandt wurde.
                            if ($Mailer->Send()) {
                                echo "<p class='text-center'><b>Vielen Dank <i>$title $lname</i>, Ihre Nachricht wurde versendet.</b></p>";
                                echo "  <div class=\"d-flex p-2\">
                                            <img class='img-fluid mx-auto d-block' src='../bilder/logo/picmail.jpg' alt='Bild wurde nicht geladen'>
                                        </div>
                                        <div class='text-center'>
                                           
                                            <div id='div-weiter' class=\"d-flex justify-content-center\"><a id='a-weiter' class='black hover-darkorange' href='" . $Weiterleitung . "' target='_top'><b>Weiter</b></a></div>
                                         </div>
                                        ";

                            } else {
                                echo "<p class='text-center'>Beim Senden der Nachricht ist ein Fehler aufgetreten!<br>" .
                                    $Mailer->ErrorInfo . "</p>";
                            }


                            // Weiterleitung
                            echo "<br>";
                        } else {

                            // Formular und Benutzer-Eingabefehler ausgeben
                            echo $Formular;
                        }
                    } else {

                        // Formular ausgeben
                        echo $Formular;
                    }

                    // Datenbankeintrag
                    if (isset($_POST['submit'])) {
                        $title = $_POST['title'];
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $companyname = $_POST['companyname'];
                        $adress = $_POST['adress'];
                        $plz = $_POST['plz'];
                        $tele = $_POST['tele'];
                        $mobil = $_POST['mobil'];
                        $email = $_POST['email'];
                        $job = $_POST['job'];
                        $summePersonal = $_POST['summePersonal'];
                        $localitation = $_POST['localitation'];
                        $bdate = $_POST['bdate'];
                        $school = $_POST['school'];
                        $kommi = $_POST['kommi'];
                        $firstdate = $_POST['firstdate'];


                        // daten in datenbank ändern
                        include "./inc/db_connect.php";

                        // SQL-Befehl
                        $sql_befehl = "INSERT INTO `foPersonalanfrage` (`id`, `title`, `fname`, `lname`, `companyname`, `adress`, `plz`, `tele`, `mobil`, `email`, `job`, `summePersonal`, `localitation`, `bdate`, `school`, `kommi`, `firstdate`) VALUES 
                                                                        (NULL, '$title', '$fname', '$lname', '$companyname', '$adress', '$plz', '$tele', '$mobil', '$email', '$job', '$summePersonal', '$localitation', '$bdate', '$school', '$kommi', '$firstdate');";

                        if ($db->query($sql_befehl)) {
                        } else {
                            // Meldung bei Fehlschlag
                            echo "Datensätze konnte nicht angelegt werden!";
                        }

                        // Verbindung zum Datenbankserver beenden
                        $db->close();
                    }

                    ?>
                </div>

                <br>

            </div>
        </div>
    </div>


</div>




<?php
include "./layout/slogan/slogan.php";

?>