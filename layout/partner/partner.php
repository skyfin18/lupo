<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$partnerH1 = Null;
$partnerH2 = Null;
$partnerT1 = Null;
$partnerT2 = Null;

require "./inc/db.inc.php";
require "./views/db-output.views.php";
?>

<script>
    var headline = "Partner";
</script>

<?php include "./layout/header/headerHeadline.php"; ?>


<div class="responsiveX">
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_partner_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_partner_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $partnerH1; ?></h2>

                <img id="imgPartnerHandy" src="./bilder/partner/imgPartnerHandy.jpg" alt="Bild wurde nicht geladen">
                <img id="imgPartnerTablet" src="./bilder/partner/imgPartnerTablet.jpg" alt="Bild wurde nicht geladen">
                <img id="imgPartnerDestop" src="./bilder/partner/imgPartnerDestop.jpg" alt="Bild wurde nicht geladen">

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_partner_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_partner_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $partnerT1; ?></p>

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

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_partner_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_partner_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $partnerH2; ?></h2>


                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_partner_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_partner_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $partnerT2; ?></p>


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

            <h3 class="text-center">Unsere Partner</h3>
            <p class="text-center text-muted font-italic">Erfahren Sie mehr</p>

            <div class="row">

                <div class="col-12 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/partner/imgPartnerAgenturFuerArbeit.jpg"
                             alt="Card image cap">

                        <div class="card-body h174px">
                            <h4 id="bfa-mb" class="card-title text-center pb-5 fssm24px fsmd16px">Bundesagentur für&nbsp;Arbeit</h4>

                            <div class="text-center">
                                <a class="btn btn-warning mt-34px" href="<?php ?>">
Agentur für Arbeit
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/partner/imgPartnerBap.jpg" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title text-center pb-5 fssm24px fsmd16px">Bundesarbeitgeberverband der
                                Personaldienstleister e.V.</h4>

                            <div class="text-center">
                                <a class="btn btn-warning" href="<?php ?>">
Bundesarbeitgerberverband                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="./bilder/partner/imgPartnerIGZ.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center pb-5 fssm24px fsmd16px">Interessenverband Deutscher
                                Zeitarbeitsnehmer e.V.</h4>
                            <div class="text-center">

                                <div class="text-center">
                                    <a class="btn btn-warning" href="<?php ?>">
                                        igz
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
<?php include_once "./layout/slogan/slogan.php" ?>
