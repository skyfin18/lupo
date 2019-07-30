<?php
session_start();
include "../datenbank/db_connect.php";

// headline
// headline 1

if ($resultat = $db->query('SELECT * FROM foInitiativbewerbung ORDER by id')) {
    // Antwort der Datenbank in ein Objekt übergeben und
    // mithilfe der while-Schleife durchlaufen
    while ($daten = $resultat->fetch_object()) {

        $_SESSION['adminPanelDaten'] = $daten->headline;
    }
    // Speicher freigeben
    $resultat->close();
} else {
    // Sollten keine Datensätze enthalten sein, diese Meldung ausgeben
    echo "Es konnten keine Daten aus der Datenbank ausgelesen werden";
}

// Verbindung zum Datenbankserver beenden
$db->close();

$adminPanelDaten = ($_SESSION['adminPanelDaten']) ;

var_dump($adminPanelDaten);