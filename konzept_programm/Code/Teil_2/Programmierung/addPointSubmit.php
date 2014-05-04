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

include 'includes/header.php'
?>

<div class="map-title">
    <hgroup>
        <h1>Deine <strong class="green-strong">Markierung</strong> wurde uebermittelt,</h1>
        <h3>folge nun der kleinen <strong class="green-strong">Anleitung</strong> hier unten.</h3>
    </hgroup>
</div>

<div id="wrapper">   
    <div id="content-danke">
        <h1 class="h1-locate">Vielen Dank fuer deine Markierung!</h1>
        <p>Kehre nun zur Karte zurueck und begutachte deinen Marker</p>
        <a class="button" href="karte.php">Karte</a>
    </div>
</div>

<?php
include 'includes/footer.php'
?>