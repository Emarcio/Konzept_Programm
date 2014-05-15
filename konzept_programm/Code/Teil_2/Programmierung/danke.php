<!DOCTYPE html>
<html>
    <head>
        <title>WM Marco Kudala | Adrian Zimmermann | Felix Werkstetter</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!--CSS import-->
        <link rel="icon" type="image/png" href="images/logo_responsive.png" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/typo.css" />
        <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo_style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/responsive_danke.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/maps.css" />

        <!--JS import-->
        <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="scripts/modernizr.js"></script>
        <script type="text/javascript" src="scripts/jquery.js"></script>

        <!--IF CHROME extra styles-->
        <script type="text/javascript">
            if (navigator.userAgent.toLowerCase().indexOf('chrome') != -1) {
                document.write('<link rel="stylesheet" type="text/css" href="css/stylechr.css"/>');
            }
        </script>

    </head>
    <body class="karte">
        <div class="nav-wrapper">
            <div id="logo">
                <h1 class="logo-inline-new">
                    <a href="index.php">
                        <img src="images/logo.png" width="150" alt="logo"/>
                    </a>
                </h1>
            </div>
            <div id="logo-responsive" style="display: none;">
                <h1 class="logo-inline-responsive">
                    <a href="index.php">
                        <img src="images/logo_responsive.png" width="80" alt="logo"/>
                    </a>
                </h1>
            </div>
            <div id="nav">
                <div class="ul_wrapper">
                    <ul id="nav_ul">
                        <li><a href="index.php">home</a></li>
                        <li><a href="markieren.php">fitnessstudio markieren</a></li>
                        <li><a href="karte.php">karte</a></li>
                        <li><a href="kontakt.php">kontakt</a></li>
                    </ul>
                </div>
            </div>
            <div class="mean-div"></div>
        </div>

        <div class="map-title">
            <hgroup>
                <h1>Deine <strong class="green-strong">Mitteilung</strong> wurde &uuml;bermittelt,</h1>
                <h3>wir werden uns so <strong class="green-strong">schnell wie m&ouml;glich</strong> darum k&uuml;mmern.</h3>
            </hgroup>
        </div>

        <div id="wrapper-danke">   
            <div id="content-danke">
                <h1 class="h1-locate">Vielen Dank f&uuml;r deine <strong class="green-strong">Mitteilung</strong></h1>
                <p>Schnelligkeit ist unsere Tugend!</p>
                <a class="button" href="index.php">Startseite</a>
            </div>
        </div>

        <div class="map-title-bottom-danke">
            <hgroup>
                <h1>Die <strong class="green-strong"> besten Infos </strong> &uuml;ber alle <strong class="green-strong"> Studios! </strong></h1>
                <h3>bekommt ihr <strong class="green-strong"> nur </strong> auf unserer Seite! </h3>
            </hgroup>
        </div>

        <div id="footer-danke">
            <div id="inner_footer">
                <div id="row1" class="row">
                    <a href="https://www.facebook.com/marco.kudala">
                        <span>-Marco-</span>
                    </a>
                </div>
                <div id="row2" class="row">
                    <a href="https://www.facebook.com/felix.werkstetter?fref=ts">
                        <span>-Felix-</span>
                    </a>
                </div>
                <div id="row3" class="row">
                    <a href="https://www.facebook.com/adzibo?fref=ts">
                        <span>-Adrian-</span>
                    </a>
                </div>
            </div>
        </div>

        <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?sensor=false">
        </script>
        <script type="text/javascript" src="scripts/jquery.meanmenu.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                // MEANMENU

                $('#nav').meanmenu({
                    meanScreenWidth: '1040',
                    meanMenuContainer: '.mean-div',
                    meanRemoveAttrs: true,
                    meanRevealColour: "#242424",
                    meanRevealHoverColour: "FFFFFF"
                });
            });
        </script>
        <script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
    </body>
</html>
