<?php
require('includes/db.php');

if (isset($_POST['name']) &&
        isset($_POST['kommentar']) &&
        isset($_POST['public']) &&
        isset($_POST['lat']) &&
        isset($_POST['lng'])
) {
    $query = $db->prepare('
        INSERT INTO marker (name, kommentar, public, lat, lng)
        VALUES (:name, :kommentar, :public, :lat, :lng)
    ');

    $query->execute(
            array(
                'name' => $_POST['name'],
                'kommentar' => $_POST['kommentar'],
                'public' => $_POST['public'],
                'lat' => $_POST['lat'],
                'lng' => $_POST['lng'],
            )
    );
} else {
    die('Aufruffehler');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>WM Marco Kudala | Adrian Zimmermann | Felix Werkstetter</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!--CSS import-->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/typo.css" />

        <!--SLIDER import-->
        <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo_style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/responsive_danke.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/meanmenu.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/maps.css" />

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
                <img id="logo-inline" width="150" src="images/logo.png" alt="logo"/>
            </div>
            <div id="logo-responsive" style="display: none;">
                <img id="logo-inline" width="80" src="images/logo_responsive.png" alt="logo"/>
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
                <h1>Deine <strong class="green-strong">Markierung</strong> wurde uebermittelt,</h1>
                <h3>folge nun der kleinen <strong class="green-strong">Anleitung</strong> hier unten.</h3>
            </hgroup>
        </div>

        <div id="wrapper-submit">   
            <div id="content-danke">
                <h1 class="h1-locate">Vielen Dank fuer deine Markierung!</h1>
                <p>Kehre nun zur Karte zurueck und begutachte deinen Marker</p>
                <a class="button" href="karte.php">Karte</a>
            </div>
        </div>

        <div class="map-title-bottom-danke">
            <hgroup>
                <h1>Die <strong class="green-strong"> besten Infos </strong> ueber alle <strong class="green-strong"> Studios! </strong></h1>
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
