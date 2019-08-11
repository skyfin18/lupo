<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$agbsH1 = null;
$agbsH2 = null;
$agbsH3 = null;
$agbsH4 = null;
$agbsH5 = null;
$agbsH6 = null;
$agbsH7 = null;
$agbsH8 = null;
$agbsH9 = null;
$agbsH10 = null;
$agbsH11 = null;
$agbsH12 = null;
$agbsH13 = null;
$agbsH14 = null;
$agbsH15 = null;
$agbsH16 = null;
$agbsT1 = null;
$agbsT2 = null;
$agbsT3 = null;
$agbsT4 = null;
$agbsT5 = null;
$agbsT6 = null;
$agbsT7 = null;
$agbsT8 = null;
$agbsT9 = null;
$agbsT10 = null;
$agbsT11 = null;
$agbsT12 = null;
$agbsT13 = null;
$agbsT14 = null;
$agbsT15 = null;
$agbsT16 = null;

require "./views/db-output.views.php";
?>

<div class="responsiveX">
    <script>
        var headline = "Agbs";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>

    <!-- division 1 -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $agbsH1; ?></h2>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $agbsT1; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>

    <!-- division 2 -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 2 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_headline_2'>Headline 2 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_headline_2">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $agbsH1; ?></h2>

                <!-- Text 2 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_text_2'>Text 2 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_text_2">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $agbsT2; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>

    <!-- division 3 -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_headline_3'>Headline 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_headline_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $agbsH3; ?></h2>

                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $agbsT3; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>

    <!-- division 4 -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 4 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_headline_4'>Headline 4 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_headline_4">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $agbsH4; ?></h2>

                <!-- Text 4 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_text_4'>Text 4 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_text_4">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $agbsT4; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>

    <!-- division 5 -->
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_headline_5'>Headline 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_headline_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $agbsH4; ?></h2>

                <!-- Text 4 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_agbs_text_4'>Text 4 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_agbs_text_4">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $agbsT4; ?></p>

                <br>
                <br>

            </div>
        </div>
    </section>





</div>