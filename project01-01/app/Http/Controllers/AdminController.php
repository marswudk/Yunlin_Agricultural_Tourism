<?php

namespace App\Http\Controllers;

use App\ProductImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        // ->orderBy('id', 'desc')

        return view('home');

    }
    public function ajax_upload_img(Request $request)
    {
        // A list of permitted file extensions
        $allowed = array('png', 'jpg', 'gif', 'zip');
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($extension), $allowed)) {
                echo '{"status":"error"}';
                exit;
            }
            $name = strval(time().md5(rand(100,200)));
            $ext = explode('.', $_FILES['file']['name']);
            $filename = $name . '.' . $ext[1];
            $destination = public_path() . '/upload/img/' . $filename; //change this directory
            $location = $_FILES["file"]["tmp_name"];
            move_uploaded_file($location, $destination);
            echo "/upload/img/" . $filename; //change this URL
        }
        exit;
    }
    // 功用未確認
    public function ajax_delete_img(Request $request){
        if(file_exists(public_path().$request->file_link)){
            File::delete(public_path().$request->file_link);
        }
    }

    public function ajax_delete_product_imgs(Request $request){

    $product_imgs_id = $request->product_imgs_id;

    //多張圖片組的單一圖片刪除
    $product_imgs = ProductImg::where('id',$product_imgs_id)->get();

    foreach( $product_imgs as $product_img){
        $old_image_path = public_path('storage/' . $product_img->multiple_imgs); //與public 結合  實際位置

        if($old_image_path != null){
        File::delete($old_image_path);
    }
    }


    $product_img->delete();

    echo '{"status":"success","message":"delete file success"}';
}

}
