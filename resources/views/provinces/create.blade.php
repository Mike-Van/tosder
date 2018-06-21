@extends('layouts.app')

@section('content')
    <div class="col-md-6 offset-md-3">
        <h1> Adding New Province </h1>
        <form method="post" action="{{ route('provinces.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Province Name<span class="required">*</span></label>
                <input   placeholder="Enter province name"
                            id="name"
                            required
                            name="name"
                            spellcheck="false"
                            class="form-control"
                />
			</div>
			<div class="input-group mb-3">
				<div class="custom-file">					
					<label class="custom-file-label" for="image">Choose image</label>
					<input type="file" class="custom-file-input" id="image" name="image" required>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Add Province"/>
            </div>		
        </form>
        
    </div>
@endsection