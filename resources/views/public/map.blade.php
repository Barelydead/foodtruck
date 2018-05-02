@extends('layouts.standard')
@section('title', 'Foodtruck mania - map')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Location overview</h1>
        <p class="lead">Locate your favorite foodtrucks</p>
        <div id="map" class="tall-map"></div>
@endsection

<script>

function initMap() {
    apiUrl = document.URL.slice(0, -3) + "api/coordinates";
    console.log(apiUrl);
    fetch(apiUrl)
      .then(function(response) {
        return response.json();
      })
      .then(function(locations) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: locations[0].lat, lng: locations[0].lng},
            zoom: 6
        });

        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: {lat: locations[i].lat, lng: locations[i].lng},
                map: map,
                title: locations[i].name,
                url: locations[i].url
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = this.url;
            });
        }
      });
}

</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxJWowKDNK7yhJTHHJCDE_8-s60rmWcfI&callback=initMap">
</script>
