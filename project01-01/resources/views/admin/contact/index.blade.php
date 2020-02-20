{{-- 後台contact index --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a class="btn btn-primary " href="/admin/contact/create">新增回覆 (之後拿掉)</a></div>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>mobile_phone</th>
                            <th>Email</th>
                            <th>Question</th>
                            <th>Statue</th>
                            <th>Change</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->mobile_phone }}</td>
                            <td>{{$contact->email}}</td>
                            <td>{!!$contact->question!!}</td>
                            
                            <td>未回覆</td>

                            <td><a class="btn btn-success btn-sm" href="/admin/contact/edit/{{ $contact->id }}">編輯</a>

                                {{-- 實作刪除功能 --}}
                                <a class="btn btn-danger btn-sm" href="#" data-itemid="{{ $contact->id }}">
                                    刪除
                                </a>

                                <form class="delete-form" data-itemid="{{ $contact->id }}"
                                    action="/admin/contact/delete/{{ $contact->id }}" method="POST" style="display: none;">
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

        });

</script>
@endsection
