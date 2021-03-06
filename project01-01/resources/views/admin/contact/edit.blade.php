@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/contact/update/{{$item->id}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' id="name" value="{{$item->name}}" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="mobile_phone" class="col-sm-2 col-form-label">mobile_phone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='mobile_phone' id="mobile_phone" value="{{$item->mobile_phone}}" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name='email' id="email"   value="{{$item->email}}"disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="question" class="col-sm-2 col-form-label">Question</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name='question' id="question"   value="{{$item->question}}"disabled></textarea>
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
