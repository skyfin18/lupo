<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$fUnternehmerH1 = NULL;
$fUnternehmerH2 = NULL;
$fUnternehmerH3 = NULL;
$fUnternehmerH4 = NULL;
$fUnternehmerT1 = NULL;
$fUnternehmerT2 = NULL;
$fUnternehmerT3 = NULL;
$fUnternehmerT4 = NULL;

include "./views/db-output.views.php";

?>
<div class="responsiveX">

    <script>
        var headline = "Unternehmer";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>


    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_funternehmer_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $fUnternehmerH1; ?></h2>

                <img id="imgUnternehmerHandy" src="./bilder/unternehmer/imgfUnternehmerHandy.jpg"
                     alt="Bild konnte nicht geladen werden">
                <img id="imgUnternehmerTablet" src="./bilder/unternehmer/imgfUnternehmerTablet.jpg"
                     alt="Bild konnte nicht geladen werden">
                <img id="imgUnternehmerDestop" src="./bilder/unternehmer/imgfUnternehmerDestop.jpg"
                     alt="Bild konnte nicht geladen werden">


                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_funternehmer_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $fUnternehmerT1; ?></p>

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

                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_funternehmer_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $fUnternehmerH2; ?></h2>

                            <img id="imgUnternehmerHandy2" src="./bilder/unternehmer/imgfUnternehmerHandy2.jpg"
                                 alt="Bild wurde nicht geladen">
                            <img id="imgUnternehmerTablet2" src="./bilder/unternehmer/imgfUnternehmerTabet2.jpg"
                                 alt="Bild wurde nicht geladen">
                            <img id="imgUnternehmerDestop2" src="./bilder/unternehmer/imgfUnternehmerDestop2.jpg"
                                 alt="Bild wurde nicht geladen">


                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {
                                // text 2 ausgabe und ändern durch admin panel
                                // button
                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_funternehmer_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $fUnternehmerT2; ?></p>

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

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_headline_3'>Headline 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_funternehmer_headline_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <h2 class="page-header"><?php echo $fUnternehmerH3; ?></h2>

                <img id="imgUnternehmerHandy3" src="./bilder/unternehmer/imgfUnternehmerHandy3.jpg"
                     alt="Bild wurde nicht geladen">
                <img id="imgUnternehmerTablet3" src="./bilder/unternehmer/imgfUnternehmerTablet3.jpg"
                     alt="Bild wurde nicht geladen">
                <img id="imgUnternehmerDestop3" src="./bilder/unternehmer/imgfUnternehmerDestop3.jpg"
                     alt="Bild wurde nicht geladen">

                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_funternehmer_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $fUnternehmerT3; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>

    <section class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">
                <div class="container">

                    <!-- Headline 4 -->
                    <?php
                    if ($istBenutzerAngemeldet) {

                        echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_headline_4'>Headline 4 bearbeiten</button>"; ?>

                        <label>
                            <input type="text" name="inhalt_funternehmer_headline_4">
                        </label>
                        <?php
                        echo "</form>";

                    } ?>

                    <h2 class="page-header"><?php echo $fUnternehmerH4; ?></h2>

                    <!-- Text 4 -->
                    <?php
                    if ($istBenutzerAngemeldet) {

                        echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_funternehmer_text_4'>Text 4 bearbeiten</button>"; ?>

                        <label>
                            <input type="text" name="inhalt_funternehmer_text_4">
                        </label>
                        <?php
                        echo "</form>";

                    } ?>
                    <p><?php echo $fUnternehmerT4; ?></p>

                    <br>

                    <div class="d-flex justify-content-center">
                        <button class="btn-warning center-block">
                            <a href="./layout/forms/personalanfrage/personalanfrageformular.php"
                               class="white hover-white">
                                <b>Personalanfrage</b>
                            </a>
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
                    Wenn Sie gerne noch mehr über uns und unsere Leistungen erfahren möchten, schreiben Sie uns
                    bitte eine Mail an

                    <b>
                        <button onclick="onFlyer()"
                                style="border: none; outline: none;"
                                class="black hover-darkorange bg-white">
                            <b> info@personal-agentur-lupo.de</b>
                        </button>
                    </b>
                    oder rufen Sie uns unter der
                    <b>
                        <button onclick="onFlyer()"
                                style="border: none; outline: none;"
                                class="black hover-darkorange bg-white">
                            <b>+4917672426019</b>
                        </button>
                    </b>
                    an.
                </p>

                <br>

            </div>
        </div>
    </section>
    <?php include "./layout/slogan/slogan.php" ?>
</div>