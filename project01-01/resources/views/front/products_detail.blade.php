@extends('layouts.front_layout')

@section('Document')
ProductsDetail
@endsection

@section('css')
<style>
    .swiper-container {
        width: 100%;
    }
</style>
@endsection

@section('content')



<div class="container">
    <div class="row">
        <div class="col-6">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($products_detail->product_imgs as $product_img)
                    <div class="swiper-slide"><img class="img-fluid"
                            src="{{asset('/storage/'.$product_img->multiple_imgs)}}" class="card-img-top" alt="...">
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
        <div class="col-6">
            <div class="description">
                <h1>{{$products_detail->title}}</h1>
            <button class="btn btn-success add-cart" data-productid="{{$products_detail->id}}">加入購物車</button>
            </div>
        </div>

        <div class="col-12 col-md-12 my-3">
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique enim aspernatur dolor dolorum
                    cumque
                    explicabo fuga, commodi tempora porro odit quae officia modi blanditiis sit! Consequuntur quam
                    possimus,
                    saepe unde porro fugiat sint harum dignissimos a, dicta placeat nobis quibusdam dolorem? Quibusdam
                    et
                    error minus? Hic, quidem qui est suscipit assumenda voluptas minus laborum dolor repellat natus
                    exercitationem consequatur iusto aut reprehenderit mollitia quasi. Voluptatum rerum eum sunt
                    praesentium
                    modi, nihil quis, vitae deserunt cupiditate necessitatibus quidem nemo! Temporibus quasi amet
                    similique,
                    magni ad nisi adipisci quos eum tempora sapiente, fugiat eligendi excepturi assumenda esse? Alias
                    iste
                    reprehenderit non quas.</p>
            </div>
        </div>
    </div>


    @endsection


    @section('js')
    <script>
        var swiper = new Swiper('.swiper-container', {
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

        $(".add-cart").click(function(){

            var product_id = $(this).data('productid');

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

            $.ajax({
                method: 'POST',
                url: '/addCart',
                data: {product_id:product_id},   //尚未看懂
                success: function (res) {
                    $('#cartTotalQuantity').text(res);


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });





        })
    </script>


    @endsection


</div>
