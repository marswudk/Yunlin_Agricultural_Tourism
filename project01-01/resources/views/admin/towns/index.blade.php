{{-- 後台towns index --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header"><a class="btn btn-primary " href="/admin/towns/create">新增鄉鎮</a></div> --}}

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>鄉鎮名稱</th>
                            <th>郵遞區號</th>
                            <th width="250px;">Content</th>
                            <th width="250px;">Img</th>
                            <th>功能</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($towns as $town)
                        <tr>
                            <td>{{ $town->name }}</td>
                            <td>{{ $town->post_code }}</td>
                            <td>{!!$town->content!!}</td>

                            <td><img src="{{asset('/storage/'.$town->img)}}" width="100%" alt=""></td>
                            <td><a class="btn btn-success btn-sm" href="/admin/towns/edit/{{ $town->id }}">編輯</a>

                                {{-- 實作刪除功能 --}}
                                {{-- <a class="btn btn-danger btn-sm" href="#"  data-itemid="{{ $town->id }} ">
                                    刪除
                                </a>
                                <form class="delete-form" data-itemid="{{ $town->id }}"
                                    action="/admin/towns/delete/{{ $town->id }}" method="POST" style="display: none;">
                                    @csrf
                                </form> --}}
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

        });

</script>
@endsection
