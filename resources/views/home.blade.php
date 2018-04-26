@extends('layouts.app')

@section('content')

    @if (!isset($truck))
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    @include('forms.truckform')
                </div>
            </div>
        </div>
    @else

<div class="container">
    <div class="row space-between">
        <div class="col-md-12 mb-2">
            <div class="card">
                <div class="card-header">{{ $truck->name }} - overview</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Details</div>
                <div class="card-body">
                    <p>{{ $truck->description }}</p>
                    <p>{{ $truck->location }}</p>
                <a href="#" class="btn btn-primary">Edit details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
    @endif

@endsection
