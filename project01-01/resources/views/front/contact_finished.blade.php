@extends('layouts.front_layout')





    @section('Document')
    聯絡我們--謝謝您的填寫
    @endsection

    @section('cdn_links')
    <link rel="stylesheet" href="/css/contact.css">
    @endsection

    @section('css')

    @endsection


    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h1>聯絡我們--謝謝您的填寫：</h1>
                <hr>
                <h2>我們會盡速回復您的問題</h2>
            </div>

            <div class="col-12 mt-3">
                <img src="/img/contact_finished.jpg" alt="" class="img-fluid">
                {{-- <form method="post" action="/contact/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name"
                            class="col-sm-2 col-form-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="mobile_phone"
                            class="col-sm-2 col-form-label">聯&nbsp;&nbsp;&nbsp;&nbsp;絡&nbsp;&nbsp;&nbsp;&nbsp;電&nbsp;&nbsp;&nbsp;&nbsp;話*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"   name="mobile_phone" id="mobile_phone">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                            class="col-sm-2 col-form-label">電&nbsp;&nbsp;&nbsp;&nbsp;子&nbsp;&nbsp;&nbsp;&nbsp;信&nbsp;&nbsp;&nbsp;&nbsp;箱*</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control"  name="email" id="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="question"
                            class="col-sm-2 col-form-label">問&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;題*</label>
                        <div class="col-sm-10">
                            <textarea name="question" id="question" class="form-control" cols="30" rows="5">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="send" class="col-sm-6"></label>

                    </div>
                </form> --}}
            </div>
        </div>
    </div>

    @endsection




