<?php
session_start();
//
// .inc db connect
require "./inc/db.inc.php";
include "./inc/db_connect.php";

// .inc function
require("./inc/functions.inc.php");

// views
require "./views/db.views.php";
include "./views/db-output.views.php";

// php mailer
require "./layout/forms/PHPMailer-5.2-stable/PHPMailerAutoload.php";


?>

<!doctype html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- css -->
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./layout/universal.css">

    <link rel="stylesheet" href="./layout/bewUnt/fBewfUnt.css">

    <link rel="stylesheet" href="./layout/header/header.css">


    <link rel="stylesheet" href="./layout/home/home.css">


    <link rel="stylesheet" href="layout/leistungen/leistungen.css">

    <link rel="stylesheet" href="layout/fBewerber/bewerber.css">

    <link rel="stylesheet" href="layout/unternehmer/fUnternehmer.css">
    <link rel="stylesheet" href="layout/jobboerse/jobboerse.css">
    <link rel="stylesheet" href="layout/partner/partner.css">
    <link rel="stylesheet" href="layout/ueberLupo/ueberLupo.css">
    <link rel="stylesheet" href="layout/kontakt/kontakt.css">
    <link rel="stylesheet" href="layout/flyer/flyer.css">

    <link rel="stylesheet" href="layout/forms/bewerbungsformularMuster.css">
    <link rel="stylesheet" href="layout/stellenangebote/elektroniker.css">

    <link rel="stylesheet" href="./layout/footer/footer.css">


    <title><?php ?></title>


    <!-- jquery-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

    <!-- leaflet -->
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>

    <!-- dropezone -->
    <link rel="stylesheet" href="./layout/forms/dropzone-master/dist/dropzone.css">
    <script src="./layout/forms/dropzone-master/dist/dropzone.js"></script>

    <!-- java-script -->
    <script src="layout/header/header.js"></script>
    <script src="./layout/footer/footer.js"></script>




</head>
<body>

<div class="responsiveX">

    <?php include_once "./layout/header/header.php"; ?>


    <section id="home"><?php include "./layout/home/home.php" ?></section>


    <section style="display: none" id="leistungen"><?php include "layout/leistungen/leistungen.php"; ?></section>

    <section style="display: none" id="bewerber"><?php include "layout/fBewerber/fBewerber.php"; ?></section>


    <section style="display: none" id="unternehmer"><?php include "layout/unternehmer/unternehmer.php" ?></section>

    <section style="display: none" id="jobboerse"><?php include "layout/jobboerse/jobboerse.php"; ?></section>

    <section style="display: none" id="partner"><?php include "layout/partner/partner.php" ?></section>

    <section style="display: none" id="ueberLupo"><?php include "layout/ueberLupo/ueberLupo.php" ?></section>

    <section style="display: none" id="kontakt"><?php include "layout/kontakt/kontakt.php" ?></section>

    <section style="display: none;" id="flyer"><?php include "layout/flyer/flyer.php" ?></section>

    <section style="display: none" id="faqs"><?php include "layout/faqs/faqs.php" ?></section>

    <section style="display: none;" id="datenschutz"><?php include "layout/datenschutz/datenschutz.php" ?></section>

    <section style="display: none;" id="impressum"><?php include "layout/impressum/impressum.php" ?></section>

    <section style="display: none;" id="agbs"><?php include "layout/agbs/agbs.php" ?></section>

    <section style="display: none"
             id="stellenangebote"><?php include "layout/stellenangebote/elektroniker.php" ?></section>

    <a href="#" class="scrollup" title="Nach oben springen!">
        <div class="arrow">

        </div>
    </a>

    <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 700) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function () {
            $("html, body").animate({scrollTop: 0}, 700);
            return false;
        });
    </script>


    <footer>

        <?php include "./layout/footer/footer.php"; ?>


    </footer>

    <div class="fixed-bottom">

        <a href="#" class="to-top"></a>

    </div>


</div>

<!-- link -->
<script src="index.js">


</script>


</body>
</html>