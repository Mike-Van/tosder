@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2">
    <br/>
    <div>
        <a href="{{ route('provinces.create') }}" class="btn btn-primary">Add New Province</a>
    </div>
    <br/>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($provinces as $province)
                <tr>
                    <th scope="row">{{ $province->id }}</th>
                    <td>{{ $province->name }}</td>
                    <td><img src="/storage/{{ $province->imgPath }}" width="200px"/></td>
                    <td>
                        <a href="provinces/{{ $province->id }}/edit" class="btn btn-warning">Edit</a> | 
                        <a
                                class="btn btn-danger"
                                href="#"
                                onclick="
                                  var result = confirm('Are you sure you wish to delete this province?');
                                      if( result ){
                                              event.preventDefault();
                                              document.getElementById('delete-form-{{$province->id}}').submit();
                                      }
                                ">Delete
                        </a>

                        <form id="delete-form-{{$province->id}}" action="{{route('provinces.destroy', $province->id)}}" method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection