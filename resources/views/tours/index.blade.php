@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2">
    <br/>
    <form method="get" action="/tours/index/{{ $province_id }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="category">Category</label>
            <select class="custom-select" id="sortBy" name="sortBy" required>
                <option value="Historical and cultural sites" selected>Historical and cultural sites</option>
                <option value="Natural and wilderness site">Natural and wilderness site</option>
                <option value="Chilling out and nightlife">Chilling out and nightlife</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Sort"/>
        </div>
    </form>

    <br/>
    <h1>Historical</h1>
    @foreach($tours as $tour)
        @if($tour->category == "Historical and cultural sites")
        <tr>
            <th scope="row">{{ $tour->id }}</th>
            <td>{{ $tour->name }}</td>
            <td><img src="/storage/{{ $tour->latestTourImage->path }}" width="200px"/></td>
            <td>{{ $tour->price }}</td>
            <td>{{ number_format(floatval(\App\Http\Controllers\TourController::overallRating($tour->id)), 1) }}</td>
        </tr>
        @endif
    @endforeach
    <h1>Natural</h1>
    @foreach($tours as $tour)
        @if($tour->category == "Natural and wilderness site")
            <tr>
                <th scope="row">{{ $tour->id }}</th>
                <td>{{ $tour->name }}</td>
                <td><img src="/storage/{{ $tour->latestTourImage->path }}" width="200px"/></td>
                <td>{{ $tour->price }}</td>
                <td>{{ number_format(floatval(\App\Http\Controllers\TourController::overallRating($tour->id)), 1) }}</td>
            </tr>
        @endif
    @endforeach
    <h1>Night</h1>
    @foreach($tours as $tour)
        @if($tour->category == "Chilling out and nightlife")
            <tr>
                <th scope="row">{{ $tour->id }}</th>
                <td>{{ $tour->name }}</td>
                <td><img src="/storage/{{ $tour->latestTourImage->path }}" width="200px"/></td>
                <td>{{ $tour->price }}</td>
                <td>{{ number_format(floatval(\App\Http\Controllers\TourController::overallRating($tour->id)), 1) }}</td>
            </tr>
        @endif
    @endforeach
    <h1>Others</h1>
    @foreach($tours as $tour)
        @if($tour->category == "Others")
            <tr>
                <th scope="row">{{ $tour->id }}</th>
                <td>{{ $tour->name }}</td>
                <td><img src="/storage/{{ $tour->latestTourImage->path }}" width="200px"/></td>
                <td>{{ $tour->price }}</td>
                <td>{{ number_format(floatval(\App\Http\Controllers\TourController::overallRating($tour->id)), 1) }}</td>
            </tr>
        @endif
    @endforeach
</div>
@endsection
