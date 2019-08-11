<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$fBewerberH1 = null;
$fBewerberH2 = null;
$fBewerberH3 = null;
$fBewerberT1 = null;
$fBewerberT2 = null;
$fBewerberT3 = null;
$fBewerberT4 = null;


include "./views/db-output.views.php";

?>

<div class="responsiveX">

    <script>
        var headline = "Bewerber";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>


    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_fbewerber_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <h2 class="page-header"><?php echo $fBewerberH1; ?></h2>


                <img id="imgBewerberHandy" src="./bilder/bewerber/imgfBewerberHandy.jpg"
                     alt="Bild konnte nicht geladen werden!">
                <img id="imgBewerberTablet" src="./bilder/bewerber/imgfBewerberTablet.jpg"
                     alt="Bild konnte nicht geladen werden!">
                <img id="imgBewerberDestop" src="./bilder/bewerber/imgfBewerberDestop.jpg"
                     alt="Bild konnte nicht geladen werden!">

                <br>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_fbewerber_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $fBewerberT1; ?></p>

            </div>
        </div>
    </section>

    <section class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container d-flex">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">


                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_fbewerber_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <div style="margin: 15px 0 0 0;
                                        line-height: 1.2" >
                                <p id="bewSlogan"><?php echo $fBewerberT2; ?></p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 2 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_headline_2'>Headline 2 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_fbewerber_headline_2">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <h2 class="page-header"><?php echo $fBewerberH2; ?></h2>


                <img id="imgBewerberHandy1" src="./bilder/bewerber/imgfBewerberHandy1.jpg"
                     alt="Bild konnte nicht geladen werden!">
                <img id="imgBewerberDestop1" src="./bilder/bewerber/imgfBewerberDestop1.jpg"
                     alt="Bild konnte nicht geladen werden!">

                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_fbewerber_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $fBewerberT3; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>

    <section class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">
                <div class="container">

                    <div class="col-md-12">

                        <!-- Headline 3 -->
                        <?php
                        if ($istBenutzerAngemeldet) {

                            echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_headline_3'>Headline 3 bearbeiten</button>"; ?>

                            <label>
                                <input type="text" name="inhalt_fbewerber_headline_3">
                            </label>
                            <?php
                            echo "</form>";

                        } ?>
                        <h2 class="page-header"><?php echo $fBewerberH3; ?></h2>

                        <!-- Text 4 -->
                        <?php
                        if ($istBenutzerAngemeldet) {
                            // text 4 ausgabe und ändern durch admin panel
                            // button
                            echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_fbewerber_text_4'>Text 4 bearbeiten</button>"; ?>

                            <label>
                                <input type="text" name="inhalt_fbewerber_text_4">
                            </label>
                            <?php
                            echo "</form>";

                        } ?>
                        <p><?php echo $fBewerberT4; ?></p>

                    </div>


                    <div class="d-flex justify-content-around">
                        <button onclick="onJobboerse()"
                                class="btn-warning center-block white hover-white">

                            Jobbörse
                        </button>


                        <button class="btn-warning center-block">

                            <a class="white hover-white" href="./layout/forms/initiativbewerbung/initiativbewerbung.php">Initiativbewerbung</a>
                        </button>
                    </div>

                    <br>

                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <p>

                    Wenn Sie mehr über uns erfahren möchten, schreiben Sie uns noch heute eine E-Mail an


                    <button onclick="onFlyer()"
                            style="border: none; outline: none;"
                            class="black hover-darkorange bg-white">
                            <b>info@personal-agentur-lupo.de</b>
                    </button>


                    oder rufen Sie uns einfach unter der mobilen Nummer


                    <button onclick="onFlyer()"
                            style="border: none; outline: none;"
                            class="black hover-darkorange bg-white">
                            <b>+4917672426019 </b>
                    </button>

                    <br>
                    <br>

                    Die Kontaktaufnahme ist erstmal unverbindlich sofern Sie keine direkten Vermittlungswünsche äußern.

                </p>
                <br>

            </div>
        </div>
    </section>

    <?php include "./layout/slogan/slogan.php" ?>
</div>