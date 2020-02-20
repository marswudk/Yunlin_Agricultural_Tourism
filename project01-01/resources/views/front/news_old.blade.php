@extends('layouts.front_layout')

@section('css')
<style>
    .bg-img {
        background-image: url('https://cdn.pixabay.com/photo/2017/08/17/13/33/business-2651346_960_720.jpg');
        width: 100%;
        height: 50vh;
        background-position: center;
        background-size: cover;
    }
</style>

@endsection

@section('Document')
NEWS
@endsection

@yield('CSS')

@section('content')

<div class="bg-img mb-3"></div>

<div class="container">
    @foreach ($news as $new)
    <div class="row">
        <h1 class="col-12">{{$new->location_name}}</h1> <br>
        @foreach ($new->news as $inner)
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



    {{-- <div class="row">
        <div class="col">
            <ul class="list-group my-3">
                @foreach ($news as $new)
                <li class="list-group-item d-flex">
                    <a href="/news/{{ $new->id }}">
    <div class="date mr-5">{{ $new->date }}</div>
    <div class="news-title">{{ $new->title }}</div>
    </a>
    </li>
    @endforeach
    </ul>
</div>
</div> --}}
</div>



@endsection

@section('js')
@endsection

