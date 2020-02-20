@extends('layouts.front_layout')

@section('Document')
    最近消息
@endsection

    @section('cdn_links')

    @endsection

    @section('css')
    <link rel="stylesheet" href="../css/style_index.css">
    @endsection

    @section('content')
    <div class="container">
        <div class="row mb-2">
            <div class="col-12">
            <h2 class="mr-auto font-weight-bold">{{$news_detail->title}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mb-2"><img
                    src="{{asset('/storage/'.$news_detail->img)}}" class="img-fluid"
                    alt="Responsive image" style="max-width: 100%;width: auto;"></div>
            <div class="col-12 col-md-7 mb-2">
                <div class="info">
                    <div class="place info_info d-flex">
                        <p>活動地點:</p>
                        <p>&nbsp;&nbsp;{{$news_detail->location}}</p>
                    </div>
                    <div class="place info_info d-flex">
                        <p>地址:</p>
                        <p>&nbsp;&nbsp;{{$news_detail->address}}</p>
                    </div>
                    <div class="place info_info d-flex">
                        <p>主辦單位:</p>
                        <p>&nbsp;&nbsp;{{$news_detail->host}}</p>
                    </div>
                    <div class="place info_info d-flex">
                        <p>協辦單位:</p>
                        <p>&nbsp;&nbsp;{{$news_detail->co_organiser}}</p>
                    </div>

                    <div class="place info_info d-flex">
                        <p>電話:</p>
                        <p>&nbsp;&nbsp;{{$news_detail->tel}}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12">
                <div class="content">
                    {!!$news_detail->content!!}
                </div>
            </div>
        </div>
        <div class="row map">
            <div class="col-12 map">
                <div class="map"><iframe
                        src="{{$news_detail->coordinate}}"
                        width="600px" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

    @endsection









