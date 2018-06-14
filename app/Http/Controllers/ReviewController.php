<?php

namespace App\Http\Controllers;

use App\Review;
use App\Tour;
use Illuminate\Http\Request;

class ReviewController extends Controller
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
		return view('comments.create');
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
        $review = Review::create([
            'customer_name' => $request->input('customer_name'),
            'details' => $request->input('details'),
            'rating' => $request->input('rating'),
            'tour_id' => $request->input('tour_id')
        ]);
        if($comment){
            return back()->with('success', 'Thanks you for your review');
        }
        return back()->withInput()->with('errors', 'Errors submitting your review');
	}

	private function overallRating($tour_id){
		$tour = Tour::find($tour_id);
		$reviews = $tour->reviews;
		$rating = 0;
		$i = 1;
		foreach($reviews as $review){
			$rating += $review->rating;
			$i++;
		}
		$rating = $rating / $i;
		return $rating;
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
		//
		$tour = Tour::find($tour -> id);
		$reviews = $tour -> reviews;
		$overallRating = overallRating($tour -> id);
		return view('comments.show', ['reviews' => $reviews, 'overallRating' => $overallRating]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
