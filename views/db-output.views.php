<?php
session_start();

// slogan
$stmt = "SELECT * FROM slogan WHERE id = 1";
$slogan = $pdo->query($stmt)->fetch();

$slogan = $slogan['slogan'];



// header
// index
$stmt = "SELECT * FROM home WHERE id = 1";
$home = $pdo->query($stmt)->fetch();

$homeH1 = $home['headline'];
$homeT1 = $home['text'];

// leistungen

$stmt = "SELECT * FROM leistungen WHERE id = 1";
$leistungen = $pdo->query($stmt)->fetch();

$leistungenH1 = $leistungen['headline'];
$leistungenT1 = $leistungen['text'];

$stmt = "SELECT * FROM leistungen WHERE id = 2";
$leistungen = $pdo->query($stmt)->fetch();

$leistungenH2 = $leistungen['headline'];
$leistungenT2 = $leistungen['text'];

$stmt = "SELECT * FROM leistungen WHERE id = 3";
$leistungen = $pdo->query($stmt)->fetch();

$leistungenH3 = $leistungen['headline'];
$leistungenT3 = $leistungen['text'];

$stmt = "SELECT * FROM leistungen WHERE id = 4";
$leistungen = $pdo->query($stmt)->fetch();

$leistungenH4 = $leistungen['headline'];
$leistungenT4 = $leistungen['text'];

$stmt = "SELECT * FROM leistungen WHERE id = 5";
$leistungen = $pdo->query($stmt)->fetch();

$leistungenH5 = $leistungen['headline'];

$stmt = "SELECT * FROM leistungen WHERE id = 6";
$leistungen = $pdo->query($stmt)->fetch();

$leistungenH6 = $leistungen['headline'];

// fBewerber
$stmt = "SELECT *FROM fBewerber WHERE id = 1";
$fBewerber = $pdo->query($stmt)->fetch();

$fBewerberH1 = $fBewerber['headline'];
$fBewerberT1 = $fBewerber['text'];

$stmt = "SELECT *FROM fBewerber WHERE id = 2";
$fBewerber = $pdo->query($stmt)->fetch();

$fBewerberH2 = $fBewerber['headline'];
$fBewerberT2 = $fBewerber['text'];

$stmt = "SELECT *FROM fBewerber WHERE id = 3";
$fBewerber = $pdo->query($stmt)->fetch();

$fBewerberH3 = $fBewerber['headline'];
$fBewerberT3 = $fBewerber['text'];

$stmt = "SELECT *FROM fBewerber WHERE id = 4";
$fBewerber = $pdo->query($stmt)->fetch();

$fBewerberT4 = $fBewerber['text'];

// fUnternehmer
$stmt = "SELECT *FROM fUnternehmer WHERE id = 1";
$fUnternehmer = $pdo->query($stmt)->fetch();

$fUnternehmerH1 = $fUnternehmer['headline'];
$fUnternehmerT1 = $fUnternehmer['text'];

$stmt = "SELECT *FROM fUnternehmer WHERE id = 2";
$fUnternehmer = $pdo->query($stmt)->fetch();

$fUnternehmerH2 = $fUnternehmer['headline'];
$fUnternehmerT2 = $fUnternehmer['text'];

$stmt = "SELECT *FROM fUnternehmer WHERE id = 3";
$fUnternehmer = $pdo->query($stmt)->fetch();

$fUnternehmerH3 = $fUnternehmer['headline'];
$fUnternehmerT3 = $fUnternehmer['text'];

$stmt = "SELECT *FROM fUnternehmer WHERE id = 4";
$fUnternehmer = $pdo->query($stmt)->fetch();

$fUnternehmerH4 = $fUnternehmer['headline'];
$fUnternehmerT4 = $fUnternehmer['text'];

//jobbörse

$stmt = "SELECT *FROM jobboerse WHERE id = 1";
$jobboerse = $pdo->query($stmt)->fetch();

$jobboerseH1 = $jobboerse['headline'];
$jobboerseT1 = $jobboerse['text'];

$stmt = "SELECT *FROM jobboerse WHERE id = 2";
$jobboerse = $pdo->query($stmt)->fetch();

$jobboerseH2 = $jobboerse['headline'];
$jobboerseT2 = $jobboerse['text'];

$stmt = "SELECT *FROM jobboerse WHERE id = 3";
$jobboerse = $pdo->query($stmt)->fetch();

$jobboerseH3 = $jobboerse['headline'];
$jobboerseT3 = $jobboerse['text'];

$stmt = "SELECT *FROM jobboerse WHERE id = 4";
$jobboerse = $pdo->query($stmt)->fetch();

$jobboerseH4 = $jobboerse['headline'];
$jobboerseT4 = $jobboerse['text'];

$stmt = "SELECT *FROM jobboerse WHERE id = 5";
$jobboerse = $pdo->query($stmt)->fetch();

$jobboerseT5 = $jobboerse['text'];

//partner

$stmt = "SELECT *FROM partner WHERE id = 1";
$partner = $pdo->query($stmt)->fetch();

$partnerH1 = $partner['headline'];
$partnerT1 = $partner['text'];

$stmt = "SELECT *FROM partner WHERE id = 2";
$partner = $pdo->query($stmt)->fetch();

$partnerH2 = $partner['headline'];
$partnerT2 = $partner['text'];

// ueberLupo

$stmt = "SELECT *FROM ueberLupo WHERE id = 1";
$ueberLupo = $pdo->query($stmt)->fetch();

$ueberLupoH1 = $ueberLupo['headline'];
$ueberLupoT1 = $ueberLupo['text'];

$stmt = "SELECT *FROM ueberLupo WHERE id = 2";
$ueberLupo = $pdo->query($stmt)->fetch();

$ueberLupoH2 = $ueberLupo['headline'];
$ueberLupoT2 = $ueberLupo['text'];

$stmt = "SELECT *FROM ueberLupo WHERE id = 3";
$ueberLupo = $pdo->query($stmt)->fetch();

$ueberLupoH3 = $ueberLupo['headline'];
$ueberLupoT3 = $ueberLupo['text'];

$stmt = "SELECT *FROM ueberLupo WHERE id = 4";
$ueberLupo = $pdo->query($stmt)->fetch();

$ueberLupoH4 = $ueberLupo['headline'];
$ueberLupoT4 = $ueberLupo['text'];

// kontakt

$stmt = "SELECT *FROM kontakt WHERE id = 1";
$kontakt = $pdo->query($stmt)->fetch();

$kontaktH1 = $kontakt['headline'];
$kontaktT1 = $kontakt['text'];

$stmt = "SELECT *FROM kontakt WHERE id = 2";
$kontakt = $pdo->query($stmt)->fetch();

$kontaktH2 = $kontakt['headline'];
$kontaktT2 = $kontakt['text'];

// footer
// faqs

$stmt = "SELECT * FROM faqs WHERE id = 1";
$faqs = $pdo->query($stmt)->fetch();

$faqsH1 = $faqs['headline'];
$faqsT1 = $faqs['text'];

$stmt = "SELECT * FROM faqs WHERE id = 2";
$faqs = $pdo->query($stmt)->fetch();

$faqsH2 = $faqs['headline'];
$faqsT2 = $faqs['text'];

$stmt = "SELECT * FROM faqs WHERE id = 3";
$faqs = $pdo->query($stmt)->fetch();

$faqsH3 = $faqs['headline'];
$faqsT3 = $faqs['text'];

$stmt = "SELECT * FROM faqs WHERE id = 4";
$faqs = $pdo->query($stmt)->fetch();

$faqsH4 = $faqs['headline'];
$faqsT4 = $faqs['text'];

$stmt = "SELECT * FROM faqs WHERE id = 5";
$faqs = $pdo->query($stmt)->fetch();

$faqsH5 = $faqs['headline'];
$faqsT5 = $faqs['text'];



// datenschutz

$stmt = "SELECT * FROM datenschutz WHERE id = 1";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH1 = $datenschutz['headline'];
$datenschutzT1 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 2";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH2 = $datenschutz['headline'];
$datenschutzT2 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 3";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH3 = $datenschutz['headline'];
$datenschutzT3 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 4";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH4 = $datenschutz['headline'];
$datenschutzT4 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 5";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH5 = $datenschutz['headline'];
$datenschutzT5 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 6";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH6 = $datenschutz['headline'];
$datenschutzT6 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 7";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH7 = $datenschutz['headline'];
$datenschutzT7 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 8";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH8 = $datenschutz['headline'];
$datenschutzT8 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 9";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH9 = $datenschutz['headline'];
$datenschutzT9 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 10";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH10 = $datenschutz['headline'];
$datenschutzT10 = $datenschutz['text'];

$stmt = "SELECT * FROM datenschutz WHERE id = 11";
$datenschutz = $pdo->query($stmt)->fetch();

$datenschutzH11 = $datenschutz['headline'];
$datenschutzT11 = $datenschutz['text'];

// impressum

$stmt = "SELECT * FROM impressum WHERE id = 1";
$impressum = $pdo->query($stmt)->fetch();

$impressumH1 = $impressum['headline'];
$impressumT1 = $impressum['text'];

$stmt = "SELECT * FROM impressum WHERE id = 2";
$impressum = $pdo->query($stmt)->fetch();

$impressumH2 = $impressum['headline'];
$impressumT2 = $impressum['text'];

$stmt = "SELECT * FROM impressum WHERE id = 3";
$impressum = $pdo->query($stmt)->fetch();

$impressumH3 = $impressum['headline'];
$impressumT3 = $impressum['text'];

$stmt = "SELECT * FROM impressum WHERE id = 4";
$impressum = $pdo->query($stmt)->fetch();

$impressumH4 = $impressum['headline'];
$impressumT4 = $impressum['text'];

$stmt = "SELECT * FROM impressum WHERE id = 5";
$impressum = $pdo->query($stmt)->fetch();

$impressumH5 = $impressum['headline'];
$impressumT5 = $impressum['text'];

$stmt = "SELECT * FROM impressum WHERE id = 6";
$impressum = $pdo->query($stmt)->fetch();

$impressumH6 = $impressum['headline'];
$impressumT6 = $impressum['text'];
































