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
                <div class="input-group">
                    <p>{{ $tour->overview }}</p>
                </div>
            </div>			
    </div>
@endsection