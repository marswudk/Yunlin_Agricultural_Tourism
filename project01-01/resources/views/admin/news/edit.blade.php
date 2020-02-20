@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/news/update/{{$item->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="imgs" class="col-sm-2 col-form-label">原始圖片 </label>

            <div class="col-sm-10">
                <img src="{{asset('/storage/'.$item->img)}}" width="50%" alt="未放置">
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='title' id="title" value="{{$item->title}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name='content' id="content" >{!!$item->content!!}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="img" class="col-sm-2 col-form-label">Img</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='img' id="img">
            </div>
        </div>

        <div class="form-group row">
            <label for="date_start" class="col-sm-2 col-form-label">date_start</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='date_start' id="date_start" value="{{$item->date_start}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="date_end" class="col-sm-2 col-form-label">date_end</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='date_end' id="date_end" value="{{$item->date_end}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="location" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='location' id="location" value="{{$item->location}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='address' id="address"   value="{{$item->address}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="host" class="col-sm-2 col-form-label">host</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='host' id="host"  value="{{$item->host}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="co_organiser" class="col-sm-2 col-form-label">co_organiser</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='co_organiser' id="co_organiser"  value="{{$item->co_organiser}}"  >
            </div>
        </div>
        <div class="form-group row">
            <label for="tel" class="col-sm-2 col-form-label">tel</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tel' id="tel"  value="{{$item->tel}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="coordinate" class="col-sm-2 col-form-label">coordinate</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='coordinate' id="coordinate"   value="{{$item->coordinate}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="sort" class="col-sm-2 col-form-label">Sort</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='sort' id="sort" value="{{$item->sort}}">
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
