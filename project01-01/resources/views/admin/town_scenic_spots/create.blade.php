@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/town_scenic_spots/store" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="town_id" class="col-sm-2 col-form-label">Town_id</label>
            <div class="col-sm-10">
                <select name="town_id" id="town_id" class="form-control" >
                    @foreach ($towns as $town)
                    <option  value="{{$town->id}}">{{$town->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="spot_name" class="col-sm-2 col-form-label">spot_name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='spot_name' id="spot_name">
            </div>
        </div>

        <div class="form-group row">
            <label for="spot_img" class="col-sm-2 col-form-label">spot_img</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='spot_img' id="spot_img" >
            </div>
        </div>
        <div class="form-group row">
            <label for="spot_url" class="col-sm-2 col-form-label">spot_url</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" name='spot_url' id="spot_url">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')

<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 150,
            lang: 'zh-TW',
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                },
                onMediaDelete : function(target) {
                    $.delete(target[0].getAttribute("src"));
                }
            },
        });


        $.upload = function (file) {

            console.log("Test upload");

            let out = new FormData();
            out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_upload_img',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function (img) {
                    $('#content').summernote('insertImage', img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
        $.delete = function (file_link) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_delete_img',
                data: {file_link:file_link},   //尚未看懂
                success: function () {
                   console.log(file_link);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }
   });
</script>

@endsection
