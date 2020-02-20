@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <form method="post" action="/admin/products/store" enctype="multipart/form-data">
        @csrf

        {{--
            <th>Title</th>
            <th>Note</th>
            <th>Content</th>
            <th>Expected Date</th>
            <th>Days</th>
            <th>price</th>
            <th>Change</th>
            <th>Stack</th>
            <th>Sales</th>

            --}}
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='title' id="title" value="I am Title" required>
                </div>
            </div>

        <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label">注意事項</label>
            <div class="col-sm-10">
                <textarea required type="text" class="form-control"  id="note" name='note'
                    placeholder="Type note">注意事項</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
                <textarea required type="text" class="form-control" name='content' id="content"
                    placeholder="Type here as you wish.">內文</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="expected_date" class="col-sm-2 col-form-label">Expected Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='expected_date' id="expected_date" value="1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="days" class="col-sm-2 col-form-label">Days 此處做選擇48/72</label>
            <div class="col-sm-10">
                <select class="form-control" name="days"  id="days">
                    <option value="48">48小時</option>
                    <option value="72">72小時</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='price' id="price" value="1994-11-15" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="stack" class="col-sm-2 col-form-label">Stack</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='stack' id="stack" value="1" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="sales" class="col-sm-2 col-form-label">Sales</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='sales' id="sales" value="1" required>
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

    });
</script>

@endsection
