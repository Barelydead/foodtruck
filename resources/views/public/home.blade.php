@extends('layouts.standard')
@section('title', 'Foodtruck mania')

@section('content')
    <h1>hello</h1>

    <p>This is the foodtruck mega site</p>
    <?php foreach ($trucks as $value) {
        var_dump($value);
    } ?>
@endsection
