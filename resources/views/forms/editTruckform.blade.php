@extends('layouts.app')

@section('content')


<form method="POST" action="{{URL::to('/admin/validateEditTruckFormValidation')}}">
    <div class="form-group">
    <label>Food truck name</label>
        <input type="text" name="name" class="form-control" value="{{ $truck->name }}" placeholder="Food truck name">
    </div>

    <div class="form-group">
    <label>Food truck name</label>
        <input type="text" name="description" class="form-control" value="{{ $truck->description }}" placeholder="Describe your truck">
    </div>

    <div class="form-group">
    <label>country</label>
        <input type="text" name="country" class="form-control" value="{{ $truck->country }}" placeholder="country">
    </div>

    <div class="form-group">
    <label>city</label>
        <input type="text" name="city" class="form-control" value="{{ $truck->city }}" placeholder="city">
    </div>

    <div class="form-group">
    <label>adress</label>
        <input type="text" name="address" class="form-control" value="{{ $truck->address }}" placeholder="adress">
    </div>

    <div class="form-group">
    <label>web page</label>
        <input type="text" name="website" class="form-control" value="{{ $truck->website }}" placeholder="web page">
    </div>

    <div class="form-group">
    <label>Phone number</label>
        <input type="number" name="phone" class="form-control" value="{{ $truck->phone }}" placeholder="phone number">
    </div>

    <div class="form-group">
    <label>opening hours</label>
        <input type="text" name="open" class="form-control" value="{{ $truck->open }}" placeholder="opening hours">
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="submit" value="save" class="btn btn-primary">
<form>

@endsection
