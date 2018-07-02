<?php

namespace App\Http\Controllers;

use App\Province;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['find', 'tours']]);
    }

    public function find(Request $request){
        $province = Province::where('name', $request->input('province_name'))->first();
        return redirect()->route('allTours', $province->id);
    }

    public function tours($province_id){
        if(isset($_GET['sortBy']) == false){
            $tours = Tour::with('latestTourImage')->where('province_id', $province_id)->get();
            return view('tours.index', ['tours' => $tours, 'province_id' => $province_id, 'province' => Province::find($province_id)])->with('onGuest', '1');
        }
        else{
            $tours = Tour::with('latestTourImage')->where('province_id', $province_id)->where('category', '=', $_GET['sortBy'])->get();
            return view('tours.index', ['tours' => $tours, 'province_id' => $province_id, 'province' => Province::find($province_id)])->with('onGuest', '1');
        }
    }

    public function index()
    {
        //
        if(Auth::check() && Auth::user()->role == "admin"){
            $provinces = DB::table('provinces')->orderBy('id')->get();
            return view('provinces.index', ['provinces' => $provinces]);
        }
        else {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::check() && Auth::user()->role == "admin"){
            return view('provinces.create');
        }
        else{
            return redirect()->back();
        }
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
        if(Auth::check() && Auth::user()->role == "admin"){
            $province = Province::find($province->id);
            return view('provinces.edit', ['province'=>$province]);
        }
        else{
            return redirect()->back();
        }
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
        if(Auth::check() && Auth::user()->role == "admin"){
            $findProvince = DB::table('provinces')->where('id', $province->id)->delete();

            if($findProvince){
                return redirect()->route('provinces.index')->with('success', 'Province deleted successfully');
            }
            return back()->with('error', 'Province could not be deleted');
        }
        else{
            return redirect()->back();
        }
    }
}
