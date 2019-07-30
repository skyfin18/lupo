<?php session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$impressumH1 = null;
$impressumH2 = null;
$impressumH3 = null;
$impressumH4 = null;
$impressumH5 = null;
$impressumH6 = null;
$impressumT1 = null;
$impressumT2 = null;
$impressumT3 = null;
$impressumT4 = null;
$impressumT5 = null;
$impressumT6 = null;

include "./../../inc/db.inc.php";
include "./views/db-output.views.php";

?>


<div class="overflowHidden">

    <script>
        var headline = "Impressum";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_impressum_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo "$impressumH1"?></h2>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_impressum_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo "$impressumT1"?></p>

                <br>

            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid bgHellGrey">
            <div class="row">
                <div class="col-md-12">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <br>

                                <!-- Headline 2 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_impressum_headline_2">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>

                                <h2 class="page-header"><?php echo "$impressumH2"?></h2>

                                <!-- Text 2 -->
                                <?php
                                if ($istBenutzerAngemeldet) {

                                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_text_2'>Text 2 bearbeiten</button>"; ?>

                                    <label>
                                        <input type="text" name="inhalt_impressum_text_2">
                                    </label>
                                    <?php
                                    echo "</form>";

                                } ?>

                                <p><?php echo "$impressumT2"?></p>

                                <br>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_headline_3'>Headline 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_impressum_headline_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo "$impressumH3"?></h2>


                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_impressum_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo "$impressumT3"?></p>

                <br>

            </div>
        </div>
    </div>


    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_headline_4'>Headline 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_impressum_headline_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo "$impressumH4"?></h2>


                            <!-- Text 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_text_4'>Text 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_impressum_text_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo "$impressumT4"?></p>

                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_headline_5'>Headline 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_impressum_headline_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo "$impressumH5"?></h2>


                <!-- Text 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_text_5'>Text 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_impressum_text_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <p><?php echo "$impressumT5"?></p>



                <br>

            </div>
        </div>
    </div>

    <div class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Headline 6 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_headline_6'>Headline 6 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_impressum_headline_6">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo "$impressumH6"?></h2>

                            <!-- Text 6 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_impressum_text_6'>Text 6 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_impressum_text_6">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo "$impressumT6"?></p>

                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <br>

                <p>
                    Wenn Sie mehr erfahren möchten, schreiben Sie uns
                    bitte eine Mail an

                    <b>
                        <?php foreach ($navFlyerEmail AS $key => $value): ?>
                            <a class="black hover-darkorange" href="<?php echo e($key); ?>">
                                <?php echo e($value); ?>
                            </a>
                        <?php endforeach; ?>
                    </b>
                    oder rufen Sie uns unter der
                    <b>
                        <?php foreach ($navFlyerPhone AS $key => $value): ?>
                            <a class="black hover-darkorange" href="<?php echo e($key); ?>">
                                <?php echo e($value); ?>
                            </a>
                        <?php endforeach; ?>
                    </b>
                    an.
                </p>

                <br>

            </div>
        </div>
    </div>

    <!-- slogan -->
    <?php
    include_once "./../universal/slogan.php";
    ?>

</div>
