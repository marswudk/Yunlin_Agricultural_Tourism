@extends('layouts.front_layout')


{{-- CSS 部分 --}}
@section('css')
<style>
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    .swiper-container.banner {
        width: 100%;
        height: 50%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    h2 {
        margin: 0;
    }

    #news-content {
        font-size: 20px;
    }
</style>

@endsection

{{-- HTML 部分 --}}
@section('Document')
INDEX
@endsection


@section('content')

<div class="swiper-container banner">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
        <div class="swiper-slide"><img src="{{ $banner ->imgs}}" width=100% alt=""></div>
        @endforeach
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>




<div class="container ">
        <div class="row">
            <div class="col-md-12">
                    <h2 class="my-3">Products</h2>
                    <div class="swiper-container products my-3">
                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="{{asset('/storage/'.$product->imgs)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{ $product ->title}}</h5>
                                        <p class="card-text">{!!$product->content!!}</p>
                                        <a href="/products/{{ $product ->id}}" class="btn btn-primary">Look More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

            </div>
        </div>
</div>

<div class="container ">
    <h2>News</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <ul class="list-group my-3">
                @foreach ($news as $new)
                <li id="news-content" class="list-group-item d-flex">
                    <a href="/news/{{ $new->id }}">
                        <div class="date mr-5">{{ $new->date }}</div>
                        <div class="news-title">{{ $new->title }}</div>
                        <img src="{{ $new->imgs }}" width="100%" alt="">
                    </a>
                </li>

                @endforeach
            </ul>

            {{-- {{ $news->links() }} --}}

        </div>
    </div>
</div>

@endsection



{{-- js 部分 --}}
@section('js')
<!-- Swiper js -->
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.banner', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    var swiper3 = new Swiper('.products' ,{
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

</script>

@endsection
