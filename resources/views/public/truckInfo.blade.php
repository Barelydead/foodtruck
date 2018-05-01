@extends('layouts.standard')
@section('title', 'Foodtruck mania - trucks')

@section('content')
        <div class="jumbotron">
            <h1 class="display-3">{{ $truck->name }}</h1>
            <p class="lead">{{ $truck->description }}</p>
            <hr class="my-4">
            <p>{{$truck->country}}, {{$truck->city}}, {{$truck->address}}</p>
            <div id="map"></div>
            <p class="mt-5">Opening Hours: {{$truck->open}}</p>
            <p>Website: <a href="http://{{$truck->website}}">{{$truck->website}}</a></p>
            <p>Phone Number: {{$truck->phone}}</p>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2>Menu</h2>
                @foreach ($categories as $cat)
                    <h4 class="mt-5">{{ $cat->title }}</h4>
                    @foreach ($items as $item)
                        @if ($cat->id == $item->category_id)
                            <div class="d-flex justify-content-between">
                                <p>{{$item->title}}</p>
                                <p>{{$item->price}}</p>
                            </div>
                                <p class="text-muted mb-3">{{$item->description}}</p>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>


@endsection

    <script>
      function initMap() {
        var truckPos = {lat: {{ $latLong['lat'] }}, lng: {{$latLong['lng'] }}};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: truckPos
        });
        var marker = new google.maps.Marker({
          position: truckPos,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxJWowKDNK7yhJTHHJCDE_8-s60rmWcfI&callback=initMap">
    </script>
