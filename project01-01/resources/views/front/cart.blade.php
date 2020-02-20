@extends('layouts.front_layout')

@section('css')
<style>
    body{
        overflow: hidden;
    }
    .bg-img {
        /* background-image: url('https://cdn.pixabay.com/photo/2017/11/29/13/28/a-discount-2986181_960_720.jpg'); */
        width: 100%;
        height: calc(100vh - 440px)

    }
</style>

@endsection

@section('Document')
Cart
@endsection

@section('content')

<div class="container">
    <div class="d-flex justify-content-between">
        <h1>購物車清單</h1>
        <a href="" class="btn btn-info btn-sm clearCart " data-userid="{{$userId}}">清空 <br> 購物車</a>
    </div>
    <hr>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ProductName</th>
                <th scope="col">Qty</th>
                <th scope="col">sub price</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($content as $item)

            <tr>
                <th scope="row">1</th>
                <td>{{$item->name}}</td>
                <td>
                    <button class="btn btn-primary btn-sm btn-minus" data-productid="{{$item->id}}">-</button>
                    <input class="product_qty col-form-label-sm" type="text" data-productid="{{$item->id}}"
                        value="{{$item->quantity}}">
                    <button class="btn btn-primary btn-sm btn-plus" data-productid="{{$item->id}}">+</button>
                </td>
                <td>{{$item->price * $item->quantity}}</td>
                <td><button class="btn btn-danger btn-delete-in-cart" data-productid="{{$item->id}}">刪除</button></td>

            </tr>
            @endforeach


        </tbody>
    </table>

    Total Price:{{$total}}

    <hr>
    <a class="btn btn-success " href="/final_check">確認結帳</a>


</div>
</div>

<div class="bg-img mt-5"></div>
@endsection

@section('js')
<script>
    $('.product_qty').on('change', function() {
        var new_productQty = this.value;
        var product_id = $(this).data('productid');

        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/changeProductQty',
                    data: {
                        new_productQty:new_productQty,
                        product_id:product_id
                        },   //key-value  前方的 key 呼應表格/input 的 name     後方的value = 實際的值
                    success: function () {
                        document.location.reload()



                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });


    });
    $('.btn-minus').on('click', function() {
        var product_id = $(this).data('productid');

        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/changeProductQtyMinus',
                    data: {
                        product_id:product_id
                        },   //key-value  前方的 key 呼應表格/input 的 name     後方的value = 實際的值
                    success: function () {
                        document.location.reload()



                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });



    });
    $('.btn-plus').on('click', function() {
        var product_id = $(this).data('productid');

        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/changeProductQtyPlus',
                    data: {
                        product_id:product_id
                        },   //key-value  前方的 key 呼應表格/input 的 name     後方的value = 實際的值
                    success: function () {
                        document.location.reload()



                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });




    });

    $('.btn-delete-in-cart').on('click', function() {
        var product_id = $(this).data('productid');

        console.log(product_id);
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


            $.ajax({
                        method: 'POST',
                        url: '/deleteSingleProductInCart',
                        data: {
                            product_id:product_id
                            },   //key-value  前方的 key 呼應表格/input 的 name     後方的value = 實際的值
                        success: function () {
                            document.location.reload()



                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error(textStatus + " " + errorThrown);
                        }
                    });


        });

    $('.btn-plus').on('click', function() {
        var product_id = $(this).data('productid');

        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/changeProductQtyPlus',
                    data: {

                        },   //key-value  前方的 key 呼應表格/input 的 name     後方的value = 實際的值
                    success: function () {
                        document.location.reload()

                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });




    });

    $('.clearCart').on('click', function() {
        var user_id = $(this).data('userid');
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/clearCart',
                    data: {
                        user_id:user_id
                        },   //key-value  前方的 key 呼應表格/input 的 name     後方的value = 實際的值
                    success: function () {
                        document.location.reload()



                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });




    });
</script>


@endsection
