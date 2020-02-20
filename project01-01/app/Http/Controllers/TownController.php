<?php

namespace App\Http\Controllers;

use App\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    public function index()
    {
        $towns = Town::all();

        return view('admin.towns.index', compact('towns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = Town::all();
        return view('admin.towns.create',compact('towns'));
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
        Town::create($requsetData);

        return redirect('/admin/towns');
    }

    public function edit($id)
    {
        $item = Town::where('id',$id)->first();

        return view('admin.towns.edit', compact('item'));

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

        $towns = Town::find($id);

        $requsetData = $request->all();

        $towns->update($requsetData);

        return redirect('/admin/towns');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $towns = Town::find($id);  //找到此筆資料

        $towns->delete();

        return redirect('/admin/towns');
    }
}
