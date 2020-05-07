@extends('layouts.app')
@section('content')

    <form action="{{url('products')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name"></label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price"></label>
            <input class="form-control" type="number" id="price" name="price">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control">
        </div>

    </form>

@endsection
