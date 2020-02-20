<?php

namespace App\Http\Controllers;


use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        // dd($products);  用這個方法找到下列路徑
        // $product->product_type->type_name

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
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
        //主要圖片
        if ($request->hasFile('imgs')) {
            $requsetData = $request->all();
            //上傳檔案
            $file_path = $request->file('imgs')->store('', 'public');
            //填回資料表
            $requsetData['imgs'] = $file_path;
        }

        Product::create($requsetData);


        // $new_product_id = $new_product->id;

        // //圖片組
        // if ($request->hasFile('multiple_imgs')) {

        //     $files = $request->file('multiple_imgs');

        //     foreach ($files as $file) {

        //         //上傳檔案
        //         $file_path = $file->store('product_imgs', 'public');
        //         //填回資料表
        //         $product_img = new ProductImg;
        //         $product_img->product_id = $new_product_id;
        //         //produvt_id 此欄位填入  對應product 的id
        //         $product_img->multiple_imgs = $file_path;
        //         $product_img->sort = $new_product->sort;
        //         $product_img->save();

        //     }
        // }

        return redirect('/admin/products');
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
        // 原始單一圖片
        // $item = DB::table('products')->find($id);

        //多張圖片新增後改動
        $item = Product::where('id', $id)->first();

        return view('admin.products.edit', compact('item'));

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
        //上傳檔案

//-------------------

        //找到 Product  中 此筆id
        $products = Product::find($id);
        //主要圖片
        $requsetData = $request->all();
        // if ($request->hasFile('imgs')) {
        //     $requsetData = $request->all();
        //     //上傳檔案
        //     $file_path = $request->file('imgs')->store('', 'public');
        //     //填回資料表
        //     $requsetData['imgs'] = $file_path;
        // }
        $products->update($requsetData);
        //暫時未用到
        // $new_product = Products::create($requsetData);
        // $new_product_id = $new_product->id;

        //圖片組
        // if ($request->hasFile('multiple_imgs')) {

        //     $files = $request->file('multiple_imgs');

        //     foreach ($files as $file) {

        //         //FileSystem 解法
        //         // ->store(' photo', 'public')  即為存在 public\storage\photo  這個資料夾
        //         //內建防呆，如果沒有會自己建立該資料夾

        //         //上傳檔案
        //         $file_path = $file->store('product_imgs', 'public');
        //         //填回資料表
        //         $product_img = new ProductImg;
        //         $product_img->product_id = $id;
        //         //produvt_id 此欄位填入  對應product 的id
        //         $product_img->multiple_imgs = $file_path;

        //         //要修改 更多圖片的sort 新增還沒做到
        //         $product_img->sort = 1;
        //         $product_img->save();
        //         // 多檔已於此上傳
        //     }
        // }

        // $products->update($requsetData);

        // 單一檔於此上傳

        return redirect('/admin/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        // $products = Products::find($id); //找到此筆資料

        $products = Product::where('id', $id)->first();

        // $old_image_path_main = public_path('storage/' . $products->imgs); //與public 結合  實際位置

        // if ($old_image_path_main != null) { //如果原本有主要圖片(有圖)

        //     File::delete($old_image_path_main); //刪除public/storage 中的主要圖片

        // }

        // foreach ($products->product_imgs as $product_img) {
        //     $old_image_path_group = public_path('storage/' . $product_img->multiple_imgs);
        //     if ($old_image_path_main != null) {
        //         File::delete($old_image_path_group);
        //         $product_img->delete();
        //     }
        // }

        $products->delete();

        return redirect('/admin/products');
    }
}
