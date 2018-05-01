@extends('layouts.standard')
@section('title', 'Foodtruck mania')

@section('content')

    <div class="jumbotron">
        <h1 class="display-3">Foodtruck tracker 2.0</h1>
        <p class="lead">This site is for all the foodies out there! Here you can easily check where all your favorite foodtrucks is and browse the menus.</p>
        <div class="col-md-8 mx-auto">
            <img src="{{asset('img/foodtruck.jpg')}}" alt="truck" class="img-fluid">
        </div>
        <hr class="my-4">
        <p>Do you own a foodtruck and wish to get more customers?</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ URL::to('/register')}}" role="button">Sign up here</a>
        </p>
    </div>
@endsection
