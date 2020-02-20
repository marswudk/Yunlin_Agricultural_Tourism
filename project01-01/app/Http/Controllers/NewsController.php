<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsLocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requsetData = $request->all();

        //上傳檔案
        $file_name = $request->file('img')->store('', 'public');
        $requsetData['img'] = $file_name;

        News::create($requsetData);

        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DB::table('news')->find($id);

        return view('admin.news.edit', compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//-------------------

        $news = News::find($id);

        $requsetData = $request->all();
        if($request->hasFile('img')) {

            //原本有先刪除 請用public
            $old_image = 'storage/'.$news->img;

            $old_image_path = public_path($old_image);  //與public 結合  實際位置

            File::delete($old_image_path);

            //嘗試過程

            // $file_path = asset('/storage/'.$old_image);

            // $file_path = public_path().$old_image;

            //上傳

            $file_path = $request->file('img')->store('','public');
            $requsetData['img'] = $file_path; //把新圖片路徑填回資料表
        }

        $news->update($requsetData);

        return redirect('/admin/news');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $news = News::find($id);  //找到此筆資料

        $old_image_path = public_path('storage/'.$news->imgs);  //與public 結合  實際位置

        if($old_image_path != null ) {   //如果原本有值(有圖)

            File::delete($old_image_path);   //刪除public/storage 中的圖片
        }

        $news->delete();

        return redirect('/admin/news');
    }
}
