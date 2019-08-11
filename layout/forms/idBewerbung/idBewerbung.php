<?php session_start();

require "./../../../inc/db.inc.php";
require "./../../../views/db-output.views.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo "ID-Bewerbung" ?></title>

    <!-- css -->
    <link rel="stylesheet" href="./../../../bootstrap-4.3.1-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./../../../layout/header/header.css">

    <link rel="stylesheet" href="./../../../layout/forms/bewerbungsformularMuster.css">

    <link rel="stylesheet" href="./../../../layout/universal.css">


    <link rel="stylesheet" href="./../../../layout/footer/footer.css">

    <!-- java-script -->
    <script src="./../../../layout/header/header.js"></script>

    <script src="./../form.js"></script>

    <!-- jquery-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- dropezone -->
    <link rel="stylesheet" href="./../dropzone-master/dist/dropzone.css">
    <script type="text/javascript" src="./../dropzone-master/dist/dropzone.js"></script>

    <script>
        // disable auto discover
        Dropzone.autoDiscover = false;
        // init dropzone on id (form or div)
        $(document).ready(function () {
            var myDropzone = new Dropzone("#myDropzone", {
                url: "idBewerbung.php",
                paramName: "file",
                autoProcessQueue: false,
                uploadMultiple: true, // uplaod files in a single request
                parallelUploads: 100, // use it with uploadMultiple
                maxFilesize: 10, // MB
                maxFiles: 5,
                acceptedFiles: ".jpg, .jpeg, .png, .gif, .pdf",
                addRemoveLinks: true,
                // Language Strings
                dictFileTooBig: "File is to big ({{filesize}}mb). Max allowed file size is {{maxFilesize}}mb",
                dictInvalidFileType: "Invalid File Type",
                dictCancelUpload: "Cancel",
                dictRemoveFile: "Remove",
                dictMaxFilesExceeded: "Only {{maxFiles}} files are allowed",
                dictDefaultMessage: "Drop files here to upload",
            });
        });
        Dropzone.options.myDropzone = {
            // The setting up of the dropzone
            init: function () {
                var myDropzone = this;
                // First change the button to actually tell Dropzone to process the queue.
                $("#dropzoneSubmit").on("click", function (e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();

                    if (myDropzone.files != "") {
                        myDropzone.processQueue();
                    } else {
                        $("#myDropzone").submit();
                    }
                });
                // on add file
                this.on("addedfile", function (file) {
                    // console.log(file);
                });
                // on error
                this.on("error", function (file, response) {
                    // console.log(response);
                });
                // on start
                this.on("sendingmultiple", function (file) {
                    // console.log(file);
                });
                // on success
                this.on("successmultiple", function (file) {
                    // submit form
                    $("#form").submit();
                });
            }
        };
    </script>
</head>
<body>


<?php

$jobid = $_SESSION["jobid"];

// Formular - Zeichenkodierung: UTF-8

// Weiterleitung - Nach dem absenden des Formulars,
// gelangt der Benutzer über einen Link auf folgende Seite:
$Weiterleitung = "./../../../../lupo";

// PHPMailer einbinden, Instanz und Zeichenkodierung setzen.
require "./../PHPMailer-5.2-stable/PHPMailerAutoload.php";
$Mailer = new PHPMailer();
$Mailer->CharSet = "UTF-8";

$betreff = "ID-Bewerbung";
// Speicherort für Link Upload
$path = "../uploads/";

$title = isset($_POST["title"]) ? strip_tags(trim($_POST["title"])) : ""; // Anrede
$fname = isset($_POST["fname"]) ? strip_tags(trim($_POST["fname"])) : ""; // Vorname
$lname = isset($_POST["lname"]) ? strip_tags(trim($_POST["lname"])) : ""; // Nachname
$tele = isset($_POST["tele"]) ? strip_tags(trim($_POST["tele"])) : ""; // Telefonnummer
$mobil = isset($_POST["mobil"]) ? strip_tags(trim($_POST["mobil"])) : ""; // Mobilnummer
$email = isset($_POST["email"]) ? strip_tags(trim($_POST["email"])) : ""; // E-Mail
$job = isset($_POST["job"]) ? strip_tags(trim($_POST["job"])) : ""; // Bewerbungsberuf
$bdate = isset($_POST["bdate"]) ? strip_tags(trim($_POST["bdate"])) : ""; // Frühster Arbeitsbeginn
$upload = isset($_POST["upload"]) ? strip_tags(trim($_POST["upload"])) : ""; // Upload
$kommi = isset($_POST["kommi"]) ? strip_tags(trim($_POST["kommi"])) : ""; // Kommentar
$firstdate = isset($_POST["firstdate"]) ? strip_tags(trim($_POST["firstdate"])) : ""; // Frühster Arbeitsbeginn

// Benutzereingaben überprüfen
// Die Meldungen müssen eventuell angepasst werden.
$Fehler = array("title" => "", "email" => "", "betreff" => "", "nachricht" => "",);
if (isset($_POST["submit"])) {
    $Fehler["title"] = strlen($_POST["title"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["fname"] = strlen($_POST["fname"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["lname"] = strlen($_POST["lname"]) < 3 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["tele"] = strlen($_POST["tele"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["mobil"] = strlen($_POST["mobil"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["email"] = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false ? " Geben Sie eine gültige E-Mail-Adresse ein!" : "";
    $Fehler["job"] = strlen($_POST["job"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["bdate"] = strlen($_POST["bdate"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["upload"] = strlen($_POST["upload"]) < 0 ? " Bitte füllen Sie dieses Feld aus!" : "";
    $Fehler["kommi"] = strlen($_POST["kommi"]) < 0 ? " Bitte füllen Sie dieses Feld aus (min. 0 Zeichen)!" : "";
    $Fehler["firstdate"] = strlen($_POST["firstdate"]) < 0 ? " Bitte füllen Sie dieses Feld aus (min. 0 Zeichen)!" : "";
}

include "../../header/header.php";
?>

<div class="responsiveX">

    <script> var headline = "ID-Bewerbung"; </script>

    <section id="headerHeadline">
        <div class="bgHellGrey ">

            <div class="row">
                <div class="col-md-12">

                    <img id="imgMuc" src="./../../../layout/header/imgMuc.jpg" alt="Bild konnte nicht geladen werden!">

                    <h1 id="headline" class="text-center m-0">
                        <script>document.write(headline)</script>
                    </h1>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div id="borderForm" class="borderOrange bg_florawhite">

                    <br>



                    <?php
                    // Formular erstellen
                    $Formular = "
<form id='form' action='idBewerbung.php' method='POST'>

<img class='imglogo' src='./../../../bilder/forms/logoFormulare.jpg' alt='Bild wurde nicht geladen'>

<h2 class=\"text-center\">Bewerbungsformular-ID</h2>
<br>
<br>
<br>

<h3>1. Persönliche angaben</h3>

<br>
<!-- Anrede -->
<div class='form-group'>
    <label for='title'>Anrede</label>
    <select class=\"form-control selectpicker\" name=\"title\" id=\"title\">
        <option value=\"\">Anrede</option>
        <option value=\"Männlich\">Männlich</option>
        <option value=\"Weiblich\">Weiblich</option>
        <option value=\"„Divers“\">Divers</option>
    </select>
</div>

<!-- Vorname -->
<div class='form-group'>
    <label for=\"fname\">Vorname:</label>
    <span class='pflichtfeld'>&#10034; " . $Fehler["fname"] . "</span><br>
    <input class=\"form-control\" type='text' name='fname' value='" . $fname . "' placeholder=\"Vorname\" required='required'> 
    <small class='form-text text-muted'> Geben Sie hier Ihren Vornamen ein. </small>
</div>

<!-- Nachname -->
<div class='form-group'>
    <label for=\"lname\">Nachname:</label>
     <span class='pflichtfeld'>&#10034; " . $Fehler["lname"] . "</span><br>
     <input class=\"form-control\" type='text' name='lname' value='" . $lname . "' placeholder=\"Nachname\" required='required'> 
    <small class='form-text text-muted'> Geben Sie hier Ihren Nachnmae ein. </small>
</div>

<!-- Telefonnummer -->
<div class='form-group'>
 <label for=\"tele\">Telefonnummer:</label>
 <span " . $Fehler["tele"] . "</span><br>
 <input class='form-control' type='text' name='tele' value='" . $tele . "' placeholder=\"Telefonnummer\"> 
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

<h3>2. Bewerbung</h3>

<div class='form-group'>
    <label for='id'>Bewerbung über ID</label>
    <span class='form-control'> $jobid </span>
    <small class='form-text text-muted'> Stellenangebots-ID. </small>
</div>


<!-- Frühster Arbeitsbeginn -->
<div class='form-group'>
 <label> Frühster Arbeitsbeginn:</label>
 <span " . $Fehler["bdate"] . "</span><br>
 <input class='form-control' type='bdate' name='bdate' value='" . $bdate . "' placeholder='z.B. Datum, Sofort '>
 <small class='form-text text-muted'>Geben Sie hier Ihren frühster Arbeitsbeginn ein. </small>
</div>

<!-- Dropezone -->
<div class='form-group'>
 <label> Anhänge Auswählen:</label>
 <span class='pflichtfeld'>&#10034;  " . $Fehler["upload"] . "</span><br>
    <div id=\"myDropzone\" class=\"dropzone form-control\"></div>
 <small class='form-text text-muted'>Anschreiben, Lebenslauf, Zeugnisse, Zusatzqualifikationen</small>
</div>

<!-- Nachricht: -->
<div class='form-group'>
 <label> Nachricht, Kommentar: </label>
 <span>" . $Fehler["kommi"] . "</span> <br>
 <textarea class='form-control' placeholder='Wünsche, Zusatz, Informationen, Hinweise' name='kommi' cols='40' rows='8' >" . $kommi . "</textarea>
 <small class='form-text text-muted'> Hier haben Sie Raum für Mitteilungen, Kommentare. </small>
</div>

<!-- Bevorzugter Termin: -->
<div class='form-group'>
 <label> Bevorzugter Termin für ein Vorstellungsgespräch:</label>
 <span> " . $Fehler["firstdate"] . "</span><br>
 <input class='form-control' type='bdate' name='firstdate' value='" . $firstdate . "' placeholder='Datum / Nach Absprache' >
 <small class='form-text text-muted'> Geben Sie hier Ihren bevorzugten Termin für ein Vorstellungsgespräch ein. </small>
</div>

<!-- checkbox -->
<div id='checkbox'>
<input type=\"checkbox\" name=\"datenschutz\" id=\"datenschutz\" required/>
    <label for=\"datenschutz\">Hiermit bestätige ich die <a class='darkorange hover-darkorange' href=\"../footer/datenschutz.php\">Datenschutzvereinbarung</a>
    und <a class='darkorange hover-darkorange' href='../footer/agbs.php'>AGBs</a>
    gelesen zu haben.
    </label>
</div>
                
<br>
                        
<p class='submit'>
 <button class='btn-warning' id='dropzoneSubmit'>Formular absenden</button>
</p>

<p class='submit'>
 <small>Bitte alle mit <span class='pflichtfeld'>&#10034;</span>
 markierten Felder ausfüllen.</small>
</p>
                        

</form>
";

                    // Formular abgesendet
                    if (count($_POST) > 1) {

                        // Sind keine Benutzer-Eingabefehler vorhanden
                        if (implode("", $Fehler) == "") {

                            // Daten als E-Mail mit dem PHPMailer versenden (Vorschlag) - Bitte anpassen!
                            foreach ($_SESSION['uploads'] as $upload) {
                                $Mailer->addAttachment($path . $upload, $upload);
                            }

                            // E-Mail Absender
                            $Mailer->setFrom($email, $lname);

                            // E-Mail Empfänger
                            $Mailer->addAddress("andre.dierl@outlook.com", "Andre Dierl CTO ");
                            $Mailer->addAddress("Schmidt_Axel@outlook.de", "Axel Schmidt CEO");

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
   Telefonnummer: $tele
   Mobilnummer: $mobil
   E-Mail: $email
   Job - ID: $jobid
   Wunsch / Bewerbungs-beruf: $job
   Frühster Arbeitsbeginn: $bdate
   Upload: $upload
   Nachricht, Kommentar: $kommi
   Bevorzugter Termin für ein Vorstellungsgespräch: $firstdate
  ";
                            $Mailer->Body = $Text;

                            // E-Mail senden und überprüfen ob diese richtig versandt wurde.
                            if ($Mailer->Send()) {
                                echo "<p class='text-center'><b>Vielen Dank, Ihre Nachricht wurde versendet.</b><br>Mit freundlichen Grüßen Lupo. </p>";
                                echo "  <div class=\"d-flex p-2\">
                                            <img class='img-fluid mx-auto d-block' src='./../picmail.jpg' alt='Bild wurde nicht geladen'>
                                        </div>
                                        <div class='text-center'>
                                           
                                            <div id='div-weiter' class=\"d-flex justify-content-center\"><a id='a-weiter' class='black hover-darkorange' href='" . $Weiterleitung . "' target='_top'><b>Weiter</b></a></div>
                                         </div>
                                        ";

                            } else {
                                echo "<p>Beim Senden der Nachricht ist ein Fehler aufgetreten!<br>" .
                                    $Mailer->ErrorInfo . "</p>";
                            }

                            // Weiterleitung
                            echo "<br>";
                        } else {

                            // Formular und Benutzer-Eingabefehler ausgeben
                            echo $Formular;
                        }
                    } else {
                        if (!empty($_FILES)) {
                            foreach ($_FILES['file']['tmp_name'] as $key => $value) {
                                $_SESSION['uploads'] = $_FILES['file']['name'];
                                $tempFile = $_FILES['file']['tmp_name'][$key];
                                $targetFile = '../uploads/' . $_FILES['file']['name'][$key];
                                move_uploaded_file($tempFile, $targetFile);
                            }
                        }
                        // Formular ausgeben
                        echo $Formular;
                    }
                    // Datenbankeintrag
                    if (isset($_POST['submit'])) {
                        $title = $_POST['title'];
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $tele = $_POST['tele'];
                        $mobil = $_POST['mobil'];
                        $email = $_POST['email'];
                        $job = $_POST['job'];
                        $bdate = $_POST['bdate'];
                        $upload = $_POST['upload'];
                        $kommi = $_POST['kommi'];
                        $firstdate = $_POST['firstdate'];


                        // daten in datenbank ändern
                        include "./../../../inc/db_connect.php";

                        // SQL-Befehl
                        $sql_befehl = "INSERT INTO `foInitiativbewerbung` (`id`, `title`, `fname`, `lname`, `tele`, `mobil`, `email`, `bdate`, `upload`, `kommi`, `firstdate`, `jobid`) VALUES (NULL, '$title', '$fname', '$lname', '$tele', '$mobil', '$email', '$bdate', '', '$kommi', '$firstdate', '$jobid');";

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

    <?php
    include "./../../slogan/slogan.php";

    ?>

</div>

<?php
include_once "../../../layout/footer/footer.php";
?>

<!-- java Script important! -->

<script>
    document.getElementById ('initiativbewerbung'). href = './../initiativbewerbung/initiativbewerbung.php';
    document.getElementById ('personalanfrage'). href = './../personalanfrage/personalanfrageformular.php';
</script>

<script src="./../form.js"></script>

<script>document.getElementById("imgFooterLogo").src = "./../../../bilder/footer/imgFooterLogo.png"; </script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>
