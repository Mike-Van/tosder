<div class="review">
    <span>{{ $reviews->count() }} Reviews</span> -
    <span>{{ number_format(App\Http\Controllers\TourController::overallRating($tour->id), 1) }} / 5 stars</span>
</div>

<div class="comment">
@foreach($reviews as $review)
    <h4 class="let">
        <i>{{ $review->customer_name }}</i>
        <br>
    </h4>
    <span>{{ $review->details }}</span>
@endforeach
