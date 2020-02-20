<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes(['register'=>true,'reset'=>false,'verify'=>false]);

Route::get('/', 'FrontController@index');
Route::get('/news', 'FrontController@news');
Route::get('/products', 'FrontController@products');

Route::get('/contact', 'FrontController@contact');
Route::post('/contact_store', 'FrontController@contact_store');
Route::get('/wander', 'FrontController@wander');



//購物車


// Route::get('/getContent', 'CartController@getContent');
// Route::get('/TotalCart', 'CartController@TotalCart');

Route::post('/addCart', 'CartController@addProductToCart');   //加入購物車


Route::get('/cart', 'CartController@cart')->middleware('auth');   //沒有登入會員進入購物車
Route::post('/changeProductQty', 'CartController@changeProductQty'); //改變產品數量 用填的
Route::post('/changeProductQtyPlus', 'CartController@changeProductQtyPlus'); //改變產品數量 +1
Route::post('/changeProductQtyMinus', 'CartController@changeProductQtyMinus'); //改變產品數量 -1
Route::post('/deleteSingleProductInCart', 'CartController@deleteSingleProductInCart'); //刪除單一產品
Route::post('/clearCart', 'CartController@clearCart'); // 清空購物車

Route::get('/final_check', 'CartController@final_check'); //購物車確認頁面
Route::post('/final_check_send_out', 'CartController@final_check_send_out');  //送出購物 訂單成立

Route::get('/cartFinished/{order_no}', 'CartController@cartFinished'); //購物車成功付款頁面

// 串接金流  過去/回來 都是post

Route::prefix('cart_ecpay')->group(function(){
    Route::post('notify', 'CartController@notifyUrl')
        ->name('notify');
    Route::post('return', 'CartController@returnUrl')
        ->name('return');
});



//

Route::get('/news/{id}', 'FrontController@news_detail');


// Route::get('/productType/{id}', 'FrontController@products_type');
// // 篩選訂單 參考
// Route::get('/products/{id}', 'FrontController@products_detail');

// Route::get('/home', 'HomeController@index');



// Route::get('admin/profile', function () {
//     //
// })->middleware('auth');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/', function () {
//         // 使用 auth 中间件
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    //Admin
    Route::get('/', 'AdminController@index');

    //SummerNote

    Route::post('/ajax_upload_img','AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img','AdminController@ajax_delete_img');
    Route::post('/ajax_delete_product_imgs','AdminController@ajax_delete_product_imgs');

    //Towns
    Route::get('towns', 'TownController@index');

    Route::post('towns/store', 'TownController@store');
    Route::get('towns/edit/{id}', 'TownController@edit');
    Route::post('towns/update/{id}', 'TownController@update');
    // 選做功能
    // Route::get('towns/create', 'TownController@create');
    // Route::post('towns/delete/{id}', 'TownController@delete');


    //Towns
    Route::get('town_scenic_spots', 'TownScenicSpotController@index');
    Route::get('town_scenic_spots/create', 'TownScenicSpotController@create');
    Route::post('town_scenic_spots/store', 'TownScenicSpotController@store');
    Route::get('town_scenic_spots/edit/{id}', 'TownScenicSpotController@edit');
    Route::post('town_scenic_spots/update/{id}', 'TownScenicSpotController@update');
    Route::post('town_scenic_spots/delete/{id}', 'TownScenicSpotController@delete');

     //News
     Route::get('news', 'NewsController@index');
     Route::get('news/create', 'NewsController@create');
     Route::post('news/store', 'NewsController@store');
     Route::get('news/edit/{id}', 'NewsController@edit');
     Route::post('news/update/{id}', 'NewsController@update');
     Route::post('news/delete/{id}', 'NewsController@delete');

    //Products
    Route::get('products', 'ProductsController@index');
    Route::get('products/create', 'ProductsController@create');
    Route::post('products/store', 'ProductsController@store');
    Route::get('products/edit/{id}', 'ProductsController@edit');
    Route::post('products/update/{id}', 'ProductsController@update');
    Route::post('products/delete/{id}', 'ProductsController@delete');

    //Order
    Route::get('orders', 'OrdersController@index'); //訂單總覽
    Route::get('orders/show/{order_no}', 'OrdersController@show'); // 訂單詳情
    Route::get('orders/select/{status}', 'OrdersController@select'); //訂單篩選
    Route::post('orders/changeStatus/{order_no}', 'OrdersController@changeStatus'); //訂單狀態更改
    Route::post('orders/delete/{order_no}', 'OrdersController@delete'); //訂單刪除

     //Contact
     Route::get('contact', 'ContactController@index');
     Route::get('contact/create', 'ContactController@create');
     Route::post('contact/store', 'ContactController@store');
     Route::get('contact/edit/{id}', 'ContactController@edit');
     Route::post('contact/update/{id}', 'ContactController@update');
     Route::post('contact/delete/{id}', 'ContactController@delete');
});
