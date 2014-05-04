<?php
include 'includes/header.php'
?>

<div class="map-title">
    <hgroup>
        <h1>Hier kannst du deine <strong class="green-strong">Marker</strong> sehen</h1>
        <h3>und <strong class="green-strong">klick</strong> doch mal auf einen.</h3>
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

<?php
include 'includes/footer.php'
?>     