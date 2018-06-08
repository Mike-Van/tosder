@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($provinces as $province)
                <tr>
                    <th scope="row">{{ $province->id }}</th>
                    <td>{{ $province->name }}</td>
                    <td><img src="../{{ $province->imgPath }}" width="200px"/></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection