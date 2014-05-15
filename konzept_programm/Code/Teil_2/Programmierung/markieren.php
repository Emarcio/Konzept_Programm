<?php
include 'includes/header.php'
?>

<div class="map-title">
    <hgroup>
        <h1>Markiere <strong class="green-strong">Dich</strong> und</h1>
        <h3>bewundere dann deinen <strong class="green-strong">Marker</strong> auf unserer Karte!</h3>
    </hgroup>
</div>

<div id="wrapper-mark">   
    <div id="content">
        <h1 class="h1-locate">Markiere deinen <strong class="green-strong"> Standort </strong> in deinem <strong class="green-strong"> Fitnessstudio </strong> auf unserer 
            <strong class="green-strong"> Karte! </strong></h1>
        <p class="margin-address">Die Adresse an deiner Position ist:</p>
        <p><strong id="geocodedAddress">
                Adresse wird ermittelt...
            </strong>
        </p>
        <form action="addPointSubmit.php"
              method="post"
              id="addPointForm">
            <div class="text-field">
                <input type="text" name="name"
                       placeholder="Der Name des Punktes"
                       required>
            </div>
            <input type="hidden" name="lat">
            <input type="hidden" name="lng">
            <div class="text-area textarea-wrapper">
                <textarea style="max-width: 1020px; min-height: 50px;" rows="10" cols="10" name="kommentar" placeholder="Teile uns deine Meinung mit"></textarea>
            </div>
            <select name="public">
                <option value="1">&Ouml;ffentlich</option>
                <option value="0">Privat</option>
            </select>
            <div class="button-field">
                <button type="submit">Absenden</button>
            </div>
        </form>
        <script src="scripts/geocode.js"></script>
    </div>
</div>

<div class="map-title-bottom">
    <hgroup>
        <h1>Die <strong class="green-strong"> besten Infos </strong> &uuml;ber alle <strong class="green-strong"> Studios! </strong></h1>
        <h3>bekommt ihr <strong class="green-strong"> nur </strong> auf unserer Seite! </h3>
    </hgroup>
</div>

<?php
include 'includes/footer.php'
?>