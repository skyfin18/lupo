<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$datenschutzH1 = null;
$datenschutzH2 = null;
$datenschutzH3 = null;
$datenschutzH4 = null;
$datenschutzH5 = null;
$datenschutzH6 = null;
$datenschutzH7 = null;
$datenschutzH8 = null;
$datenschutzH9 = null;
$datenschutzH10 = null;
$datenschutzH11 = null;
$datenschutzT1 = null;
$datenschutzT2 = null;
$datenschutzT3 = null;
$datenschutzT4 = null;
$datenschutzT5 = null;
$datenschutzT6 = null;
$datenschutzT7 = null;
$datenschutzT8 = null;
$datenschutzT9 = null;
$datenschutzT10 = null;
$datenschutzT11 = null;

require "./views/db-output.views.php";

?>



<div class="responsiveX">

    <script>
        var headline = "Datenschutz";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>

    <!-- division 1 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $datenschutzH1; ?></h2>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $datenschutzT1; ?></p>

                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- division 2 -->
    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $datenschutzH2; ?></h2>

                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $datenschutzT2; ?></p>

                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- division 3 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_3'>Headline 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_headline_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>


                <h2 class="page-header"><?php echo $datenschutzH3; ?></h2>

                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $datenschutzT3; ?></p>


                <br>
                <br>
            </div>
        </div>
    </div>
    <!-- division 4 -->
    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_4'>Headline 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_headline_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $datenschutzH4; ?></h2>

                            <!-- Text 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_4'>Text 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_text_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>


                            <p><?php echo $datenschutzT4; ?></p>


                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- division 5 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_5'>Headline 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_headline_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $datenschutzH5; ?></h2>

                <!-- Text 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_5'>Text 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_text_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $datenschutzT5; ?></p>

                <br>
                <br>

            </div>
        </div>
    </div>

    <!-- division 6 -->
    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 6 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_6'>Headline 6 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_headline_6">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <h2 class="page-header"><?php echo $datenschutzH6; ?></h2>

                            <!-- Text 6 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_6'>Text 6 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_text_6">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $datenschutzT6; ?></p>

                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- division 7 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 7 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_7'>Headline 7 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_headline_7">
                    </label>
                    <?php
                    echo "</form>";

                } ?>


                <h2 class="page-header"><?php echo $datenschutzH7; ?></h2>

                <!-- Text 7 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_7'>Text 7 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_text_7">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo $datenschutzT7; ?></p>

                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- division 8 -->
    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 8 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_8'>Headline 8 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_headline_8">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $datenschutzH8; ?></h2>

                            <!-- Text 8 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_8'>Text 8 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_text_8">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $datenschutzT8; ?></p>

                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- division 9 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 9 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_9'>Headline 9 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_headline_9">
                    </label>
                    <?php
                    echo "</form>";

                } ?>


                <h2 class="page-header"><?php echo $datenschutzH9; ?></h2>

                <!-- Text 9 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_9'>Text 9 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_text_9">
                    </label>
                    <?php
                    echo "</form>";

                } ?>


                <p><?php echo $datenschutzT9; ?></p>


                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- division 10 -->
    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 10 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_headline_10'>Headline 10 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_headline_10">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <h2 class="page-header"><?php echo $datenschutzH10; ?></h2>

                            <!-- Text 10 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_10'>Text 10 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_datenschutz_text_10">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>
                            <p><?php echo $datenschutzT10; ?></p>


                            <br>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- division 11 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 11 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='' method='post'><br><button type='submit' name='btn_datenschutz_headline_11'>Headline 11 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_headline_11">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $datenschutzH11; ?></h2>

                <!-- Text 11 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_datenschutz_text_11'>Text 11 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_datenschutz_text_11">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $datenschutzT11; ?></p>

                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- slogan -->
    <?php
    include_once "./../universal/slogan.php"
    ?>

</div>






