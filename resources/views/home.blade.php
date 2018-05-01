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
                <div class="card-header d-flex justify-content-between">
                    Details
                    <a href=" {{URL::to("/admin/update/truckinfo")}}" class="">edit details</a>
                </div>
                <div class="card-body">
                    <p>{{ $truck->description }}</p>
                    <p>{{ $truck->country }}</p>
                    <p>{{ $truck->city }}</p>
                    <p>{{ $truck->address }}</p>
                    <p>{{ $truck->open }}</p>
                    <p>{{ $truck->website }}</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Menu
                    <a href="{{ URL::to('/admin/update/menu')}}">edit menu</a>
                </div>
                <div class="card-body">
                    @foreach ($menuCategories as $cat)
                        <h4>{{ $cat->title }}</h4>
                        @foreach ($menuItems as $item)
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
        </div>
    </div>
</div>
    @endif

@endsection
