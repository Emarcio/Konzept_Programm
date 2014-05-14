$(function() {
    var map = new google.maps.Map(
            document.getElementById('map'),
            {
                zoom: 7,
                center: new google.maps.LatLng(49.45, 11.85),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
    );

    window.map = map;

    navigator.geolocation.getCurrentPosition(
            function(position) {

                // Ermittelte Position in ein Google Maps Objekt speichern
                var userPos = new google.maps.LatLng(
                        position.coords.latitude,
                        position.coords.longitude
                        );

                map.setCenter(userPos);
                map.setZoom(7);
                
                /* Setzt roten Marker auf die Posi von User - no need in diesem Fall

                 var marker = new google.maps.Marker({
                 map: map,
                 position: userPos,
                 animation: google.maps.Animation.DROP
                 });
                 
                 var circle = new google.maps.Circle(
                 {
                 center: userPos,
                 radius: position.coords.accuracy,
                 map: map,
                 fillColor: '#0000FF',
                 fillOpacity: 0.2,
                 strokeColor: '#0000FF',
                 strokeOpacity: 0.2
                 }
                 );
                
                 */
            }
    );

    $.getJSON('listPoints.php', displayPoints);
});


function displayPoints(points) {

    for (var i = 0; i < points.length; i++)
    {
        var markerPos = new google.maps.LatLng(
                parseFloat(points[i].lat),
                parseFloat(points[i].lng)
                );

        var iconPath = 'img/public.png';
        if (points[i].public == 0) {
            iconPath = 'img/private.png';
        }

        var marker = new google.maps.Marker({
            map: window.map,
            position: markerPos,
            animation: google.maps.Animation.DROP,
            icon: iconPath,
            title: points[i].name
        });

        google.maps.event.addListener(marker, 'click', function() {
            window.location.href = 'details.php?name=' + this.title;
        });
    }

}
