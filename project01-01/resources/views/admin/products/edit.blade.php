@extends('layouts.app')

@section('css')
<style>
    /* .multiple_img {
        position: relative;
    }

    .multiple_img .btn-danger {
        position: absolute;
        top: 0px;
        right: 15px;
    }

    .multiple_img .sort {
        margin: 3px 1px;
    }

    .multiple_img .sort label {
        margin: 0;
        padding: 6px;
        border: 1px black none;
        line-height: 1.6;
    } */
</style>

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/products/update/{{$item->id}}" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='title' id="title" value="{{$item->title}}" required>
            </div>
        </div>

    <div class="form-group row">
        <label for="note" class="col-sm-2 col-form-label">注意事項</label>
        <div class="col-sm-10">
            <textarea required type="text" class="form-control"  id="note" name='note'
                >{{$item->note}}</textarea>
        </div>


    </div>
    <div class="form-group row">
        <label for="content" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10">
            <textarea required type="text" class="form-control" name='content' id="content"
                >{{$item->content}}</textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="expected_date" class="col-sm-2 col-form-label">Expected Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name='expected_date' id="expected_date" value="{{$item->expected_date}}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="days" class="col-sm-2 col-form-label">Days </label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='days' id="days" value="{{$item->days}}" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">price</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='price' id="price" value="{{$item->price}}" required>
        </div>
    </div>


    <div class="form-group row">
        <label for="stack" class="col-sm-2 col-form-label">Stack</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='stack' id="stack" value="{{$item->stack}}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="sales" class="col-sm-2 col-form-label">Sales</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='sales' id="sales" value="{{$item->sales}}" required>
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
        $('#note').summernote({
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
                    url: '/admin/ajax_delete_product_imgs',
                    data: {file_link:file_link},   //尚未看懂
                    success: function () {
                       console.log(file_link);

                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            }
            $('.multiple_img .btn-danger').click(function () {




                var product_imgs_id = $(this).data('productimgid');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: '/admin/ajax_delete_product_imgs',
                    data: {product_imgs_id:product_imgs_id},
                    success: function (res) {
                        $(`.multiple_img[data-productimgid='${product_imgs_id}']`).remove();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error(textStatus + " " + errorThrown);
                    }
                });
            });
       });
</script>

@endsection
