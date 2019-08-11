<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$kontaktH1 = null;
$kontaktH2 = null;
$kontaktT1 = null;
$kontaktT2 = null;

require "./inc/db.inc.php";
require "./views/db-output.views.php";

?>

<script>
    var headline = "Kontakt";
</script>
<?php include "./layout/header/headerHeadline.php"; ?>

<section class="responsiveX">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_kontakt_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_kontakt_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $kontaktH1; ?></h2>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_kontakt_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_kontakt_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $kontaktT1; ?></p>
                <br>

                <div id="map" style="width: 70%; height: 400px"></div>

            </div>
            <div class="col-md-1">

            </div>
            <div class="col-lg-10">
                <script type="text/javascript">
                    var map = L.map('map').setView([48.12, 11.54], 10);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);
                </script>
            </div>
            <div class="col-md-1">

            </div>


        </div>
    </div>
</section>

<br>

<section class="container-fluid bgHellGrey">
    <div class="row">
        <div class="col-md-12">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Headline 2 -->
                        <?php
                        if ($istBenutzerAngemeldet) {

                            echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_kontakt_headline_2'>Headline 2 bearbeiten</button>"; ?>

                            <label>
                                <input type="text" name="inhalt_kontakt_headline_2">
                            </label>
                            <?php
                            echo "</form>";

                        } ?>

                        <h2 class="page-header"><?php echo $kontaktH2; ?></h2>

                        <!-- Text 2 -->
                        <?php
                        if ($istBenutzerAngemeldet) {

                            echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_kontakt_text_2'>Text 2 bearbeiten</button>"; ?>

                            <label>
                                <input type="text" name="inhalt_kontakt_text_2">
                            </label>
                            <?php
                            echo "</form>";

                        } ?>

                        <p><?php echo $kontaktT2; ?></p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-12">

            <p>
                Wenn Sie mehr über uns erfahren möchten, schreiben Sie uns eine Mail an

                <a class="black hover-darkorange" href="./layout/flyer/flyer.php">
                    <br>
                    <b>info@personal-agentur-lupo.de</b>
                </a>
                oder rufen Sie uns
                unter der
                <a class="black hover-darkorange" href="./layout/flyer/flyer.php"><b>+4917672426019</b></a> an.
            </p>

        </div>
    </div>
</section>

<?php include "./layout/slogan/slogan.php" ?>
