@extends('layouts.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h1> Editing Tour </h1>
        <form method="post" action="{{ route('tours.update', $tour->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" value="PUT" type="hidden">
            <label>Tour Images</label>
            @foreach($tourImages as $tourImage)
                <div class="form-group">
                    <img src="/storage/{{ $tourImage->path }}" width="400px" />
                </div>
            @endforeach
            <div class="input-group mb-3">
				<div class="custom-file">					
					<label class="custom-file-label" for="image">Update 3 Images</label>
					<input type="file" class="custom-file-input" id="image" name="image[]" multiple>
				</div>
            </div>
            <div class="form-group">
                <label for="name">Tour Name<span class="required">*</span></label>
                <input   placeholder="Enter tour name"
                            id="name"
                            required
                            name="name"
                            spellcheck="false"
                            class="form-control"
                            value="{{ $tour->name }}"
                />
            </div>
            <div class="form-group">
                <label for="price">Price per Pax<span class="required">*</span></label>
                <div class="input-group">
                    <input   placeholder="e.g 80000"
                                id="price"
                                required
                                name="price"
                                spellcheck="false"
                                class="form-control"
                                value="{{ $tour->price }}"
                    />
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="price">KHR</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="custom-select" id="category" name="category" required>
                    <option value="Historical and cultural sites" selected>Historical and cultural sites</option>
                    <option value="Natural and wilderness site">Natural and wilderness site</option>
                    <option value="Chilling out and nightlife">Chilling out and nightlife</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="overview">Overview</label>
                <textarea placeholder="Tell some general overview of this tour"
                              id="overview"
                              name="overview"
                              rows="10" spellcheck="true"
                              class="form-control autosize-target text-left ckeditor">{{ $tour->overview }}</textarea>
            </div>
            <div class="form-group">
                <label for="activity">Activities</label>
                <textarea placeholder="List what your clients is gonna be going on this tour"
                              id="activity"
                              name="activity"
                              rows="10" spellcheck="true"
                              class="form-control autosize-target text-left ckeditor">{{ $tour->activity }}</textarea>
            </div>
            <div class="form-group">
                <label for="inclusion">Inclusions</label>
                <textarea placeholder="List all services and benefits that you'll be covering with your charging fees"
                              id="inclusion"
                              name="inclusion"
                              rows="10" spellcheck="true"
                              class="form-control autosize-target text-left ckeditor">{{ $tour->inclusion }}</textarea>
            </div>
            <div class="form-group">
                <label for="Exclusion">Exclusions</label>
                <textarea placeholder="List all services that your charging won't cover"
                              id="exclusion"
                              name="exclusion"
                              rows="10" spellcheck="true"
                              class="form-control autosize-target text-left ckeditor">{{ $tour->exclusion }}</textarea>
            </div>
            <div class="form-group">
                <label for="policies">Policies</label>
                <textarea placeholder="List the policies that your clints have to or should abide by"
                              id="policies"
                              name="policies"
                              rows="10" spellcheck="true"
                              class="form-control autosize-target text-left ckeditor">{{ $tour->policies }}</textarea>
            </div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Update Tour"/>
			</div>  	
        </form>		
    </div>
@endsection