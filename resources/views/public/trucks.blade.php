@extends('layouts.standard')
@section('title', 'Foodtruck mania - trucks')

@section('content')
            <div class="row d-flex p-3">
            @foreach ($trucks as $truck)
                <div class="card col-md-3 mx-4">
                    <div class="card-header">
                        <h2>{{ $truck->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-muted">{{ $truck->city }}</p>
                        <p class="card-text">{{ $truck->description }}</p>
                        <a href="{{URL::to("/trucks/$truck->id")}}" class="btn btn-primary">More details</a>
                    </div>
                </div>
                <p>{{ $truck->location }}</p>
            @endforeach
            </div>
@endsection
