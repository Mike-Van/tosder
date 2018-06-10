<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tours.create');
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
        if($request->hasFile('image'))
        {
            $tour = Tour::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'category' => $request->input('category'),
                'overview' => $request->input('overview'),
                'activity' => $request->input('activity'),
                'exclusion' => $request->input('exclusion'),
                'inclusion' => $request->input('inclusion'),
                'policies' => $request->input('policies'),
                'guide_id' => 1,
                'province_id' => 1
            ]);
            
            if($tour){
                return $request->file('image');
                $images = $request->file('image');
                foreach ($images as $image) {
                    $newName = time() . "." . $image->getClientOriginalExtension();
                    $image -> move('photos/tours', $newName);
                    $imgPath = 'photos/tours/' . $newName;

                    $tourImage = TourImage::create([
                        'name' => $request->input('name'),
                        'path' => $imgPath,
                        'tour_id' => $tour->id  
                    ]);
                }
                return redirect()->route('tours.show',['tour' => $tour->id])->with('success' , 'Tour added successfully');
            }
        }
        return back()->withInput()->with('errors', 'Error adding new tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
        $tour = Tour::find($tour->id);
        $tourImages = TourImage::where('tour_id', $tour->id)->get();
        return view('tours.show', ['tour' => $tour, 'tourImages' => $tourImages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
