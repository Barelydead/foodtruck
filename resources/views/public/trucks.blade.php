@extends('layouts.standard')
@section('title', 'Foodtruck mania - trucks')

@section('content')
        @foreach ($trucks as $truck)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $truck->name }}</h5>
                    <p class="card-text">{{ $truck->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <p>{{ $truck->location }}</p>
        @endforeach
@endsection
