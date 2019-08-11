<?php
session_start()
?>

<section id="stellenangebote" class="responsiveX">

    <script>
        var headline = "Stellenangebot";
    </script>

    <?php include "./layout/header/headerHeadline.php"; ?>



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div id="borderForm" class="container-fluid borderOrange bg_florawhite">
                        <br>
                        <img id="picLogoFormular" src="./bilder/forms/logoFormulare.jpg"
                             alt="Bild konnte nicht geladen werden">
                        <h2 class="text-center">Stellenangebot</h2>
                        <h3 class="text-center">Elektroniker (m/w/d) für Betriebstechnik</h3>
                        <br>
                        <br>
                        <br>
                        <div class="row">
                            <!--Section 1-->
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-2">
                                <div>
                                    <img class="float_left img45px" src="./bilder/jobs/picLocation.png"
                                         alt="Bild wurde nicht geladen">
                                    <ul>
                                        <li>&ensp;<b>Arbeitsstätte</b></li>
                                        <li>&ensp;München</li>
                                    </ul>
                                </div>
                                <br>
                                <div>
                                    <img class="float_left img45px" src="./bilder/jobs/picBag.png"
                                         alt="Bild wurde nicht geladen">
                                    <ul>
                                        <li>&ensp;<b>Firmenkategorie</b></li>
                                        <li>&ensp;Elektrofachbetrieb</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-1">

                            </div>
                            <!--Section 2 -->
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-3">
                                <div>
                                    <img class="float_left img45px" src="./bilder/jobs/picCalendar.png"
                                         alt="Bild wurde nicht geladen">
                                    <ul>
                                        <li>&ensp;<b>Arbeitszeit</b></li>
                                        <li>&ensp;Vollzeit</li>
                                    </ul>
                                </div>
                                <br>
                                <div>
                                    <img class="float_left img45px" src="./bilder/jobs/picVertrag.png"
                                         alt="Bild wurde nicht geladen">
                                    <ul>
                                        <li>&ensp;<b>Vertragsart</b></li>
                                        <li>&ensp;Arbeitnehmerüberlassung</li>
                                    </ul>
                                </div>
                            </div>


                            <!--Section 3 -->
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-3">
                                <div>
                                    <img class="float_left img45px" src="./bilder/jobs/picZahnrad.png"
                                         alt="Bild wurde nicht geladen">


                                    &ensp;<b>Job-ID</b>
                                    <br>
                                    <b><?php $jobid = 54662;
                                        echo "&ensp;$jobid";
                                        $_SESSION["jobid"] = "$jobid";
                                        $jobid = $_SESSION["jobid"];
                                        ?></b>


                                </div>
                                <br>
                                <div>
                                    <img class="float_left img45px" src="./bilder/jobs/picFormularLogo.png"
                                         alt="Bild wurde nicht geladen">
                                    <ul>
                                        <li>&ensp;<b>Bonus</b></li>
                                        <li>&ensp;24 Stunden Vermittlungsgarantie</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <b>Stellenbeschreibung</b>
                                        <br>
                                        <br>
                                        Sie möchten in einem dynamischen Arbeitsumfeld Ihre Leistung unter Beweis
                                        stellen?
                                        Zudem übernehmen Sie gerne Aufgaben im Elektronikbereich? Falls Sie das bejahen
                                        können,
                                        sollten Sie sich schnell bei uns bewerben.
                                        <br>
                                        Wir suchen für einen unserer Kunden im Raum Landau, Germersheim und Wörth
                                        erfahrene
                                        Elektriker / Elektroniker (m/w/d) für Betriebstechnik.
                                        <br>
                                        <br>
                                        <br>
                                        <b>Ihre Aufgaben</b>
                                        <br>
                                        <br>
                                        -Kontrolle und Überwachung der Einzel- und Gesamtfunktion der Anlage
                                        <br>
                                        -Erstellung von Betriebsmittelkennzeichnungen
                                        <br>
                                        -Mit verantwortlich für den reibungslosen Ablauf in der Produktion/Fertigung
                                        <br>
                                        -Überprüfung der elektrischen Anschlüsse
                                        <br>
                                        -Fehlersuche und Störungsbeseitigung
                                        <br>
                                        -Mit verantwortlich für die Betriebselektrik und Hauselektrik
                                        <br>
                                        -Wartung und Instandhaltung der Maschinen und Anlagen
                                        <br>
                                        -Lesen von Schaltplänen
                                        <br>
                                        <br>
                                        <br>
                                        <b>Unsere Anforderungen</b>
                                        <br>
                                        <br>
                                        -Abgeschlossene Berufsausbildung als Elektriker (m/w)
                                        <br>
                                        -Kenntnisse als Betriebselektriker / Industrieelektriker (m/w)
                                        <br>
                                        -Kenntnisse in SPS Steuerungstechnik sind kein muss aber wünschenswert
                                        <br>
                                        -Freundliches, verbindliches Auftreten
                                        <br>
                                        -Bereitschaft zur Schichtarbeit / Mehrarbeit
                                        <br>
                                        -Selbständige und lösungsorientierte Arbeitsweise, Verantwortungsbewusstsein und
                                        Teamfähigkeit
                                        <br>
                                        <br>
                                        <b>Das dürfen Sie erwarten</b>
                                        <br>
                                        <br>

                                        -Übertarifliche Bezahlung
                                        <br>
                                        -Unbefristeten Arbeitsvertrag
                                        <br>
                                        -Sozialleistungen wie z.B. Urlaubs- und Weihnachtsgeld
                                        <br>
                                        -Vertretung durch einen bundesweiten Gesamtbetriebsrat
                                        <br>
                                        -Bonusmodelle wie z.B. Mitarbeiter werben Mitarbeiter
                                        <br>
                                        -Kostenlose Ausstattung mit der Arbeitskleidung
                                        <br>
                                        -Persönliche Betreuung durch Ihre Personal Agentur Lupo GmbH
                                        <br>
                                        <br>
                                        Wenn wir Ihr Interesse geweckt haben, freuen wir uns über Ihre aussagekräftige
                                        Bewerbung
                                        als Industrieelektriker/in - Betriebstechnik (m/w) in Landau, Germersheim sowie
                                        Wörth.
                                        <br>
                                        Gerne stehen wir Ihnen als deutscher Marktführer für Fragen zur Verfügung und
                                        beraten Sie individuell bei der Suche nach einer passenden Stelle.
                                        <br>
                                        <br>
                                        <b>Wir freuen uns auf Ihre Bewerbung</b>
                                    </p>
                                    <div class="div_mittig">

                                        <button class="btn-warning">
                                            <a class="black hover-black" href="./../../../lupo/layout/forms/idBewerbung/idBewerbung.php">Jetzt Bewerben</a>

                                        </button>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>


</section>
