@extends('layouts.standard')
@section('title', 'Foodtruck mania - trucks')

@section('content')
        @foreach ($trucks as $truck)
            <h2>{{ $truck->name }}</h2>
            <p>{{ $truck->location }}</p>
        @endforeach
@endsection
