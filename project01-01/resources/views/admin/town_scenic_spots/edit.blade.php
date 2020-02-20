@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/town_scenic_spots/update/{{$item->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="imgs" class="col-sm-2 col-form-label">原始圖片 </label>

            <div class="col-sm-10">
                <img src="{{asset('/storage/'. $item->spot_img)}}" width="50%" alt="未放置">
            </div>
        </div>

        <div class="form-group row">
            <label for="town_id" class="col-sm-2 col-form-label">Town_id</label>
            <div class="col-sm-10">
                <select name="town_id" id="town_id" class="form-control" >
                    @foreach ($towns as $town)
                    @if($town->id == $item->town_id){
                        <option  value="{{$town->id}}" selected>{{$town->name}}</option>
                    }
                    @else{
                        <option  value="{{$town->id}}">{{$town->name}}</option>
                    }

                    @endif

                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="spot_name" class="col-sm-2 col-form-label">spot_name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='spot_name' id="spot_name" value="{{$item->spot_name}}">
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
                 <input type="text" class="form-control" name='spot_url' id="spot_url" value="{{$item->spot_url}}">
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
