<section class="container-fluid bgHellGrey">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">


                        <!-- Slogan -->
                        <?php
                        if ($istBenutzerAngemeldet) {

                            echo "<form action='' method='post'><br><button type='submit' name='btn_slogan'>Slogan bearbeiten</button>"; ?>

                            <label>
                                <input type="text" name="inhalt_slogan">
                            </label>
                            <?php
                            echo "</form>";
                            if (isset($_POST['btn_slogan'])) {
                                $inhalt_slogan = $_POST['inhalt_slogan'];

                                // data update
                                include "./inc/db_connect.php";

                                $sql = "UPDATE `slogan` SET `slogan` = '$inhalt_slogan' WHERE `slogan` . `id` = 1";

                                if ($db->query($sql)) {
                                    // Meldung bei erfolgreicher Erstellung der Datensätze

                                } else {
                                    // Meldung bei Fehlschlag
                                    echo "Datensätze konnte nicht angelegt werden!";
                                }

                                // Verbindung zum Datenbankserver beenden
                                $db->close();
                            }
                        } ?>

                        <h2 class="slogan"><?php echo $slogan; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>