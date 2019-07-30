<?php
$dbname = "lupo";
$dbuser = "fin";
$dbpassword = "8439";
$dbhost = "localhost";
#$dbhost = "127.0.0.1";

try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpassword, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
} catch (PDOException $e) {
    die("Konnte keine Verbindung mit Datenbank aufbauen");
}

