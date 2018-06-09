@extends('layouts.app')

@section('content')
    <div class="col-md-6 offset-md-3">
        <h1> Editing Province </h1>
        <form method="post" action="{{ route('provinces.update', [$province->id]) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="name">Province Name<span class="required">*</span></label>
                <input      id="name"
                            required
                            name="name"
                            spellcheck="false"
                            value="{{ $province->name }}"
                            class="form-control"
                />
			</div>
			<div class="input-group mb-3">
                <img src="/{{ $province->imgPath }}" width="100%" height="100%"/>
				<div class="custom-file">					
					<label class="custom-file-label" for="image">Update Province Image</label>
					<input type="file" class="custom-file-input" id="image" name="image">
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Update Province"/>
			</div>			
        </form>
    </div>
@endsection