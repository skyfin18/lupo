<?php

error_reporting(E_ALL);

// Zum Aufbau der Verbindung zur Datenbank
define('MYSQL_HOST', 'localhost');
define('MYSQL_BENUTZER', 'fin');
// DU HAST DEINE NUTZERNAME UND PASSWORT VERGESEN EINZUGEBEN, UNS MYSQLI ZU NUTZEN :)
define('MYSQL_KENNWORT', '8439');

define('MYSQL_DATENBANK', 'lupo');


$db = mysqli_connect(MYSQL_HOST, MYSQL_BENUTZER, MYSQL_KENNWORT, MYSQL_DATENBANK);
if ($db) {

} else {
// hier sollte dann später dem Programmierer eine
// E-Mail mit dem Problem zukommen gelassen werden
    die('keine Verbindung möglich: ' . mysqli_connect_error());
}

?>


<?php

if ($_POST["fname"] !== ""
    && $_POST["lname"] !== ""
    && $_POST["tele"] !== ""
    && $_POST["email"] !== ""
    && $_POST["job"] !== ""
) {

    $title = $_POST["title"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $tele = $_POST["tele"];
    $mobil = $_POST["mobil"];
    $email = $_POST["email"];
    $job = $_POST["job"];
    $bdate = $_POST["bdate"];
    $upload = $_POST["upload"];
    $kommi = $_POST["kommi"];
    $firstdate = $_POST["firstdate"];

    $query = "INSERT INTO `foInitiativbewerbung` (`id`, `title`, `fname`, `lname`, `tele`, `mobil`, `email`, `job`, `bdate`, `upload`, `kommi`, `firstdate`) 
VALUES (NULL, '$title', '$fname', '$lname', '$tele', '$mobil', '$email', '$job', '$bdate', '$upload', '$kommi', '$upload');";
    $result = $db->query($query);


}


mysqli_close($db);

