@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md">
        <h4>add category</h4>

        <form method="POST" action="{{URL::to('/admin/menuFormValidation')}}">
            <div class="form-group">
            <label>Category name</label>
                <input type="text" name="title" class="form-control" value="" placeholder="Cateogry name">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="addCategory" value="true">
            <input type="submit" value="save" class="btn btn-primary">
        </form>
        @if (session('category'))
            <div class="alert alert-success">
                {{ session('category') }}
            </div>
        @endif
        <h4 class="mt-4">remove category</h4>
        <p class="text-danger">All food items in this category will be removed</p>
        <form method="POST" action="{{URL::to('/admin/menuFormValidation')}}">
            <div class="form-group">
                <select class="form-control" id="menuItem" name="category">
                    @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="removeCategory" value="true">
            <input type="submit" value="remove" class="btn btn-danger">
        </form>
        @if (session('remove'))
            <div class="alert alert-success">
                {{ session('remove') }}
            </div>
        @endif
    </div>
    <div class="col-md">
        <h4>add item</h4>

        <form method="POST" action="{{URL::to('/admin/menuFormValidation')}}" id="menuItem">
            <div class="form-group">
            <label>food title</label>
                <input type="text" name="title" class="form-control" value="" placeholder="food title">
            </div>
            <div class="form-group">
            <label>food description</label>
                <input type="text" name="description" class="form-control" value="" placeholder="food description">
            </div>
            <div class="form-group">
            <label>food price</label>
                <input type="text" name="price" class="form-control" value="" placeholder="food price">
            </div>
            <div class="form-group">
                <label for="sel1">category</label>
                <select class="form-control" id="menuItem" name="category">
                    @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="addMenuItem" value="true">
            <input type="submit" value="save" class="btn btn-primary">
        </form>
        @if (session('item') || session('removeItem'))
            <div class="alert alert-success">
                {{ session('item') }}{{ session('removeItem') }}
            </div>
        @endif
    </div>
</div>
<div class="row mt-4">
    <div class="col-md">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                Menu
            </div>
            <div class="card-body">
                @foreach ($categories as $cat)
                    <h4>{{ $cat->title }}</h4>
                    @foreach ($menuItems as $item)
                        @if ($cat->id == $item->category_id)
                            <div class="d-flex justify-content-between">
                                <span>
                                    <p><a href="{{URL::to("/admin/menuFormValidation?removeItem=$item->id")}}">remove</a> {{$item->title}}</p>
                                </span>
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
@endsection
