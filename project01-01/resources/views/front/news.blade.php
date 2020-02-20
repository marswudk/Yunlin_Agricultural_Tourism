@extends('layouts.front_layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('Document')
    最新消息
    @endsection

    @section('cdn_links')
    <link rel="stylesheet" href="./css/news_style.css">
    @endsection

    @section('css')

    @endsection

    @section('content')
    <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">最新消息</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-12">
                    <h2 class="mr-auto font-weight-bold">最新消息</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <tbody>
                            @foreach ($news as $new)
                            <tr>
                                <th  style="vertical-align:middle" scope="col"><a href="/news/{{$new->id}}"><img
                                    src="{{asset('/storage/'.$new->img)}}" alt="Responsive image" height="200px" width="200px"></a></th>
                                <th  style="vertical-align:middle" scope="col">
                                    <h3 class="font-weight-bold">{{$new->title}}</h3>
                                    <div class="table_content"><span> {!!$new->content!!}</span></div>
                                </th>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
        </div>
    @endsection

    @section('js')
    <script>
        $(function(){
            var len = 200; // 超過50個字以"..."取代
            $(".table_content").each(function(i){
                if($(this).text().length>len){
                    $(this).attr("title",$(this).text());
                    var text=$(this).text().substring(0,len-1)+"...";
                    $(this).text(text);
                }
            });
        });
        </script>
    @endsection



