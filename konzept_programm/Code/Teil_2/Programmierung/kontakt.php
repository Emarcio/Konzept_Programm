<?php
include 'includes/header.php'
?>

<div class="map-title">
    <hgroup>
        <h1>Fuell das <strong class="green-strong">Formular</strong> aus</h1>
        <h3>und wir werden asap <strong class="green-strong">antworten.</strong></h3>
    </hgroup>
</div>

<div id="wrapper-kontakt">   
    <div id="content">
        <div class="form-wrapper">
            <form novalidate="novalidate" action="danke.php" method="post" id="contact-form" name="contactform">
                <div class="text-field">
                    <label class="label-title" for="firstname"> Name </label>
                    <input type="text" size="40" maxlength="31" name="vorname" id="firstname" placeholder="">
                </div>
                <div class="text-field">
                    <label class="label-title" for="lastname"> Nachname </label>
                    <input type="text" size="40" maxlength="31" name="nachname" id="lastname" placeholder="" required>
                </div> 
                <div class="text-field">
                    <label class="label-title" for="email"> E-Mail </label>
                    <input type="text" size="40" maxlength="31" name="email" id="email" placeholder="" required>
                </div>
                <div class="text-field">
                    <label class="label-title" for="phone"> Mobil </label>
                    <input type="text" size="40" maxlength="31" name="phone" id="phone" placeholder="" class="">
                </div>
                <div class="text-area textarea-wrapper">
                    <label class="label-title" for="comments"> Dein Belangen </label>
                    <textarea style="height: 200px; max-width: 1020px;" name="textfeld" id="comments" placeholder="Wie kann ich Dir weiterhelfen?" required></textarea>
                </div>
                <input type="submit" value="Senden" id="submit-button" class="button">
                <input type="reset" value="Zuruecksetzen" id="reset-button" class="button">
            </form>
         </div>   
    </div>
</div>

<?php
include 'includes/footer.php'
?>     