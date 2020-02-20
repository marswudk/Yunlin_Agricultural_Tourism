{{-- 後台News index --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div>
                    <h2>訂單快速篩選</h2>
                    <a class="btn btn-secondary" href="/admin/orders/">顯示全部訂單</a>
                    <a class="btn btn-warning" href="/admin/orders/select/new_order">新訂單</a>
                    <a class="btn btn-success" href="/admin/orders/select/payment_done">付款完成</a>
                    <a class="btn btn-primary" href="/admin/orders/select/ship_done">已出貨</a>
                </div>
                <hr>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>訂單編號</th>
                            <th>訂購人姓名</th>
                            <th>訂購人手機</th>
                            <th>Price</th>
                            <th>訂單狀態</th>
                            <th width="130">功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->order_no }}</td>
                            <td>{{ $order->receive_name }}</td>
                            <td>{{ $order->receive_mobile }}</td>
                            <td>{{ $order->total_price}}</td>
                            @if($order->status == "new_order")
                                <td> <span class="badge badge-warning">新訂單</span></td>

                            @elseif($order->status == "payment_done")
                                <td> <span class="badge badge-success ">付款完成</span>  <a class="btn btn-primary btn-changeStatus btn-sm" href="#" data-itemid="{{ $order->order_no }}">
                                    訂單狀態改為已出貨
                                </a></td>

                            @elseif($order->status == "ship_done")
                                <td> <span class="badge badge-primary">已出貨</span></td>

                            @endif
                            {{-- <td><img src="{{asset('/storage/'.$new->imgs)}}" width="100%" alt=""></td> --}}
                            <td><a class="btn btn-success btn-sm" href="/admin/orders/show/{{$order->order_no }}">訂單詳情</a>

                                {{-- 實作刪除功能 --}}
                                <a class="btn btn-danger btn-sm" href="#" data-itemid="{{ $order->order_no }}">
                                    訂單刪除
                                </a>

                                <form class="ship-form" data-itemid="{{ $order->order_no }}"
                                    action="/admin/orders/changeStatus/{{ $order->order_no }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <form class="delete-form" data-itemid="{{ $order->order_no }}"
                                    action="/admin/orders/delete/{{ $order->order_no }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>




        </div>
    </div>
</div>
</div>

<div>

</div>
@endsection



@section('js')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
            $('#example').DataTable({
                "order": [0,"desc"]
            });

            $('#example').on('click','.btn-danger',function(){
                event.preventDefault();
                var r=confirm("你確定要刪除此項目嗎?");
                if (r==true){
                    var itemid = $(this).data('itemid');

                    $(`.delete-form[data-itemid="${itemid}"]`).submit();

                  }

            });
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
