@extends('layouts.app')

@section('content')
    <div class="col-md-6 offset-md-3">
        <h1> Placing new booking </h1>
        <form method="post" action="{{ route('bookings.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="customer_name">Customer Name<span class="required">*</span></label>
                <input   placeholder="Input your name here"
                         id="customer_name"
                         required
                         name="customer_name"
                         spellcheck="false"
                         class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="customer_phone">Customer Phone<span class="required">*</span></label>
                <input   placeholder="Input your phone number here"
                         id="customer_phone"
                         required
                         name="customer_phone"
                         spellcheck="false"
                         class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="customer_email">Customer Email<span class="required">*</span></label>
                <input   placeholder="Input your email here"
                         id="customer_email"
                         required
                         name="customer_email"
                         spellcheck="false"
                         class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="trip_date">Trip Date<span class="required">*</span></label>
                    <input data-provide="datepicker" placeholder="mm/dd/yyyy" type="text" class="form-control" id="trip_date" name="trip_date">
            </div>
            <div class="form-group">
                <label for="pick_up">Pick Up Location<span class="required">*</span></label>
                <input   placeholder="Input your pick up location here"
                         id="pick_up"
                         required
                         name="pick_up"
                         spellcheck="false"
                         class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="pax">Nº of People<span class="required">*</span></label>
                <input   placeholder="e.g. 4,5,6....etc"
                         id="pax"
                         required
                         name="pax"
                         spellcheck="false"
                         class="form-control"
                />
            </div>
            <input type="hidden" value="5" name="tour_id">
            <input type="hidden" value="1" name="guide_id">

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Book Tour"/>
            </div>
        </form>
    </div>
@endsection