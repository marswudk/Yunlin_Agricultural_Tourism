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

@endsection

@section('Document')
Cart-Final Check
@endsection

@section('content')

<div class="container">

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ProductName</th>
                <th scope="col">Qty</th>
                <th scope="col">sub price</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($content as $item)

            <tr>
                <th scope="row">1</th>
                <td>{{$item->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price * $item->quantity}}</td>

            </tr>
            @endforeach


        </tbody>
    </table>

    Total Price:{{$total}}

    <hr>
    <div class="bg-info">
        <h2>填寫運送資料</h2>
    </div>
    <hr>

    <form method="post" action="/final_check_send_out">
        @csrf

        <div class="row d-flex">
            <div class="col-12 col-md-10">
                <div class="form-group row">
                    <label for="receive_name" class="cus-label col-form-label">訂購姓名*</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_name" name="receive_name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_phone" class="cus-label col-form-label">聯絡電話*</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_phone" name="receive_phone">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_mobile"
                        class="cus-label col-form-label">手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;機*</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_mobile" name="receive_mobile">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_address" class="cus-label col-form-label">收件地址*</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_address" name="receive_address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receive_email" class="cus-label col-form-label">電子郵件*</label>
                    <div class="col-sm">
                        <input type="text" class="form-control" id="receive_email" name="receive_email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="receipt_option" class="cus-label col-form-label">發票選項*</label>
                    <div class="col-12 col-md-10 d-flex">
                        <div class="receipt_option active">二聯式發票</div>
                        <div class="receipt_option">三聯式發票</div>
                        <input class="receipt_option_value" type="text" value="二聯式發票" name="receipt_option"
                            id="receipt_option" hidden>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="time_option" class="cus-label col-form-label">收貨時間*</label>
                    <div class="col-12 col-md-10 d-flex">
                        <div class="time_option active">皆可</div>
                        <div class="time_option">中午前</div>
                        <div class="time_option">下午</div>
                        <input class="time_option_value" type="text" value="皆可" name="time_option" id="time_option"
                            hidden>
                    </div>

                </div>

                <div class="form-group row">
                    <label for="remark"
                        class="col-form-label cus-label">備&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;註*</label>
                    <div class="col-sm">
                        <textarea type="text" class="form-control" name='remark' id="remark" rows="5"></textarea>
                    </div>
                </div>

            </div>
            <div class="btn-flex col-12 col-md-2">
                <div class="form-group ">
                    <a href="/cart" class="btn btn-primary form-control">回上一頁</a>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn btn-primary form-control">送出訂單資料</button>
                </div>

            </div>
        </div>

    </form>

</div>


<div class="bg-img mt-5"></div>
@endsection

@section('js')
<script>
    $('.time_option').on('click', function() {
        $('.time_option').removeClass( "active" )
        $(this).addClass( "active" );

       var time_option_value = this.textContent;

        $('.time_option_value').val(time_option_value);

    });

    $('.receipt_option').on('click', function() {
        $('.receipt_option').removeClass( "active" )
        $(this).addClass( "active" );

       var receipt_option_value = this.textContent;

        $('.receipt_option_value').val(receipt_option_value);

    });

</script>

@endsection
