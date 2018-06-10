<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
//use Input;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $provinces = DB::table('provinces')->orderBy('id')->get();
        return view('provinces.index', ['provinces' => $provinces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        //dd($url);

        return view('provinces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*    
        $image = Input::file('image');
        $newName = time() . "." . $image->getClientOriginalExtension();
        $image -> move('photos/provinces', $newName);
        $imgPath = 'photos/provinces/' . $newName;
        */
        $imgPath = Storage::putFile('public/photos/provinces', $request->file('image'));
        $imgPath = 'photos/provinces/' . basename($imgPath);
        $province = Province::create([
            'name' => $request->input('name'),
            'imgPath' => $imgPath
        ]);
        if($province){
            return redirect()->route('provinces.index')->with('success' , 'Province added successfully');
        }
        return back()->withInput()->with('errors', 'Error creating new company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        //
        $province = Province::find($province->id);
        return view('provinces.edit', ['province'=>$province]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        //
        
        $provinceUpdate = null;
        if(Input::hasFile('image')){
            Storage::delete("public/$province->imgPath"); //delete old image
            $imgPath = Storage::putFile('public/photos/provinces', $request->file('image'));
            $imgPath = 'photos/provinces/' . basename($imgPath);

            $provinceUpdate = Province::where('id', $province->id)->update([
                'name' => $request->input('name'),
                'imgPath' => $imgPath
            ]);
        }
        else{
            $provinceUpdate = Province::where('id', $province->id)->update([
                'name' => $request->input('name')
            ]);
        }
        
        if($provinceUpdate){
            return redirect()->route('provinces.index')->with('success', 'Province updated successfully!');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
        
        $findProvince = DB::table('provinces')->where('id', $province->id)->delete();
        
        if($findProvince){
            return redirect()->route('provinces.index')->with('success', 'Province deleted successfully');
        }
        return back()->with('error', 'Province could not be deleted');
        
        //var_dump($province->id);
    }
}