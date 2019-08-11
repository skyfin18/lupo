<?php
session_start();

$istBenutzerAngemeldet = isset($_SESSION['benutzername']);

if ($istBenutzerAngemeldet) {
    $benututzername = $_SESSION['benutzername'];
} else {
    $benututzername = '';
}

$faqsH1 = null;
$faqsH2 = null;
$faqsH3 = null;
$faqsH4 = null;
$faqsH5 = null;
$faqsT1 = null;
$faqsT2 = null;
$faqsT3 = null;
$faqsT4 = null;
$faqsT5 = null;

require "./views/db-output.views.php";

?>

<div class="responsiveX">

<script>
    var headline = "Frequently Asked Questions";
</script>

<?php include "./layout/header/headerHeadline.php"; ?>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- fehlender Datenbank eintrag -->
                <br>
                <br>
                <p>
                    Hier noch eine Zusammenfassung der häufig gestellten Fragen. Wir sind uns bewusst das wir nicht alle
                    Fragen auflisten können aber möchten ihnen dennoch die Möglichkeit bieten einen Einblick zu den
                    häufigsten gestellten Fragen zu bieten. Sollten die hier aufgelisteten Fragen ihr Anliegen nicht
                    beantworten, können sie während unseren Öffnungszeiten jederzeit uns um Auskunft erfragen.
                </p>

            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_headline_1'>Headline 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_faqs_headline_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $faqsH1; ?></h2>

                <!-- Text 1 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_text_1'>Text 1 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_faqs_text_1">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $faqsT1; ?></p>

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

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_headline_2'>Headline 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_faqs_headline_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $faqsH2; ?></h2>

                            <!-- Text 2 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_text_2'>Text 2 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_faqs_text_2">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $faqsT2; ?></p>

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

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_headline_3'>Headline 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_faqs_headline_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $faqsH3; ?></h2>

                <!-- Text 3 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_text_3'>Text 3 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_faqs_text_3">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $faqsT3; ?></p>

            </div>
        </div>
    </section>

    <section class="container-fluid bgHellGrey">
        <div class="row">
            <div class="col-md-12">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Headline 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_headline_4'>Headline 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_faqs_headline_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <h2 class="page-header"><?php echo $faqsH4; ?></h2>

                            <!-- Text 4 -->
                            <?php
                            if ($istBenutzerAngemeldet) {

                                echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_text_4'>Text 4 bearbeiten</button>"; ?>

                                <label>
                                    <input type="text" name="inhalt_faqs_text_4">
                                </label>
                                <?php
                                echo "</form>";

                            } ?>

                            <p><?php echo $faqsT4; ?></p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Headline 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_headline_5'>Headline 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_faqs_headline_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>

                <h2 class="page-header"><?php echo $faqsH5; ?></h2>

                <!-- Text 5 -->
                <?php
                if ($istBenutzerAngemeldet) {

                    echo "<form action='./views/db-input.views.php' method='post'><br><button type='submit' name='btn_faqs_text_5'>Text 5 bearbeiten</button>"; ?>

                    <label>
                        <input type="text" name="inhalt_faqs_text_5">
                    </label>
                    <?php
                    echo "</form>";

                } ?>
                <p><?php echo $faqsT5; ?></p>

            </div>
        </div>
    </section>


    <br>

    <section class="container">

        <p>
            Gerne vereinbaren wir einen Termin zum persönlichen Gespräch. schreiben Sie uns doch
            einfach eine Mail an:
            <a class="black hover-darkorange" href="../universal/flyer.php">
                <br>
                <b>info@personal-agentur-lupo.de</b>
            </a>
            oder rufen Sie uns mobil unter der
            <a class="black hover-darkorange"
               href="../universal/flyer.php"><b>+4917672426019</b></a> an.
        </p>
    </section>


    <?php include_once "./../universal/slogan.php" ?>
</div>


