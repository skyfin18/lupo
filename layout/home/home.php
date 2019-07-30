<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

require "./inc/db.inc.php";
require "./views/db-output.views.php";
?>

<div class="responsiveX">

    <div style="background-color: #0b2e13" class="container-fluid">

    </div>

    <script>
        var headline = "Willkommen bei Lupo";
    </script>


    <!-- Carousell -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./bilder/home/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="bg-transperent-black-06 carousel-feld caroma">
                        <h2 class="darkorange f900rem18">
                            <b>
                                Herzlich willkommen bei Lupo
                            </b>
                        </h2>
                        <p class="fontS14px">
                            Unsere Alleinstellungsmerkmale. Welche ziele wir verfolgen und wie wir diese verfolgen,
                            vertrauen Sie auf ein starkes Team.

                        </p>

                        <a id="bottem1" class="darkorange hover-white" href="">
                            <button id="myButtonTrans1">
                                über Lupo
                            </button>
                        </a>

                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="./bilder/home/slide2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="bg-transperent-black-06 carousel-feld caroma">
                        <h2 class="darkorange f900rem18">
                            <b>
                                Werden sie Teil des Teams
                            </b>
                        </h2>
                        <p class="fontS14px">
                            Berufliche Weiterentwicklung und beruflicher Erfolg sind
                            zum greifen nah.

                            Familiäres Betriebsklima, Übertariflicher Lohn und pünktlichen Lohnzahlung erwartet
                            Sie.

                        </p>

                        <a id="bottem1" class="darkorange hover-white" href="">
                            <button id="myButtonTrans2">
                                Bewerber
                            </button>
                        </a>

                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="./bilder/home/slide3.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="border-radius bg-transperent-black-06 carousel-feld caroma">
                        <h2 class="darkorange f900rem18">
                            <b>
                                Personalengpässe&nbsp;/&nbsp;Personalbedarf
                            </b>
                        </h2>
                        <p class="fontS14px">
                            Noch freie Arbeitsstellen zu besetzen? Erhalten Sie Zugang zu Qualifizierten Fachpersonal
                            die Motiviert und zuverlässig Ihrer Tätigkeit nachgehen. Dank Lupo-Prämien.

                        </p>

                        <a id="bottem1" class="darkorange hover-white" href="">
                            <button id="myButtonTrans3">
                                Unternehmer
                            </button>
                        </a>

                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="./bilder/home/slide4.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="bg-transperent-black-06 carousel-feld caroma">
                        <h2 class="darkorange f900rem18">
                            <b>
                                Machen sie Karriere
                            </b>
                        </h2>
                        <p class="fontS14px">
                            Suche Sie nach einer attraktive und anspruchsvolle Tätigkeiten um zu zeigen was Sie
                            können.

                            Berufliche Sicherheit durch Flexibilität und Dynamik.

                        </p>

                        <a id="bottem1" class="darkorange hover-white" href="">
                            <button id="myButtonTrans4">
                                Jobbörse
                            </button>
                        </a>

                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

    <section class="container-fluid bgHellGrey">
        <h1 id="headline" class="text-center m-0 headline">
            <script>document.write(headline)</script>
        </h1>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- headline  1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_index_headline_1'>Headline bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_index_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $homeH1; ?></h2>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_index_text_1'>Text bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_index_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo "$homeT1"; ?></p>


            </div>
        </div>
    </section>

    <!-- cards -->
    <section class="cards bgHellGrey">
        <!-- cards -->
        <div class="container">

            <h3 class="text-center">Finden Sie Ihren Traumjob</h3>
            <p class="text-center text-muted font-italic">
                Besuchen Sie unsere
                <b>
                    <a class="hover-darkorange color777" href="">
                        Jobbörse
                    </a>
                </b>
                um mehr Stellenangebote zu sehen
            </p>

            <div class="row">

                <div class="col-12 col-xs-4 col-md-4 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title font-size-md-14"><b>Metallbauer Schwerpunkt Konstruktionstechnik
                                    (m/w/d)</b></h4>
                            <p class="card-text font-size-md-14">Some quick example text to build on the card title and
                                make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <a class="btn btn-warning white" href="<?php ?>">
                                    Stellenangebote
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-12 col-xs-4 col-md-4 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title font-size-md-14"><b>Metallbauer Schwerpunkt Konstruktionstechnik
                                    (m/w/d)</b></h4>
                            <p class="card-text font-size-md-14">Some quick example text to build on the card title and
                                make up the bulk
                                of the card's content.</p>

                            <div class="text-center">
                                <a class="btn btn-warning white" href="">
                                    Stellenangebote
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-xs-4 col-md-4 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/stellenangebote/elektro.jpg" alt="Card image cap">

                        <p class="pr-1 text-right text-muted">Job-ID - 54662</p>

                        <div class="card-body">
                            <h4 class="card-title font-size-md-14"><b>Metallbauer Schwerpunkt Konstruktionstechnik
                                    (m/w/d)</b></h4>
                            <p class="card-text font-size-md-14">Some quick example text to build on the card title and
                                make up the bulk
                                of the card's content.</p>
                            <div class="text-center">

                                <div class="text-center">
                                    <a class="btn btn-warning white" href="<?php ?>">
                                        Stellenangebote
                                    </a>
                                </div>

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
</div>