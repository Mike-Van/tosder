<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Province;
use App\Tour;
use App\TourImage;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index($province_id = null)
    {
        //guide index page
        if(Auth::check() && Auth::user()->role == "guide"){
            $guide_id = Auth::user()->id;
            $tours = Tour::where('guide_id', $guide_id)->get();
            $bookings = Booking::where('guide_id', $guide_id)->get();
            return view('tours.workspace', ['tours' => $tours, 'bookings' => $bookings, 'user' => Auth::user()]);
        }
        //user index page
        else{
            if(isset($_GET['sortBy']) == false){
                $tours = Tour::with('latestTourImage')->where('province_id', $province_id)->get();
                return view('tours.index', ['tours' => $tours, 'province_id' => $province_id, 'province' => Province::find($province_id)])->with('onGuest', '1');
            }
            else{
                $tours = Tour::with('latestTourImage')->where('province_id', $province_id)->where('category', '=', $_GET['sortBy'])->get();
                return view('tours.index', ['tours' => $tours, 'province_id' => $province_id, 'province' => Province::find($province_id)])->with('onGuest', '1');
            }
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
                'guide_id' => Auth::user()->id,
                'province_id' => Auth::user()->province_id
            ]);

            if($tour){
                $images = $request->file('image');
                foreach ($images as $image) {
                    $imgPath = Storage::putFile('public/photos/tours', $image);
                    $imgPath = 'photos/tours/' . basename($imgPath);

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
        $reviews = Review::where('tour_id', $tour->id)->get();
        return view('tours.show', ['tour' => $tour, 'tourImages' => $tourImages, 'reviews' => $reviews]);
    }

    public static function overallRating($tour_id){
		$tour = Tour::find($tour_id);
		$reviews = $tour->reviews;
		if($reviews->count() != 0){
            $rating = 0;
            $i = 0;
            foreach($reviews as $review){
                $rating += $review->rating;
                $i++;
            }
            $rating = $rating / $i;
            return $rating;
        }
        return 0;
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
        $tour = Tour::find($tour->id);
        $tourImages = TourImage::where('tour_id', $tour->id)->get();
        return view('tours.edit', ['tour' => $tour, 'tourImages' => $tourImages]);
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
        //dd($request->input('overview'));
        if($request->hasFile('image'))
        {
            $tourUpdate = Tour::where('id', $tour->id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'category' => $request->input('category'),
                'overview' => $request->input('overview'),
                'activity' => $request->input('activity'),
                'exclusion' => $request->input('exclusion'),
                'inclusion' => $request->input('inclusion'),
                'policies' => $request->input('policies'),
                'guide_id' => Auth::user()->id,
                'province_id' => Auth::user()->province_id
            ]);

            if($tourUpdate){
                $images = $request->file('image');
                $oldImages = TourImage::where('tour_id', $tour->id)->get();
                foreach($oldImages as $oldImage){
                    Storage::delete("public/$oldImage->path");
                }
                TourImage::where('tour_id', $tour->id)->delete();

                foreach ($images as $image) {
                    $imgPath = Storage::putFile('public/photos/tours', $image);
                    $imgPath = 'photos/tours/' . basename($imgPath);

                    $tourImage = TourImage::create([
                        'name' => $request->input('name'),
                        'path' => $imgPath,
                        'tour_id' => $tour->id
                    ]);
                }
                $tourImages = TourImage::where('tour_id', $tour->id);
                return redirect()->route('tours.show',['tour' => $tour, 'tourImages' => $tourImages])->with('success' , 'Tour updated successfully');
            }
            return back()->withInput()->with('errors', 'Error updating this tour');
        }
        else{
            $tourUpdate = Tour::where('id', $tour->id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'category' => $request->input('category'),
                'overview' => $request->input('overview'),
                'activity' => $request->input('activity'),
                'exclusion' => $request->input('exclusion'),
                'inclusion' => $request->input('inclusion'),
                'policies' => $request->input('policies'),
                'guide_id' => Auth::user()->id,
                'province_id' => Auth::user()->province_id
            ]);
            if($tourUpdate){
                $tourImages = TourImage::where('tour_id', $tour->id)->get();
                return redirect()->route('tours.show',['tour' => $tour, 'tourImages' => $tourImages])->with('success' , 'Tour updated successfully');
            }
            return back()->withInput()->with('errors', 'Error updating this tour');
        }
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
        $findTour = DB::table('tours')->where('id', $tour->id)->delete();
        $oldImages = TourImage::where('tour_id', $tour->id)->get();
        foreach($oldImages as $oldImage){
            Storage::delete("public/$oldImage->path");
        }
        TourImage::where('tour_id', $tour->id)->delete();
        if($findTour){
            return redirect()->route('tours.index')->with('success', 'Tour deleted successfully');
        }
        return back()->with('error', 'Tour could not be deleted');
    }
}
