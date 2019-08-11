<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}
// is initialized in db-output.views.php
$jobboerseH1 = NULL;
$jobboerseH2 = NULL;
$jobboerseH3 = NULL;
$jobboerseH4 = NULL;
$jobboerseT1 = NULL;
$jobboerseT2 = NULL;
$jobboerseT3 = NULL;
$jobboerseT4 = NULL;
$jobboerseT5 = NULL;

include "./views/db-output.views.php";

?>

<script>
    var headline = "Jobbörse";
</script>

<?php include "./layout/header/headerHeadline.php"; ?>


<div class="responsiveX">
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_jobboerse_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $jobboerseH1; ?></h2>

                <img id="imgJobboerseHandy" src="./bilder/jobboerse/imgJobboerseHandy2.jpg"
                     alt="Bild konnte nicht geladen werden!">
                <img id="imgJobboerseTablet" src="./bilder/jobboerse/imgJobboerseTablet2.jpg"
                     alt="Bild konnte nicht geladen werden!">
                <img id="imgJobboerseDestop" src="./bilder/jobboerse/imgJobboerseDestop2.jpg"
                     alt="Bild konnte nicht geladen werden!">

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_jobboerse_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $jobboerseT1; ?></p>

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
                            <br>

                            <!-- Headline 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_jobboerse_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <h2 class="page-header"><?php echo $jobboerseH2; ?></h2>

                            <img id="imgJobboerseHandy2" src="./bilder/jobboerse/imgJobboerseHandy.jpg"
                                 alt="Bild konnte nicht geladen werden!">
                            <img id="imgJobboerseTablet2" src="./bilder/jobboerse/imgJobboerseTablet.jpg"
                                 alt="Bild konnte nicht geladen werden!">
                            <img id="imgJobboerseDestop2" src="./bilder/jobboerse/imgJobboerseDestop.jpg"
                                 alt="Bild konnte nicht geladen werden!">

                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_jobboerse_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $jobboerseT2; ?></p>

                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cards">
        <!-- cards -->
        <div class="container">

            <h3 class="text-center">Jobbörse</h3>
            <p class="text-center text-muted font-italic">Unsere aktuellen Stellenangebot</p>

            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title"><b>Metallbauer Schwerpunkt Konstruktionstechnik (m/w/d)</b></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <button class="btn btn-warning white" onclick="onStellenangebote()">
                                    Stellenangebot
                                </button>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title"><b>Metallbauer Schwerpunkt Konstruktionstechnik (m/w/d)</b></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <button class="btn btn-warning white" onclick="onStellenangebote()">
                                    Stellenangebot
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title"><b>Metallbauer Schwerpunkt Konstruktionstechnik (m/w/d)</b></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <div class="text-center">

                                <div class="text-center">
                                    <button class="btn btn-warning white" onclick="onStellenangebote()">
                                        Stellenangebot
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title"><b>Metallbauer Schwerpunkt Konstruktionstechnik (m/w/d)</b></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <button class="btn btn-warning white" onclick="onStellenangebote()">
                                    Stellenangebot
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title"><b>Metallbauer Schwerpunkt Konstruktionstechnik (m/w/d)</b></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <button class="btn btn-warning white" onclick="onStellenangebote()">
                                    Stellenangebot
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title"><b>Metallbauer Schwerpunkt Konstruktionstechnik (m/w/d)</b></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <button class="btn btn-warning white" onclick="onStellenangebote()">
                                    Stellenangebot
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid bgHellGrey">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="container bg_florawhite bo50px">
                        <div class="row">
                            <div id="jobs_div_etwas_spannendes_dabei"
                                 class="col-xs-12 col-sm-12 col-md-6 border_orange">

                                <!-- Headline 3 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_headline_3'>Headline 3 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_jobboerse_headline_3">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>
                                <h2 class="page-header"><?php echo $jobboerseH3; ?></h2>

                                <!-- Text 3 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_text_3'>Text 3 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_jobboerse_text_3">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>

                                <p><?php echo $jobboerseT3; ?></p>

                                <p>

                                    Wenn Sie mehr über uns und unsere Leistungen erfahren möchten, schreiben Sie uns
                                    eine
                                    Mail an

                                    <a class="black hover-darkorange" href="<?php ?>">
                                        <b><?php echo "info@personal-agentur-lupo.de"; ?></b>
                                    </a>

                                    oder rufen Sie uns unter der

                                    <a class="black hover-darkorange" href="<?php ; ?>">
                                        <b><?php echo "+4917672426019"; ?></b>
                                    </a>

                                    an.
                                </p>

                                <br>

                            </div>

                            <div id="jobs_bewerbungsportal_border" class="col-xs-12 col-sm-12 col-md-6 border_orange">

                                <!-- Headline 4 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_headline_3'>Headline 4 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_jobboerse_headline_4">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>

                                <h2 class="page-header"><?php echo $jobboerseH4; ?></h2>

                                <!-- Text 4 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_text_4'>Text 4 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_jobboerse_text_4">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>
                                <p><?php echo $jobboerseT4; ?></p>

                                <div id="iniBtn" class="d-flex justify-content-center">
                                    <button class="btn-warning center-block">
                                        <a class="white hover-white" href="">
                                            <b>Initiativbewerbung</b>
                                        </a>
                                    </button>
                                </div>


                                <!-- Text 5 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_jobboerse_text_5'>Text 5 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_jobboerse_text_5">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>

                                <p><?php echo $jobboerseT5; ?></p>


                                <?php
                                if ($istBenutzerAngemeldet) {
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <br>

    <?php include "./layout/bewUnt/bewUnt.php";
    echo "<br>";
    include "layout/slogan/slogan.php";
    ?>


</div>