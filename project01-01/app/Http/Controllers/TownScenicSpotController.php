<?php

namespace App\Http\Controllers;

use App\Town;
use App\TownScenicSpot;
use Illuminate\Http\Request;

class TownScenicSpotController extends Controller
{
    public function index()
    {
        $town_spots = TownScenicSpot::all();

        return view('admin.town_scenic_spots.index', compact('town_spots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $town_spots = TownScenicSpot::all();

        $towns = Town::all();



        // dd($towns[0]->id);
        return view('admin.town_scenic_spots.create',compact('town_spots','towns'));
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

        $file_name = $request->file('spot_img')->store('', 'public');
        $requsetData['spot_img'] = $file_name;


        TownScenicSpot::create($requsetData);

        return redirect('/admin/town_scenic_spots');
    }

    public function edit($id)
    {
        $item = TownScenicSpot::where('id',$id)->first();

        // $town_id= $item->where('town_id',$item->town_id)->get();

        $towns = Town::all();

        return view('admin.town_scenic_spots.edit', compact('item','towns'));

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
        $town_spots = TownScenicSpot::find($id);

        $requsetData = $request->all();

        if ($request->hasFile('spot_img')) {
            $requsetData = $request->all();
            //上傳檔案
            $file_path = $request->file('spot_img')->store('', 'public');
            //填回資料表
            $requsetData['spot_img'] = $file_path;
        }

        $town_spots->update($requsetData);

        return redirect('/admin/town_scenic_spots');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $town_spots = TownScenicSpot::find($id);  //找到此筆資料

        $town_spots->delete();

        return redirect('/admin/town_scenic_spots');
    }
}
