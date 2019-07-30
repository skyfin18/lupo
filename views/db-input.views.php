<?php
session_start();

// header

// index
// headline 1
if (isset($_POST['btn_index_headline_1'])) {
    $inhalt_index_headline_1 = $_POST['inhalt_index_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `home` SET `headline` = '$inhalt_index_headline_1' WHERE `home` . `id` = 1";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();

    header('Location: ./../header/index.php');
    exit;
}

// text 1
if (isset($_POST['btn_index_text_1'])) {
    $inhalt_index_text_1 = $_POST['inhalt_index_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `home` SET `text` = '$inhalt_index_text_1' WHERE `home` . `id` = 1";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();

    header('Location: ./../header/index.php');
    exit;
}

// leistungen
// headline 1
if (isset($_POST['btn_leistungen_headline_1'])) {
    $inhalt_leistungen_headline_1 = $_POST['inhalt_leistungen_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `headline` = '$inhalt_leistungen_headline_1' WHERE `leistungen` . `id` = 1";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// text 1
if (isset($_POST['btn_leistungen_text_1'])) {
    $inhalt_leistungen_text_1 = $_POST['inhalt_leistungen_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `text` = '$inhalt_leistungen_text_1' WHERE `leistungen` . `id` = 1";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// headline 2
if (isset($_POST['btn_leistungen_headline_2'])) {
    $inhalt_leistungen_headline_2 = $_POST['inhalt_leistungen_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `headline` = '$inhalt_leistungen_headline_2' WHERE `leistungen` . `id` = 2";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// text 2
if (isset($_POST['btn_leistungen_text_2'])) {
    $inhalt_leistungen_text_2 = $_POST['inhalt_leistungen_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `text` = '$inhalt_leistungen_text_2' WHERE `leistungen` . `id` = 2";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// headline 3
if (isset($_POST['btn_leistungen_headline_3'])) {
    $inhalt_leistungen_headline_3 = $_POST['inhalt_leistungen_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `headline` = '$inhalt_leistungen_headline_3' WHERE `leistungen` . `id` = 3";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// headline 4
if (isset($_POST['btn_leistungen_headline_4'])) {
    $inhalt_leistungen_headline_4 = $_POST['inhalt_leistungen_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `headline` = '$inhalt_leistungen_headline_4' WHERE `leistungen` . `id` = 4";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// text 3
if (isset($_POST['btn_leistungen_text_3'])) {
    $inhalt_leistungen_text_3 = $_POST['inhalt_leistungen_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `text` = '$inhalt_leistungen_text_3' WHERE `leistungen` . `id` = 3";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// headline 5
if (isset($_POST['btn_leistungen_headline_5'])) {
    $inhalt_leistungen_headline_5 = $_POST['inhalt_leistungen_headline_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `headline` = '$inhalt_leistungen_headline_5' WHERE `leistungen` . `id` = 5";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// text 4
if (isset($_POST['btn_leistungen_text_4'])) {
    $inhalt_leistungen_text_4 = $_POST['inhalt_leistungen_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `text` = '$inhalt_leistungen_text_4' WHERE `leistungen` . `id` = 4";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// headline 6
if (isset($_POST['btn_leistungen_headline_6'])) {
    $inhalt_leistungen_headline_6 = $_POST['inhalt_leistungen_headline_6'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `leistungen` SET `headline` = '$inhalt_leistungen_headline_6' WHERE `leistungen` . `id` = 6";

    if ($db->query($sql)) {

    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();

    header('Location: ./../header/leistungen.php');
    exit;
}

// für Bewerber
// headline 1
if (isset($_POST['btn_fbewerber_headline_1'])) {
    $inhalt_fbewerber_headline_1 = $_POST['inhalt_fbewerber_headline_1'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";
    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `headline` = '$inhalt_fbewerber_headline_1' WHERE `fBewerber` . `id` = 1";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 1
if (isset($_POST['btn_fbewerber_text_1'])) {
    $inhalt_fbewerber_text_1 = $_POST['inhalt_fbewerber_text_1'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    echo $inhalt_fbewerber_text_1;
    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `text` = '$inhalt_fbewerber_text_1' WHERE `fBewerber` . `id` = 1";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 2
if (isset($_POST['btn_fbewerber_text_2'])) {
    $inhalt_fbewerber_text_2 = $_POST['inhalt_fbewerber_text_2'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    echo $inhalt_fbewerber_text_2;
    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `text` = '$inhalt_fbewerber_text_2' WHERE `fBewerber` . `id` = 2";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 2
if (isset($_POST['btn_fbewerber_headline_2'])) {
    $inhalt_fbewerber_headline_2 = $_POST['inhalt_fbewerber_headline_2'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    echo $inhalt_fbewerber_headline_2;
    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `headline` = '$inhalt_fbewerber_headline_2' WHERE `fBewerber` . `id` = 2";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 3
if (isset($_POST['btn_fbewerber_text_3'])) {
    $inhalt_fbewerber_text_3 = $_POST['inhalt_fbewerber_text_3'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `text` = '$inhalt_fbewerber_text_3' WHERE `fBewerber` . `id` = 3";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 3
if (isset($_POST['btn_fbewerber_headline_3'])) {
    $inhalt_fbewerber_headline_3 = $_POST['inhalt_fbewerber_headline_3'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `headline` = '$inhalt_fbewerber_headline_3' WHERE `fBewerber` . `id` = 3";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 4
if (isset($_POST['btn_fbewerber_text_4'])) {
    $inhalt_fbewerber_text_4 = $_POST['inhalt_fbewerber_text_4'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    // SQL-Befehl

    $sql = "UPDATE `fBewerber` SET `text` = '$inhalt_fbewerber_text_4' WHERE `fBewerber` . `id` = 4";

    if ($db->query($sql)) {
        // Meldung bei erfolgreicher Erstellung der Datensätze

        header('Location: ./../header/fBewerber.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// für Unternehmer
// headline 1
if (isset($_POST['btn_funternehmer_headline_1'])) {
    $inhalt_funternehmer_headline_1 = $_POST['inhalt_funternehmer_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `headline` = '$inhalt_funternehmer_headline_1' WHERE `fUnternehmer` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 1
if (isset($_POST['btn_funternehmer_text_1'])) {
    $inhalt_funternehmer_text_1 = $_POST['inhalt_funternehmer_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `text` = '$inhalt_funternehmer_text_1' WHERE `fUnternehmer` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 2
if (isset($_POST['btn_funternehmer_headline_2'])) {
    $inhalt_funternehmer_headline_2 = $_POST['inhalt_funternehmer_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `headline` = '$inhalt_funternehmer_headline_2' WHERE `fUnternehmer` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 2
if (isset($_POST['btn_funternehmer_text_2'])) {
    $inhalt_funternehmer_text_2 = $_POST['inhalt_funternehmer_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `text` = '$inhalt_funternehmer_text_2' WHERE `fUnternehmer` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 3
if (isset($_POST['btn_funternehmer_headline_3'])) {
    $inhalt_funternehmer_headline_3 = $_POST['inhalt_funternehmer_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `headline` = '$inhalt_funternehmer_headline_3' WHERE `fUnternehmer` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 3
if (isset($_POST['btn_funternehmer_text_3'])) {
    $inhalt_funternehmer_text_3 = $_POST['inhalt_funternehmer_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `text` = '$inhalt_funternehmer_text_3' WHERE `fUnternehmer` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 4
if (isset($_POST['btn_funternehmer_headline_4'])) {
    $inhalt_funternehmer_headline_4 = $_POST['inhalt_funternehmer_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `headline` = '$inhalt_funternehmer_headline_4' WHERE `fUnternehmer` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 4
if (isset($_POST['btn_funternehmer_text_4'])) {
    $inhalt_funternehmer_text_4 = $_POST['inhalt_funternehmer_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `fUnternehmer` SET `text` = '$inhalt_funternehmer_text_4' WHERE `fUnternehmer` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../header/fUnternehmer.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// jobbörse
// headline 1
if (isset($_POST['btn_jobboerse_headline_1'])) {
    $inhalt_jobboerse_headline_1 = $_POST['inhalt_jobboerse_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `headline` = '$inhalt_jobboerse_headline_1' WHERE `jobboerse` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 1
if (isset($_POST['btn_jobboerse_text_1'])) {
    $inhalt_jobboerse_text_1 = $_POST['inhalt_jobboerse_text_1'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `text` = '$inhalt_jobboerse_text_1' WHERE `jobboerse` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 2
if (isset($_POST['btn_jobboerse_headline_2'])) {
    $inhalt_jobboerse_headline_2 = $_POST['inhalt_jobboerse_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `headline` = '$inhalt_jobboerse_headline_2' WHERE `jobboerse` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 2
if (isset($_POST['btn_jobboerse_text_2'])) {
    $inhalt_jobboerse_text_2 = $_POST['inhalt_jobboerse_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `text` = '$inhalt_jobboerse_text_2' WHERE `jobboerse` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 3
if (isset($_POST['btn_jobboerse_headline_3'])) {
    $inhalt_jobboerse_headline_3 = $_POST['inhalt_jobboerse_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `headline` = '$inhalt_jobboerse_headline_3' WHERE `jobboerse` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 3
if (isset($_POST['btn_jobboerse_text_3'])) {
    $inhalt_jobboerse_text_3 = $_POST['inhalt_jobboerse_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `text` = '$inhalt_jobboerse_text_3' WHERE `jobboerse` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 4
if (isset($_POST['btn_jobboerse_headline_4'])) {
    $inhalt_jobboerse_headline_4 = $_POST['inhalt_jobboerse_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `headline` = '$inhalt_jobboerse_headline_4' WHERE `jobboerse` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 4
if (isset($_POST['btn_jobboerse_text_4'])) {
    $inhalt_jobboerse_text_4 = $_POST['inhalt_jobboerse_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `text` = '$inhalt_jobboerse_text_4' WHERE `jobboerse` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 5
if (isset($_POST['btn_jobboerse_text_5'])) {
    $inhalt_jobboerse_text_5 = $_POST['inhalt_jobboerse_text_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `jobboerse` SET `text` = '$inhalt_jobboerse_text_5' WHERE `jobboerse` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../header/jobboerse.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// partner
// headline 1
if (isset($_POST['btn_partner_headline_1'])) {
    $inhalt_partner_headline_1 = $_POST['inhalt_partner_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `partner` SET `headline` = '$inhalt_partner_headline_1' WHERE `partner` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/partner.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 1
if (isset($_POST['btn_partner_text_1'])) {
    $inhalt_partner_text_1 = $_POST['inhalt_partner_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `partner` SET `text` = '$inhalt_partner_text_1' WHERE `partner` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/partner.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 2
if (isset($_POST['btn_partner_headline_2'])) {
    $inhalt_partner_headline_2 = $_POST['inhalt_partner_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `partner` SET `headline` = '$inhalt_partner_headline_2' WHERE `partner` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/partner.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 2
if (isset($_POST['btn_partner_text_2'])) {
    $inhalt_partner_text_2 = $_POST['inhalt_partner_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `partner` SET `text` = '$inhalt_partner_text_2' WHERE `partner` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/partner.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// ueber Lupo
// headline 1
if (isset($_POST['btn_ueberlupo_headline_1'])) {
    $inhalt_ueberlupo_headline_1 = $_POST['inhalt_ueberlupo_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `headline` = '$inhalt_ueberlupo_headline_1' WHERE `ueberLupo` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 1
if (isset($_POST['btn_ueberlupo_text_1'])) {
    $inhalt_ueberlupo_text_1 = $_POST['inhalt_ueberlupo_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `text` = '$inhalt_ueberlupo_text_1' WHERE `ueberLupo` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 2
if (isset($_POST['btn_ueberlupo_headline_2'])) {
    $inhalt_ueberlupo_headline_2 = $_POST['inhalt_ueberlupo_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `headline` = '$inhalt_ueberlupo_headline_2' WHERE `ueberLupo` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 2
if (isset($_POST['btn_ueberlupo_text_2'])) {
    $inhalt_ueberlupo_text_2 = $_POST['inhalt_ueberlupo_text_2'];

    // daten in datenbank ändern
    include "../inc/db_connect.php";

    // SQL-Befehl
    $sql_befehl = "INSERT INTO `ueberLupotext2` (`id`, `text`) VALUES (NULL, '$inhalt_ueberlupo_text_2');";

    if ($db->query($sql_befehl)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 3
if (isset($_POST['btn_ueberlupo_headline_3'])) {
    $inhalt_ueberlupo_headline_3 = $_POST['inhalt_ueberlupo_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `headline` = '$inhalt_ueberlupo_headline_3' WHERE `ueberLupo` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 3
if (isset($_POST['btn_ueberlupo_text_3'])) {
    $inhalt_ueberlupo_text_3 = $_POST['inhalt_ueberlupo_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `text` = '$inhalt_ueberlupo_text_3' WHERE `ueberLupo` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 4
if (isset($_POST['btn_ueberlupo_headline_4'])) {
    $inhalt_ueberlupo_headline_4 = $_POST['inhalt_ueberlupo_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `headline` = '$inhalt_ueberlupo_headline_4' WHERE `ueberLupo` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 4
if (isset($_POST['btn_ueberlupo_text_4'])) {
    $inhalt_ueberlupo_text_4 = $_POST['inhalt_ueberlupo_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `ueberLupo` SET `text` = '$inhalt_ueberlupo_text_4' WHERE `ueberLupo` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../header/ueberLupo.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// kontakt
// headline 1
if (isset($_POST['btn_kontakt_headline_1'])) {
    $inhalt_kontakt_headline_1 = $_POST['inhalt_kontakt_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `kontakt` SET `headline` = '$inhalt_kontakt_headline_1' WHERE `kontakt` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/kontakt.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 1
if (isset($_POST['btn_kontakt_text_1'])) {
    $inhalt_kontakt_text_1 = $_POST['inhalt_kontakt_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `kontakt` SET `text` = '$inhalt_kontakt_text_1' WHERE `kontakt` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../header/kontakt.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 2
if (isset($_POST['btn_kontakt_headline_2'])) {
    $inhalt_kontakt_headline_2 = $_POST['inhalt_kontakt_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `kontakt` SET `headline` = '$inhalt_kontakt_headline_2' WHERE `kontakt` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/kontakt.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 2
if (isset($_POST['btn_kontakt_text_2'])) {
    $inhalt_kontakt_text_2 = $_POST['inhalt_kontakt_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `kontakt` SET `text` = '$inhalt_kontakt_text_2' WHERE `kontakt` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../header/kontakt.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// footer
// faqs
// headline 1
if (isset($_POST['btn_faqs_headline_1'])) {
    $inhalt_faqs_headline_1 = $_POST['inhalt_faqs_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `headline` = '$inhalt_faqs_headline_1' WHERE `faqs` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 1
if (isset($_POST['btn_faqs_text_1'])) {
    $inhalt_faqs_text_1 = $_POST['inhalt_faqs_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `text` = '$inhalt_faqs_text_1' WHERE `faqs` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 2
if (isset($_POST['btn_faqs_headline_2'])) {
    $inhalt_faqs_headline_2 = $_POST['inhalt_faqs_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `headline` = '$inhalt_faqs_headline_2' WHERE `faqs` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 2
if (isset($_POST['btn_faqs_text_2'])) {
    $inhalt_faqs_text_2 = $_POST['inhalt_faqs_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `text` = '$inhalt_faqs_text_2' WHERE `faqs` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 3
if (isset($_POST['btn_faqs_headline_3'])) {
    $inhalt_faqs_headline_3 = $_POST['inhalt_faqs_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `headline` = '$inhalt_faqs_headline_3' WHERE `faqs` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 3
if (isset($_POST['btn_faqs_text_3'])) {
    $inhalt_faqs_text_3 = $_POST['inhalt_faqs_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `text` = '$inhalt_faqs_text_3' WHERE `faqs` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 4
if (isset($_POST['btn_faqs_headline_4'])) {
    $inhalt_faqs_headline_4 = $_POST['inhalt_faqs_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `headline` = '$inhalt_faqs_headline_4' WHERE `faqs` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 4
if (isset($_POST['btn_faqs_text_4'])) {
    $inhalt_faqs_text_4 = $_POST['inhalt_faqs_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `text` = '$inhalt_faqs_text_4' WHERE `faqs` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// headline 5

if (isset($_POST['btn_faqs_headline_5'])) {
    $inhalt_faqs_headline_5 = $_POST['inhalt_faqs_headline_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `headline` = '$inhalt_faqs_headline_5' WHERE `faqs` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// text 5
if (isset($_POST['btn_faqs_text_5'])) {
    $inhalt_faqs_text_5 = $_POST['inhalt_faqs_text_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `faqs` SET `text` = '$inhalt_faqs_text_5' WHERE `faqs` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../footer/faqs.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }
    $db->close();
}

// datenschutz
// headline 1
if (isset($_POST['btn_datenschutz_headline_1'])) {
    $inhalt_datenschutz_headline_1 = $_POST['inhalt_datenschutz_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_1' WHERE `datenschutz` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 1
if (isset($_POST['btn_datenschutz_text_1'])) {
    $inhalt_datenschutz_text_1 = $_POST['inhalt_datenschutz_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_1' WHERE `datenschutz` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 2
if (isset($_POST['btn_datenschutz_headline_2'])) {
    $inhalt_datenschutz_headline_2 = $_POST['inhalt_datenschutz_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_2' WHERE `datenschutz` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 2
if (isset($_POST['btn_datenschutz_text_2'])) {
    $inhalt_datenschutz_text_2 = $_POST['inhalt_datenschutz_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_2' WHERE `datenschutz` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 3
if (isset($_POST['btn_datenschutz_headline_3'])) {
    $inhalt_datenschutz_headline_3 = $_POST['inhalt_datenschutz_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_3' WHERE `datenschutz` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 3
if (isset($_POST['btn_datenschutz_text_3'])) {
    $inhalt_datenschutz_text_3 = $_POST['inhalt_datenschutz_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_3' WHERE `datenschutz` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 4
if (isset($_POST['btn_datenschutz_headline_4'])) {
    $inhalt_datenschutz_headline_4 = $_POST['inhalt_datenschutz_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_4' WHERE `datenschutz` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 4
if (isset($_POST['btn_datenschutz_text_4'])) {
    $inhalt_datenschutz_text_4 = $_POST['inhalt_datenschutz_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_4' WHERE `datenschutz` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 5
if (isset($_POST['btn_datenschutz_headline_5'])) {
    $inhalt_datenschutz_headline_5 = $_POST['inhalt_datenschutz_headline_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_5' WHERE `datenschutz` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 5
if (isset($_POST['btn_datenschutz_text_5'])) {
    $inhalt_datenschutz_text_5 = $_POST['inhalt_datenschutz_text_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_5' WHERE `datenschutz` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 6
if (isset($_POST['btn_datenschutz_headline_6'])) {
    $inhalt_datenschutz_headline_6 = $_POST['inhalt_datenschutz_headline_6'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_6' WHERE `datenschutz` . `id` = 6";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 6
if (isset($_POST['btn_datenschutz_text_6'])) {
    $inhalt_datenschutz_text_6 = $_POST['inhalt_datenschutz_text_6'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_6' WHERE `datenschutz` . `id` = 6";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 7
if (isset($_POST['btn_datenschutz_headline_7'])) {
    $inhalt_datenschutz_headline_7 = $_POST['inhalt_datenschutz_headline_7'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_7' WHERE `datenschutz` . `id` = 7";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 7
if (isset($_POST['btn_datenschutz_text_7'])) {
    $inhalt_datenschutz_text_7 = $_POST['inhalt_datenschutz_text_7'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_7' WHERE `datenschutz` . `id` = 7";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 8
if (isset($_POST['btn_datenschutz_headline_8'])) {
    $inhalt_datenschutz_headline_8 = $_POST['inhalt_datenschutz_headline_8'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_8' WHERE `datenschutz` . `id` = 8";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 8
if (isset($_POST['btn_datenschutz_text_8'])) {
    $inhalt_datenschutz_text_8 = $_POST['inhalt_datenschutz_text_8'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_8' WHERE `datenschutz` . `id` = 8";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 9
if (isset($_POST['btn_datenschutz_headline_9'])) {
    $inhalt_datenschutz_headline_9 = $_POST['inhalt_datenschutz_headline_9'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_9' WHERE `datenschutz` . `id` = 9";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 9
if (isset($_POST['btn_datenschutz_text_9'])) {
    $inhalt_datenschutz_text_9 = $_POST['inhalt_datenschutz_text_9'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_9' WHERE `datenschutz` . `id` = 9";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 10
if (isset($_POST['btn_datenschutz_headline_10'])) {
    $inhalt_datenschutz_headline_10 = $_POST['inhalt_datenschutz_headline_10'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_10' WHERE `datenschutz` . `id` = 10";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 10
if (isset($_POST['btn_datenschutz_text_10'])) {
    $inhalt_datenschutz_text_10 = $_POST['inhalt_datenschutz_text_10'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_10' WHERE `datenschutz` . `id` = 10";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 11
if (isset($_POST['btn_datenschutz_headline_11'])) {
    $inhalt_datenschutz_headline_11 = $_POST['inhalt_datenschutz_headline_11'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `headline` = '$inhalt_datenschutz_headline_11' WHERE `datenschutz` . `id` = 11";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 11
if (isset($_POST['btn_datenschutz_text_11'])) {
    $inhalt_datenschutz_text_11 = $_POST['inhalt_datenschutz_text_11'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `datenschutz` SET `text` = '$inhalt_datenschutz_text_11' WHERE `datenschutz` . `id` = 11";

    if ($db->query($sql)) {
        header('Location: ./../footer/datenschutz.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// impressum
// headline 1
if (isset($_POST['btn_impressum_headline_1'])) {
    $inhalt_impressum_headline_1 = $_POST['inhalt_impressum_headline_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `headline` = '$inhalt_impressum_headline_1' WHERE `impressum` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 1
if (isset($_POST['btn_impressum_text_1'])) {
    $inhalt_impressum_text_1 = $_POST['inhalt_impressum_text_1'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `text` = '$inhalt_impressum_text_1' WHERE `impressum` . `id` = 1";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 2
if (isset($_POST['btn_impressum_headline_2'])) {
    $inhalt_impressum_headline_2 = $_POST['inhalt_impressum_headline_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `headline` = '$inhalt_impressum_headline_2' WHERE `impressum` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 2
if (isset($_POST['btn_impressum_text_2'])) {
    $inhalt_impressum_text_2 = $_POST['inhalt_impressum_text_2'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `text` = '$inhalt_impressum_text_2' WHERE `impressum` . `id` = 2";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 3
if (isset($_POST['btn_impressum_headline_3'])) {
    $inhalt_impressum_headline_3 = $_POST['inhalt_impressum_headline_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `headline` = '$inhalt_impressum_headline_3' WHERE `impressum` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 3
if (isset($_POST['btn_impressum_text_3'])) {
    $inhalt_impressum_text_3 = $_POST['inhalt_impressum_text_3'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `text` = '$inhalt_impressum_text_3' WHERE `impressum` . `id` = 3";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 4
if (isset($_POST['btn_impressum_headline_4'])) {
    $inhalt_impressum_headline_4 = $_POST['inhalt_impressum_headline_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `headline` = '$inhalt_impressum_headline_4' WHERE `impressum` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 4
if (isset($_POST['btn_impressum_text_4'])) {
    $inhalt_impressum_text_4 = $_POST['inhalt_impressum_text_4'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `text` = '$inhalt_impressum_text_4' WHERE `impressum` . `id` = 4";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 5
if (isset($_POST['btn_impressum_headline_5'])) {
    $inhalt_impressum_headline_5 = $_POST['inhalt_impressum_headline_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `headline` = '$inhalt_impressum_headline_5' WHERE `impressum` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 5
if (isset($_POST['btn_impressum_text_5'])) {
    $inhalt_impressum_text_5 = $_POST['inhalt_impressum_text_5'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `text` = '$inhalt_impressum_text_5' WHERE `impressum` . `id` = 5";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// headline 6
if (isset($_POST['btn_impressum_headline_6'])) {
    $inhalt_impressum_headline_6 = $_POST['inhalt_impressum_headline_6'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `headline` = '$inhalt_impressum_headline_6' WHERE `impressum` . `id` = 6";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}

// text 6
if (isset($_POST['btn_impressum_text_6'])) {
    $inhalt_impressum_text_6 = $_POST['inhalt_impressum_text_6'];

    // data update
    include "../inc/db_connect.php";

    $sql = "UPDATE `impressum` SET `text` = '$inhalt_impressum_text_6' WHERE `impressum` . `id` = 6";

    if ($db->query($sql)) {
        header('Location: ./../footer/impressum.php');
        exit;
    } else {
        // Meldung bei Fehlschlag
        echo "Datensätze konnte nicht angelegt werden!";
    }

    // Verbindung zum Datenbankserver beenden
    $db->close();
}



























