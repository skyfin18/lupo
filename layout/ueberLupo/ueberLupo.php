<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$ueberLupoH1 = null;
$ueberLupoH2 = null;
$ueberLupoH3 = null;
$ueberLupoH4 = null;
$ueberLupoT1 = null;
$ueberLupoT2 = null;
$ueberLupoT3 = null;
$ueberLupoT4 = null;


require "./inc/db.inc.php";
require "./views/db-output.views.php";

?>

<script>
    var headline = "Über Lupo";
</script>

<?php include "./layout/header/headerHeadline.php"; ?>


<div class="responsiveX">
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_ueberlupo_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $ueberLupoH1; ?></h2>

                <img id="imgUeberlupoHandy" src="./bilder/ueberLupo/imgUeberlupoHandy.jpg"
                     alt="Bild wurde nicht geladen">
                <img id="imgUeberlupoTablet" src="./bilder/ueberLupo/imgUeberlupoTablet.jpg"
                     alt="Bild wurde nicht geladen">
                <img id="imgUeberlupoDestop" src="./bilder/ueberLupo/imgUeberlupoDestop.jpg"
                     alt="Bild wurde nicht geladen">

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_ueberlupo_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $ueberLupoT1; ?></p>

                <br>
                <br>
            </div>
        </div>
    </section>

    <section class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_ueberlupo_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $ueberLupoH2; ?></h2>
                            <br>

                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_ueberlupo_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <p><?php echo $ueberLupoT2; ?></p>

                            <br>
                            <br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_headline_3'>Headline 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_ueberlupo_headline_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $ueberLupoH3; ?></h2>

                <br>
                <br>

                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_ueberlupo_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $ueberLupoT3; ?></p>

                <br>
                <br>
            </div>
        </div>
    </section>

    <section class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <p>
                                Gerne vereinbaren wir einen Termin zum persönlichen Gespräch. schreiben Sie uns doch
                                einfach eine Mail an:
                                <a class="black hover-darkorange" href="./layout/flyer/flyer.php">
                                    <br>
                                    <b>info@personal-agentur-lupo.de</b>
                                </a>
                                oder rufen Sie uns mobil unter der
                                <a class="black hover-darkorange"
                                   href="./layout/flyer/flyer.php"><b>+4917672426019</b></a> an.
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 4 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_headline_4'>Headline 4 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_ueberlupo_headline_4">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $ueberLupoH4; ?></h2>

                <img id="imgUeberlupoHandy2" src="./bilder/ueberLupo/imgUeberLupoHandy2.jpg"
                     alt="Bild wurde nicht geladen">
                <img id="imgUeberlupoTablet2" src="./bilder/ueberLupo/imgUeberlupoTablet2.jpg"
                     alt="Bild wurde nicht geladen">
                <img id="imgUeberlupoDestop2" src="./bilder/ueberLupo/imgUeberlupoDestop2.jpg"
                     alt="Bild wurde nicht geladen">

                <!--  Text 4 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_ueberlupo_text_4'>Text 4 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_ueberlupo_text_4">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $ueberLupoT4; ?></p>

                <br>
                <br>
            </div>
        </div>
    </section>

    <?php include_once "./layout/slogan/slogan.php" ?>

</div>
