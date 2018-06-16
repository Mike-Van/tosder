<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
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
        return view('bookings.create');

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
        $tour_price = 80000; //dummpy tour price

        $booking = Booking::create([
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_email' => $request->input('customer_email'),
            'trip_date' => $request->input('trip_date'),
            'pick_up' => $request->input('pick_up'),
            'pax' => $request->input('pax'),
            'grand_total' => intval($request->input('pax')) * $tour_price,
            'status' => 'ongoing',
            'tour_id' => $request->input('tour_id'),
            'guide_id' => $request->input('guide_id'),
        ]);

        if($booking){
            return redirect()->route('bookings.show',['booking' => $booking->id]);
        }
        return back()->withInput()->with('errors', 'Error processing your booking');
    }

    public function cancel($booking_id = null){
        $bookingUpdate = Booking::where('id', $_GET['booking_id'])
            ->update([
                'status' => 'canceled'
            ]);
        if($bookingUpdate){
            echo("success");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
        $booking = Booking::find($booking->id);
        return view('bookings.show', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
