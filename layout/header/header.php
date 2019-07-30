<header id="navbar" class="sticky">
    <nav class="navbar navbar-expand-md navbar-light bg-darkorange">

        <div class="container">
            <div class="row">
                <div class="col-8 col-xs-4 col-md-4 col-lg-4">
                    <a class="navbar-brand" href="#">
                        <button class="header_button" id="button_home" onclick="onHome()"><img id="imgLogo" src="imgHeaderLogo.jpg" alt="Bild wurde nicht geladen!"></button>
                    </a>
                </div>
                <div id="navRevers" class="flex-row-reverse col-4 col-xs-0 col-md-0 col-lg-0">
                    <button class="header-button p-2 navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-12 col-xs-8 col-md-8 col-lg-8" >
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div>
                            <ul id="navFix" class="navbar-nav mr-auto">


                                <li class="nav-item">
                                    <button class="header_button" id="button_leistungen" onclick="onLeistungen()">Leistungen</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_bewerber" onclick="onBewerber()">Bewerber</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_unternehmer" onclick="onUnternehmer()">Unternehmer</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_jobboerse" onclick="onJobboerse()">Jobbörse</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_partner" onclick="onPartner()">Partner</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_ueberLupo" onclick="onUeberLupo()">Über&nbsp;Lupo</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_kontakt" onclick="onKontakt()">Kontakt</button>
                                </li>

                                <li class="nav-item">
                                    <button class="header_button" id="button_flyer" onclick="onFlyer()">Flyer</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <script>
        /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-300px";
            }
            prevScrollpos = currentScrollPos;
        }

    </script>



</header>


