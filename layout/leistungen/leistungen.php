<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$leistungenH1 = NULL;
$leistungenH2 = NULL;
$leistungenH3 = NULL;
$leistungenH4 = NULL;
$leistungenH5 = NULL;
$leistungenH6 = NULL;
$leistungenT1 = NULL;
$leistungenT2 = NULL;
$leistungenT3 = NULL;
$leistungenT4 = NULL;


include "./../../inc/db.inc.php";
include "./views/db-output.views.php";

?>

    <script>
        var headline = "Leistungen";
    </script>

<?php include "./layout/header/headerHeadline.php"; ?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_leistungen_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $leistungenH1; ?></h2>



                <img id="imgLeistungenHandy" src="bilder/leistungen/imgLeistungenHandy.jpg" alt="Bild wurde nicht geladen">
                <img id="imgLeistungenTablet" src="bilder/leistungen/imgLeistungenTablet.jpg" alt="Bild wurde nicht geladen">
                <img id="imgLeistungenDestop" src="bilder/leistungen/imgLeistungenDestop.jpg" alt="Bild wurde nicht geladen">

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_leistungen_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p ><?php echo $leistungenT1; ?></p>

            </div>
        </div>
    </div>
</section>

<section class="bgHellGrey">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {
                                echo "<form action='views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $leistungenH2; ?></h2>

                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {
                                echo "<form action='views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $leistungenT2; ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <br>

                <div class="container borderOrange bg_florawhite bo50px">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 3 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_headline_3'>Headline 3 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_headline_3">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo "<b>" . $leistungenH3 . "</b>"; ?></h2>

                        </div>

                        <div class="col-md-6">

                            <!-- Headline 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_headline_4'>Headline 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_headline_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <h2 class="page-header"><?php echo $leistungenH4; ?></h2>

                            <!-- Text 3 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_text_3'>Text 3 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_text_3">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <p><?php echo $leistungenT3; ?></p>


                        </div>
                        <div class="col-md-6">

                            <!-- Headline 5 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_headline_5'>Headline 5 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_headline_5">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $leistungenH5; ?></h2>

                            <!-- Text 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./../views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_text_4'>Text 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_text_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $leistungenT4; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<br>

<section class="bgHellGrey">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">

                            <!-- Headline 6 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_leistungen_headline_6'>Headline 6 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_leistungen_headline_6">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $leistungenH6; ?></h2>

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
                            </p>


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
include "layout/bewUnt/bewUnt.php";

echo "<br>";
include "layout/slogan/slogan.php";
?>



