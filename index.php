<?php
session_start();

require("./inc/functions.inc.php");
require "./inc/db.inc.php";

require "./views/db.views.php";
require "./layout/forms/PHPMailer-5.2-stable/PHPMailerAutoload.php";


?>

<!doctype html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- css -->
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

    <link rel="stylesheet" href="./layout/footer/footer.css">


    <title><?php ?></title>

    <!-- jquery-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>

    <!-- dropezone -->
    <link rel="stylesheet" href="./layout/forms/dropzone-master/dist/dropzone.css">
    <script src="./layout/forms/dropzone-master/dist/dropzone.js"></script>

    <script>
        // init dropzone on id (form or div)
        $(document).ready(function () {
            var myDropzone = new Dropzone("#myDropzone", {
                url: "layout/forms/initiativbewerbung.php",
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

            // disable auto discover
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
        });

    </script>


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

    <section style="display: none" id="initiativbewerbung"><?php include "layout/forms/initiativbewerbung/initiativbewerbung.php"?></section>

    <section style="" id="personalanfrage"><?php  include "layout/forms/personalanfrage/personalanfrageformular.php"; ?></section>

    <section style="" id="idBewerbung"><?php  include "layout/forms/idBewerbung/idBewerbung.php"?>
        <?php
         include "./layout/footer/footer.php";
    ?>

    <footer>
        <!-- java-script -->
        <script src="layout/header/header.js">

        </script>
    </footer>
</div>

</body>
</html>