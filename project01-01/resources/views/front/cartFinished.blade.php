@extends('layouts.front_layout')

@section('css')
<style>
    form {
        margin: 0;
    }

    .cus-label {
        padding: 3px 10px;
    }

    .btn-send {
        height: 50px;
        width: 100%;
    }

    .btn-flex {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
    }

    .time_option {
        padding: 2px 20px;
        border: 1px black solid;
    }

    .time_option:nth-child(2),
    .time_option:nth-child(3) {
        border-left: none;
    }

    .time_option.active {
        background-color: gray;
        color: white;
    }

    .receipt_option {
        padding: 2px 20px;
        border: 1px black solid;
    }

    .receipt_option:nth-child(2),
    .receipt_option:nth-child(3) {
        border-left: none;
    }

    .receipt_option.active {
        background-color: gray;
        color: white;
    }
</style>

@section('cdn_links')
<link rel="stylesheet" href="../css/style_index.css">


@endsection


@endsection

@section('Document')
購物明細
@endsection

@section('content')



<div class="container">
    <div class="bg-info">
        <h2>親愛的顧客，謝謝您的購買 <br>以下為您的購物明細</h2>
    </div>
    <hr>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ProductName</th>
                <th scope="col">Qty</th>
                <th scope="col">sub price</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($new_order->order_items as $item)
            <tr>
            <td>{{$item->product->title}}</td>
                <td>{{$item->qty}}</td>
                <td>{{$item->price * $item->qty}}</td>
            </tr>
            @endforeach


        </tbody>
    </table>

    Total Price: {{$new_order->total_price}}

    <hr>
    <div class="bg-info">
        <h2>您所填寫的資料</h2>
    </div>
    <hr>

    <form method="post" action="/final_check_send_out">
        @csrf
        <div class="row d-flex">
            <div class="col-12 col-md-12">
                <div class="form-group row">
                    <label for="order_no" class="cus-label col-form-label">訂單編號*</label>
                    <div class="col-sm">
                        <p>{{$new_order->order_no}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_name" class="cus-label col-form-label">訂購姓名*</label>
                    <div class="col-sm">
                        <p>{{$new_order->receive_name}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_phone" class="cus-label col-form-label">聯絡電話*</label>
                    <div class="col-sm">
                        <p>{{$new_order->receive_phone}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_mobile"
                        class="cus-label col-form-label">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;機*</label>
                    <div class="col-sm">
                        <p>{{$new_order->receive_mobile}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_address" class="cus-label col-form-label">收件地址*</label>
                    <div class="col-sm">
                        <p>{{$new_order->receive_address}}<</p> </div> </div> <div class="form-group row">
                                <label for="receive_email" class="cus-label col-form-label">電子郵件*</label>
                                <div class="col-sm">
                                    <p>{{$new_order->receive_email}}</p>
                                </div>
                    </div>
                    <div class="form-group row">
                        <label for="receipt_option" class="cus-label col-form-label">發票選項*</label>
                        <div class="col-sm">
                            <p>{{$new_order->receipt_option}}</p>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="time_option" class="cus-label col-form-label">收貨時間*</label>
                        <div class="col-sm">
                            <p>{{$new_order->time_option}}</p>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="remark"
                            class="col-form-label cus-label">備&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;註*</label>
                        <div class="col-sm">
                            <p>{{$new_order->remark}}</p>
                        </div>
                    </div>

                </div>

            </div>

    </form>

</div>

@endsection

@section('js')

@endsection
