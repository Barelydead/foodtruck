@extends('layouts.standard')
@section('title', 'Foodtruck mania - map')

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Location overview</h1>
        <p class="lead">Locate your favorite foodtrucks</p>
        <div id="map"></div>
@endsection

<script>

var xhr = new XMLHttpRequest();
xhr.open('GET', 'http://localhost:8082/projekt/projects/blog/public/api/coordinates');
xhr.onload = function() {
    if (xhr.status === 200) {
        locations = JSON.parse(xhr.responseText);

        console.log(locations);

        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: locations[0].lat, lng: locations[0].lng},
            zoom: 11
        });

        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
              position: {lat: locations[i].lat, lng: locations[i].lng},
              map: map,
              title: locations[i].name
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.location.href = this.url;
            });
        }
    }
    else {
        console.log('Request failed.  Returned status of ' + xhr.status);
    }
};
xhr.send();


    // var locations;
    // $.ajax({
    //   dataType: "json",
    //   url: '{{ URL::to('/api/coordinates') }}',
    //   success: function(data) {
    //         locations = data;
    //
    //         console.log(locations);
    //
    //         map = new google.maps.Map(document.getElementById('map'), {
    //             center: {lat: 0, lng: 0},
    //             zoom: 2
    //         });
    //
    //         for (var i = 0; i < locations.length; i++) {
    //             var marker = new google.maps.Marker({
    //               position: locations[i],
    //               map: map,
    //               title: locations[i].title,
    //               url: locations[i].url,
    //               icon: "img/small-emblem.png"
    //             });
    //
    //             google.maps.event.addListener(marker, 'click', function() {
    //                 window.location.href = this.url;
    //             });
    //         }
    //     }
    // });
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxJWowKDNK7yhJTHHJCDE_8-s60rmWcfI&callback=initMap">
</script>
