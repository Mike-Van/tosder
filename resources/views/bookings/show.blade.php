@extends('layouts.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h1> Viewing booking details </h1>

        <div class="form-group">
            <label for="customer_name">Customer Name<span class="required">*</span></label>
            {{ $booking->customer_name }}
        </div>
        <div class="form-group">
            <label for="customer_phone">Customer Phone<span class="required">*</span></label>
            {{ $booking->customer_phone }}
        </div>
        <div class="form-group">
            <label for="customer_email">Customer Email<span class="required">*</span></label>
            {{ $booking->customer_email }}
        </div>
        <div class="form-group">
            <label for="trip_date">Trip Date<span class="required">*</span></label>
            {{ date_format(date_create($booking->trip_date) ,"d/m/Y") }}
        </div>
        <div class="form-group">
            <label for="pick_up">Pick Up Location<span class="required">*</span></label>
            {{ $booking->pick_up }}
        </div>
        <div class="form-group">
            <label for="pax">Nº of People<span class="required">*</span></label>
            {{ $booking->pax }}
        </div>
        <div class="form-group">
            <label for="grand_total">Grand Total<span class="required">*</span></label>
            {{ $booking->grand_total }}
        </div>
        <div class="form-group">
            <label for="status">Tour status<span class="required">*</span></label>
            {{ $booking->status }}
        </div>
    </div>
@endsection