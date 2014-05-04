$(function() {
    navigator.geolocation.getCurrentPosition(
            locationOK,
            locationError
            );
});

function locationError() {
    alert('<h1 class="h1-locate"> Leider ist die Bestimmung deiner Position nicht möglich. </h1>');
    window.location.href = 'index.php';
}

function locationOK(position) {
    $('#addPointForm input[name="lat"]').val(position.coords.latitude);
    $('#addPointForm input[name="lng"]').val(position.coords.longitude);

    var geocoder = new google.maps.Geocoder();
    var userPos = new google.maps.LatLng(
            position.coords.latitude,
            position.coords.longitude
            );

    geocoder.geocode(
            {
                latLng: userPos
            },
    function(results, status) {
        if (status == 'OK') {
            $('#geocodedAddress').text(results[0].formatted_address);
        } else {
            $('#geocodedAddress').text('<h1 class="h1-locate"> Adresse konnte nicht ermittelt werden </h1>');
        }
    }
    );
}

