@extends('layouts.front_layout')

@section('Document')
NEWS
@endsection

@section('css')
@endsection

@section('content')

<div class="container">
    <h2>{{ $news_detail ->title}}</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">

                <img src="{{asset('/storage/'.$news_detail->imgs)}}" class="card-img-top" alt="...">

                <div class="card-body">
                    <p class="card-text">{!! $news_detail ->content!!}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
@endsection
