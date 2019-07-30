<?php
session_start();

$stmt = "SELECT * FROM home WHERE id = 1";
$home = $pdo->query($stmt)->fetch();

$homeH1 = $home['headline'];
$homeH1 = $_SESSION[$homeH1];

$homeT1 = $home['text'];
$homeT1 = $_SESSION[$homeT1];

