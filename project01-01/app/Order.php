<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $table = ('orders');

    protected $fillable = [
        'order_no','receive_name', 'receive_phone', 'receive_mobile','receive_address','receive_email','receipt_option','time_option','status','remark','total_price','deleted_at'
    ];


    // //父
    // public function product_type()
    // {
    //     return $this->belongsTo('App\ProductsType','type_id')->orderBy('sort','desc');
    // }


    // //子

    public function order_items()
    {
       return $this->hasMany('App\OrderItem','order_id')->with('product');
    }
}
