@extends('layouts.app')

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

@endsection

@section('Document')
訂單詳情
@endsection

@section('content')



<div class="container">
    <div class="bg-info">
        <h2>以下為訂單編號為{{$new_order->order_no}}的購物明細</h2>
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
        <h2>客戶資料</h2>
    </div>
    <hr>

    <form method="post" action="/final_check_send_out">
        @csrf
        <div class="row d-flex">
            <div class="col-12 col-md-12">
                <div class="form-group row">
                    <label for="order_no" class="cus-label col-form-label">訂單編號*</label>
                    <div class="col-sm">
                        <label for="order_no" class="cus-label col-form-label"> {{$new_order->order_no}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="cus-label col-form-label">訂單狀態</label>
                    <div class="col-sm">
                        <label for="status" class="cus-label col-form-label"> @if($new_order->status == "new_order")
                            <span class="badge badge-warning">{{ $new_order->status }}</span>

                        @elseif($new_order->status == "payment_done")
                            <span class="badge badge-success">{{ $new_order->status }}</span>
                            <a class="btn btn-primary btn-changeStatus btn-sm" href="#" data-itemid="{{ $new_order->order_no }}">
                                點擊將訂單狀態改為已出貨
                            </a>
                            <form class="ship-form" data-itemid="{{ $new_order->order_no }}"
                                action="/admin/orders/changeStatus/{{ $new_order->order_no }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        @elseif($new_order->status == "ship_done")
                            <span class="badge badge-primary">{{ $new_order->status }}</span>
                            @endif
                        </label>

                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_name" class="cus-label col-form-label">訂購姓名*</label>
                    <div class="col-sm">
                        <label for="receive_name" class="cus-label col-form-label">{{$new_order->receive_name}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_phone" class="cus-label col-form-label">聯絡電話*</label>
                    <div class="col-sm">
                        <label for="receive_phone" class="cus-label col-form-label">{{$new_order->receive_phone}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_mobile"
                        class="cus-label col-form-label">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;機*</label>
                    <div class="col-sm">
                        <label for="receive_mobile" class="cus-label col-form-label">{{$new_order->receive_mobile}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_address" class="cus-label col-form-label">收件地址*</label>
                    <div class="col-sm">
                        <label for="receive_address" class="cus-label col-form-label">{{$new_order->receive_address}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receive_email" class="cus-label col-form-label">電子郵件*</label>
                    <div class="col-sm">
                        <label for="receive_email" class="cus-label col-form-label">{{$new_order->receive_email}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="receipt_option" class="cus-label col-form-label">發票選項*</label>
                    <div class="col-sm">
                        <label for="receipt_option" class="cus-label col-form-label">{{$new_order->receipt_option}}</label>
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="time_option" class="cus-label col-form-label">收貨時間*</label>
                    <div class="col-sm">
                        <label for="time_option" class="cus-label col-form-label">{{$new_order->time_option}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="remark"
                        class="col-form-label cus-label">備&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;註*</label>
                    <div class="col-sm">
                        <label for="remark"
                        class="col-form-label cus-label">{{$new_order->remark}}</label>
                    </div>
                </div>

            </div>

        </div>

    </form>

</div>

@endsection

@section('js')
<script>
 $(document).ready(function() {
            $('#example').on('click','.btn-primary.btn-changeStatus',function(){
                event.preventDefault();
                var r=confirm("你確定要更改狀態為已出貨嗎?");
                if (r==true){
                    var itemid = $(this).data('itemid');

                    $(`.ship-form[data-itemid="${itemid}"]`).submit();

                  }

            });
        });
</script>
@endsection
