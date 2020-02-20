<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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

        Contact::create($requsetData);

        return redirect('/admin/contact');
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
        $item = Contact::where('id',$id)->first();

        return view('admin.contact.edit', compact('item'));

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

        $contacts = Contact::find($id);

        $requsetData = $request->all();
        if($request->hasFile('imgs')) {

            //原本有先刪除 請用public
            $old_image = 'storage/'.$contacts->imgs;

            $old_image_path = public_path($old_image);  //與public 結合  實際位置

            File::delete($old_image_path);

            //嘗試過程

            // $file_path = asset('/storage/'.$old_image);

            // $file_path = public_path().$old_image;

            //上傳
            $file_path = $request->file('imgs')->store('','public');
            $requsetData['imgs'] = $file_path; //把新圖片路徑填回資料表
        }

        $contacts->update($requsetData);

        return redirect('/admin/contact');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $contacts = contact::find($id);  //找到此筆資料

        $contacts->delete();

        return redirect('/admin/contact');
    }
}
