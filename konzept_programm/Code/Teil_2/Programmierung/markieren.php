<?php
include 'includes/header.php'
?>

<div class="map-title">
    <hgroup>
        <h1>Hier kannst du deine <strong class="green-strong">Marker</strong> sehen</h1>
        <h3>und <strong class="green-strong">klick</strong> doch mal auf einen.</h3>
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
                <option value="1">Oeffentlich</option>
                <option value="0">Privat</option>
            </select>
            <button type="submit">Absenden</button>
        </form>
        <script src="scripts/geocode.js"></script>
    </div>
</div>

<?php
include 'includes/footer.php'
?>