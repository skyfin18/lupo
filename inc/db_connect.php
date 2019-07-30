<?php
// Verbindungs-Objekt samt Zugangsdaten festlegen
@$db = new mysqli("localhost", "fin", "8439", "lupo");


// Verbindung überprüfen
if (mysqli_connect_errno()) {
    printf("Verbindung fehlgeschlagen: %s\n", mysqli_connect_error());
    exit();
}
