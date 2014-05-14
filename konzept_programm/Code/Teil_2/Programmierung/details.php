<?php
include('includes/header.php');
require('includes/db.php');

if (isset($_GET['name'])) {

    $query = $db->prepare('SELECT * FROM marker WHERE name = :name');
    $query->execute(array('name' => $_GET['name']));
    $data = $query->fetch();

    if (!$data) {
        die('<div id="wrapper">'
                . '<div id="content">'
                . '<h1 class="h1-locate">Fehlerhafte ID uebergeben </h1>'
                . '<p>Zurueck zur Karte</p>'
                . '<a class="button" href="karte.php">Karte</a>'
                . '</div>'
                . '</div>');
    }
} else {
    die('<div id="wrapper">'
            . '<div id="content">'
            . '<h1 class="h1-locate">Keine ID uebergeben </h1>'
            . '<p>Zurueck zur Karte</p>'
            . '<a class="button" href="karte.php">Karte</a>'
            . '</div>'
            . '</div>');
}
?>

<div class="map-title">
    <hgroup>
        <h1>Hier siehst du die <strong class="green-strong">Kommentare</strong>,</h1>
        <h3>welche zu den <strong class="green-strong">Studios</strong> geschrieben worden sind.</h3>
    </hgroup>
</div>

<div id="wrapper-details">   
    <div id="content">
        <h1 class="h1-locate"><strong class="green-strong-details-first">Markierer:</strong></h1> 
        <h3 class="h1-locate"><?= htmlentities($data['name']); ?></h3> <!-- werte aus datenbank in html ausgeben -->
        <h1 class="h1-locate"><strong class="green-strong-details-second">Kommentar:</strong></h1> 
        <div class="kommentar-wrapper">
            <h3 class="h1-locate"><?= htmlentities($data['kommentar']); ?></h3> <!-- werte aus datenbank in html ausgeben -->
        </div>

        <div class="button-field">
            <h3 class="h3-details">Zurueck zur Karte</h3>
            <a class="button" href="karte.php">Karte</a>
        </div> 
    </div>
</div>

<?php
include('includes/footer.php');
?>