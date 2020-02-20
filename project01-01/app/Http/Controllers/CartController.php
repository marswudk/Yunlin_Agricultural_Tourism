<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderItem;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use Illuminate\Support\Carbon;
use TsaiYiHua\ECPay\Services\StringService;

class CartController extends Controller
{
    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function addProductToCart(Request $request)
    {

        $product_id = $request->product_id;

        $product = Product::find($product_id);

        // add cart items to a specific user
        $userId = auth()->user()->id; // or any string represents user identifier
        \Cart::session($userId)->add($product_id, $product->title, $product->price, 1, array());


        //success
        $cartTotalQuantity = \Cart::session($userId)->getTotalQuantity();

        return $cartTotalQuantity;

    }

    // public function getContent()
    // {
    //     // Getting cart's contents for a specific user
    //     $userId = auth()->user()->id; // or any string represents user identifier
    //     $content = \Cart::session($userId)->getContent();
    //     dd($content);
    // }

    // public function TotalCart()
    // {
    //     $userId = auth()->user()->id; // or any string represents user identifier
    //     $total = \Cart::session($userId)->getTotal();
    //     dd($total);
    // }

    public function cart()
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $content = \Cart::session($userId)->getContent()->sort();
        $total = \Cart::session($userId)->getTotal();

        return view("front.cart", compact('content', 'total', 'userId'));
    }

    public function changeProductQty(Request $request)
    {
        $product_id = $request->product_id;

        $new_productQty = $request->new_productQty;

        $userId = auth()->user()->id; // or any string represents user identifier

        \Cart::session($userId)->update($product_id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $new_productQty,
            ),
        ));

        //success

        return "success";

    }

    public function changeProductQtyPlus(Request $request)
    {
        $product_id = $request->product_id;

        $userId = auth()->user()->id; // or any string represents user identifier

        \Cart::session($userId)->update($product_id, array(
            'quantity' => +1,
        ));

        //success

        return "success";

    }

    public function changeProductQtyMinus(Request $request)
    {
        $product_id = $request->product_id;

        $userId = auth()->user()->id; // or any string represents user identifier

        \Cart::session($userId)->update($product_id, array(
            'quantity' => -1,

        ));

        //success

        return "success";

    }

    public function deleteSingleProductInCart(Request $request)
    {
        $product_id = $request->product_id;

        $userId = auth()->user()->id; // or any string represents user identifier

        \Cart::session($userId)->remove($product_id);

        return "success";

    }

    public function final_check()
    {
        $userId = auth()->user()->id; // or any string represents user identifier

        $content = \Cart::session($userId)->getContent()->sort();
        $total = \Cart::session($userId)->getTotal();

        return view("front.cartCheck", compact('content', 'total'));

    }

    public function clearCart()
    {
        $userId = auth()->user()->id; // or any string represents user identifier

        \Cart::session($userId)->clear();

        return "success";

    }

    public function final_check_send_out(Request $request)
    {

        $userId = auth()->user()->id; // or any string represents user identifier
        $content = \Cart::session($userId)->getContent()->sort();
        $total = \Cart::session($userId)->getTotal();

        $request_data = $request->all();
        $request_data['order_no'] = '20191226';
        $request_data['total_price'] = $total;

        $new_order = Order::create($request_data);
        //此為orders 這張表

        $new_order->order_no = "RS".Carbon::now()->format('YmdHi').$new_order->id;

        $new_order->save();

        $new_order_no = $new_order->order_no;

        //給一個空陣列
        $items = [];

        foreach ($content as $item) {
            $OrderItems = new OrderItem();

            $OrderItems->order_id = $new_order->id;

            $OrderItems->product_id = $item->id;

            $OrderItems->qty = $item->quantity;

            $OrderItems->price = $item->price;

            $OrderItems->save();

            // 待會下方會用到的變數們
            $product_id = $item->id;
            $qty = $item->quantity;
            $price = $item->price;


            $product = Product::find($product_id);

            $product_name = $product->title;

            // 一個個 new_ary 塞回items這個array

            $new_ary = [
                'name' => $product_name,
                'qty' => $qty,
                'unit' => '個',
                'price' => $price
            ];

            array_push($items,$new_ary);

            //此為order_items 這張表
        }



        //串接金流
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'OrderId' => $new_order_no,
            'Items' =>  $items,
            // 若有 Items項  則下方兩行會自動被產生
            // 'ItemName' => 'Product Name # ProductB',
            // 'TotalAmount' => $total,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];

        // 多寫了->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))  為了就是指定到自己的網址
        // 清空購物車
        \Cart::session($userId)->clear();

        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();



    }

    public function notifyUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request)
    {
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {

                 $order_no = $serverPost['MerchantTradeNo'];

                 $new_order_no = Order::where('order_no',$order_no)->first();

                 $new_order_no->status = 'payment_done';

                 $new_order_no->save();

                 return redirect("/cartFinished/{$order_no}");
            }
        }
    }
    public function cartFinished($order_no){

        // $total = \Cart::session($userId)->getTotal();

        $new_order = Order::where('order_no',$order_no)->with('order_items')->first();

        return view("front.cartFinished",compact('new_order'));
    }
}
