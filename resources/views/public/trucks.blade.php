@extends('layouts.standard')
@section('title', 'Foodtruck mania - trucks')

@section('content')
    <div class="container">
        @foreach ($trucks as $truck)
            <h2>{{ $truck->name }}</h2>
            <p>{{ $truck->location }}</p>
        @endforeach
    </div>
@endsection
