<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('admin.order.index', compact('orders'));
    }
    public function show($order_no)
    {
        $new_order = Order::where('order_no',$order_no)->with('order_items')->first();

        return view('admin.order.show', compact('new_order'));
    }

    public function select($status)
    {

        $orders = Order::where('status',$status)->get();



        return view('admin.order.index', compact('orders'));
    }



    public function changeStatus(Request $request,$order_no)
    {

        $orders = Order::where('order_no',$order_no)->first();  //找到此筆資料
        $orders->status = 'ship_done';
        $orders->save();

        return redirect()->back();
    }

    public function delete(Request $request,$order_no)
    {




        $order = Order::where('order_no',$order_no)->first();  //找到此筆資料

        $order_items = OrderItem::where('order_id',$order->id)->get();

        foreach( $order_items as $item){
            $item->delete();

        }

        $order->delete();

        return redirect('/admin/orders');
    }

}
