@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2">
    <br/>
    {{-- 
    <div>
        <a href="{{ route('provinces.create') }}" class="btn btn-primary">Add New Province</a>
    </div>
    --}}
    <br/>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Picture</th>
            <th scope="col">Price</th>
            <th scope="col">Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tours as $tour)
                <tr>
                    <th scope="row">{{ $tour->id }}</th>
                    <td>{{ $tour->name }}</td>
                    <td><img src="/storage/{{ $tour->tourImages[0]->path }}" width="200px"/></td>
                    <td>{{ $tour->price }}</td>
                    <td>{{ \App\Http\Controllers\TourController::overallRating($tour->id) }}</td>
                </tr>   
            @endforeach            
        </tbody>
    </table>
</div>
@endsection