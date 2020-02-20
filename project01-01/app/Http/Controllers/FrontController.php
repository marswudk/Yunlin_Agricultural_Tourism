<?php

namespace App\Http\Controllers;

use App\News;
use App\Town;
use App\Contact;

use App\Product;
use App\ProductsType;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    //主頁
    public function index()
    {
        $towns = Town::with('townScenicSpots')->get();


        // $news = DB::table('news')->orderBy('id', 'desc')->paginate(3);

        return view('front.index',compact('towns'));

    }

    //新聞頁面
    public function news()
    {
        // $news = DB::table('news')->orderBy('id', 'desc')->paginate(5);;
        $news = News::all();

        return view('front.news', compact('news'));



    }

    public function news_detail($id)
    {
        $news_detail = DB::table('news')->find($id);

        return view('front.news_details', compact('news_detail'));

    }


    //產品頁面
    public function products()
    {
        // $products = DB::table('products')->take(6)->get();

        $products = Product::all();

        // dd($model_link_products[0]->model_link_products);

        //待處理


        return view('front.Yunlin_pass', compact('products'));

    }

    public function products_type($id)
    {
        // $products = DB::table('products')->take(6)->get();

        $products = ProductsType::with('products')->where('id',$id)->orderBy('sort','desc')->get();

        // dd($model_link_products[0]->model_link_products);

        //待處理


        return view('front.products', compact('products'));

    }

    public function products_detail($id)
    {
        $products_detail = Products::with('product_imgs')->where('id',$id)->first();


        return view('front.products_detail', compact('products_detail'));

    }

    public function contact()
    {
        $contacts = Contact::all();

        return view('front.contact', compact('contacts'));
    }

    public function contact_store(Request $request)
    {
        $requsetData = $request->all();

        Contact::create($requsetData);

        return view('front.contact_finished');
    }

    public function wander()
    {
        return view('front.wander');
    }

}
