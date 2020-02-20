@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/towns/update/{{$item->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="img" class="col-sm-2 col-form-label">原始圖片 </label>
            <div class="col-sm-10">
                <img src="{{asset('/storage/'.$item->img)}}" width="50%" alt="未放置">
            </div>
        </div>

        <div class="form-group row">
            <label for="img" class="col-sm-2 col-form-label">Img </label>

            <div class="col-sm-10">
                <input type="file" class="form-control" name='img' id="img" value="{{$item->img}}">
            </div>
        </div>


        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' id="name" value="{{$item->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="post_code" class="col-sm-2 col-form-label">Post_code</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='post_code' id="post_code" value="{{$item->post_code}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name='content' id="content"  >{{$item->content}}</textarea>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">編輯</button>
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
                }
            },
        });


        $.upload = function (file) {
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
                    $('#description').summernote('insertImage', img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
   });
</script>

@endsection
