@extends('layouts.app')

@section('content')

    <div class="col-md-8 offset-md-2">
        <h1> {{ $tour->name }} </h1>
            @foreach($tourImages as $tourImage)
                <div class="form-group">
                    <img src="/storage/{{ $tourImage->path }}" width="100%" height="100%" />
                </div>
            @endforeach
            <div class="form-group">
                <label>Price: {{ $tour->price }} KHR</label>
            </div>
            <div class="form-group">
                <label>Ovewview</label>
                {!! $tour->overview !!}
            </div>

            <div class="form-group">
                <label>Rating</label>
                <div class="input-group">
                    <p>{{ \App\Http\Controllers\TourController::overallRating($tour->id) }}</p>
                </div>
            </div>
            
            <div class="row container-fluid">
                <form method="post" action="{{ route('reviews.store') }}">
                    {{ csrf_field() }}
                    
                    <input type="hidden" name="tour_id" value="{{ $tour->id }}" />
                    
                    <div class="form-group">
                        <label for="customer_name">Your Name<span class="required">*</span></label>
                        <input   placeholder="Your name"
                                    id="customer_name"
                                    required
                                    name="customer_name"
                                    spellcheck="false"
                                    class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating Score</label>
                        <select class="custom-select" id="rating" name="rating" required>
                            <option value="5" selected>5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="review-content">Review</label>
                        <textarea placeholder="Write your reviews here"
                                  style="resize: vertical"
                                  id="review-content"
                                  name="details"
                                  rows="3" spellcheck="true"
                                  class="form-control autosize-target text-left">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary"
                               value="Submit"/>
                    </div>
                </form>
                @include('partials.reviews')
            </div>			
    </div>
@endsection