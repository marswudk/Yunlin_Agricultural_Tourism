@extends('layouts.front_layout')

@section('css')
<style>
    .bg-img {
        background-image: url('https://cdn.pixabay.com/photo/2019/08/19/07/45/pets-4415649_960_720.jpg');
        width: 100%;
        height: 50vh;
        background-position: center;
        background-size: cover;
    }
</style>

@endsection

@section('Document')
Products
@endsection

@section('content')

<div class="bg-img mb-3"></div>

<div class="container">
    @foreach ($products as $product)
    <a class="btn btn-primary" href="#{{$product->type_name}}" role="button">{{$product->type_name}}</a>
    @endforeach
    {{-- 跑各種類別迴圈 --}}
    @foreach ($products as $product)
    <div class="row">
        <h1 class="col-12" id="{{$product->type_name}}"><a
                href="/productType/{{$product->id}}">{{$product->type_name}}</a></h1> <br>
        @foreach ($product->products as $inner)
        {{-- 跑各類別中的資料筆數 迴圈 --}}
        {{-- products[0]指向 products array --}}
        <div class="col-12 col-md-4">
            <div class="card my-3">
                <img src="{{asset('/storage/'.$inner->imgs)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{!! $inner ->title !!}</h5>
                    <p class="card-text">{!!$inner->content!!}</p>
                    <a href="/products/{{ $inner ->id}}" class="btn btn-primary">Look More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    @endforeach

    {{-- @foreach ($products as $product)
        <div class="col-12 col-md-4">
            <div class="card my-3">
                <img src="{{asset('/storage/'.$product->imgs)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"> {{ $product ->title}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        <a href="/products/{{ $product ->id}}" class="btn btn-primary">Look More</a>
    </div>
</div>
</div>
@endforeach --}}
</div>
</div>
@endsection

@section('js')


@endsection
