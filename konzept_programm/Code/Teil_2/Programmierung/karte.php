<?php
include 'includes/header.php'
?>

<div class="map-title">
    <hgroup>
        <h1>Hier kannst du alle <strong class="green-strong">Marker</strong> sehen.</h1>
        <h3>Mehr Infos per <strong class="green-strong">klick</strong> auf einen Marker!</h3>
    </hgroup>
</div>

<div id="wrapper-map">   
    <div id="content-map">
        <div id="map">
            <h1 class="h1-locate-not">Die Karte wird geladen...</h1>
            <p class="p-locate-not">Zurueck zur Hauptseite</p>
            <div class="button-locate-not">
                <a class="button" href="karte.php">Home</a>
            </div>
        </div>
        <script src="scripts/loadmap.js"></script>
    </div>
</div>

<div class="map-title-bottom">
    <hgroup>
        <h1>Die <strong class="green-strong"> besten Infos </strong> ueber alle <strong class="green-strong"> Studios! </strong></h1>
        <h3>bekommt ihr <strong class="green-strong"> nur </strong> auf unserer Seite! </h3>
    </hgroup>
</div>

<?php
include 'includes/footer.php'
?>     