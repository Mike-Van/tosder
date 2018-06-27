@extends('layouts.app')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
@endsection

@section('content')
<div class="info">
</div>
<section>
    <div class="row">
        <div class="col-12 col-md-8">
            <h2 class="bold">Let's
                <abbr class="let"> ADD</abbr> Your New
                <abbr class="let">Tour</abbr>
            </h2>
            <form id="create" method="post" action="{{ route('tours.store') }}" enctype="multipart/form-data">
                @csrf
                <lable class="let">Tour Name</lable>
                <br>
                <input type="text" name="name" placeholder="Tell your clients the name of this tour">
                <br>
                <lable class="let">Upload tour images</lable>
                <br>
                <input type="file" id="image" name="image[]" multiple required>
                <br>
                <lable class="let" for="category">Category</lable>
                <select id="category" name="category" required>
                    <option value="Historical and cultural sites" selected>Historical and cultural sites</option>
                    <option value="Natural and wilderness site">Natural and wilderness site</option>
                    <option value="Chilling out and nightlife">Chilling out and nightlife</option>
                    <option value="Others">Others</option>
                </select>
                <br>
                <lable class="let">Price</lable>
                <br>
                <input type="text" name="price" placeholder="How much will you be charging your clients?">
                <br>
                <br>
                <lable class="let">Overview</lable>
                <br>
                <textarea name="overview" class="ckeditor" placeholder="Tell your clients the general overview of this tour" name="" id="" cols="30" rows="5"></textarea>
                <br>
                <br>
                <lable class="let">Activities</lable>
                <br>
                <textarea name="activity" class="ckeditor" placeholder="What are some exciting things that you expect your clients to experience?" name="" id="" cols="30"
                          rows="5"></textarea>
                <br>
                <br>
                <div class="plus">
                    <div class="l">
                        <lable class="let">Inclusion</lable>
                        <br>
                        <textarea class="ckeditor" name="inclusion" placeholder="What are included in the charged fees?" name="" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="r">
                        <lable class="let">Exclusion</lable>
                        <br>
                        <textarea class="ckeditor" name="exclusion" placeholder="What are exclued from the charged fees?" name="" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <br>
                <lable class="let">Additional Policies</lable>
                <br>
                <textarea name="policies" placeholder="What are some information that you want to inform your clients before they book this tour?" name=""
                          id="" cols="30" rows="5" class="ckeditor"></textarea>
                <input type="hidden" name="guide_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="province_id" value="{{ Auth::user()->province_id }}">
                <div class="add">
                    <a href="#" onclick="$(document.getElementById('create').submit())">Add this tour</a>
                </div>
            </form>
        </div>
        <div class="col-6 col-md-4">
            <center>
                <h4 class="bold">
                    <abbr class="let">BEAR IN MIND</abbr> the following when adding tour.</h4>
            </center>
            <ul>
                <li>
                    <p>Tour
                        <abbr class="let">Name</abbr> should be short and precise.</p>
                </li>
                <li>
                    <p>Your
                        <abbr class="let">Pricing </abbr>should be fair and affordable.</p>
                </li>
                <li>
                    <p>Kepp your
                        <abbr class="let">Overview </abbr>short and meaning ful.
                        <br>Make sure your clients can understand it clearly.</p>
                </li>
                <li>
                    <p>For
                        <abbr class="let">Activities </abbr>,
                        <abbr class="let">Inclusion</abbr>, and
                        <abbr class="let">Exclusion</abbr>, try to use the listing to list everything.</p>
                </li>
                <li>
                    <p>Look over your
                        <abbr class="let">Additional Policies </abbr>parts to make sure you have covered as much as possible to avoid
                        conflict with your clients later on tour.</p>
                </li>
                <li>
                    <p>Lastly, make sure you have
                        <abbr class="let">Enough Time</abbr> to do all the listed activities on the tour.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection

    {{--<div class="col-md-8 offset-md-2">--}}
        {{--<h1> Adding New Tour </h1>--}}
        {{--<form method="post" action="{{ route('tours.store') }}" enctype="multipart/form-data">--}}
            {{--{{ csrf_field() }}--}}
            {{----}}
            {{--<div class="input-group mb-3">--}}
				{{--<div class="custom-file">					--}}
					{{--<label class="custom-file-label" for="image">Add 3 images at least</label>--}}
					{{--<input type="file" class="custom-file-input" id="image" name="image[]" multiple required>--}}
				{{--</div>--}}
			{{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="name">Tour Name<span class="required">*</span></label>--}}
                    {{--<input   placeholder="Enter tour name"--}}
                                {{--id="name"--}}
                                {{--required--}}
                                {{--name="name"--}}
                                {{--spellcheck="false"--}}
                                {{--class="form-control"--}}
                    {{--/>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="price">Price per Pax<span class="required">*</span></label>--}}
                    {{--<div class="input-group">--}}
                        {{--<input   placeholder="e.g 80000"--}}
                                    {{--id="price"--}}
                                    {{--required--}}
                                    {{--name="price"--}}
                                    {{--spellcheck="false"--}}
                                    {{--class="form-control"--}}
                        {{--/>--}}
                        {{--<div class="input-group-prepend">--}}
                            {{--<span class="input-group-text" id="price">KHR</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="category">Category</label>--}}
                    {{--<select class="custom-select" id="category" name="category" required>--}}
                        {{--<option value="Historical and cultural sites" selected>Historical and cultural sites</option>--}}
                        {{--<option value="Natural and wilderness site">Natural and wilderness site</option>--}}
                        {{--<option value="Chilling out and nightlife">Chilling out and nightlife</option>--}}
                        {{--<option value="Others">Others</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="overview">Overview</label>--}}
                    {{--<textarea placeholder="Tell some general overview of this tour"--}}
                                {{--id="overview"--}}
                                {{--name="overview"--}}
                                {{--rows="10" spellcheck="true"--}}
                                {{--class="form-control autosize-target text-left ckeditor">--}}
                    {{--</textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="activity">Activities</label>--}}
                    {{--<textarea placeholder="List what your clients is gonna be going on this tour"--}}
                                {{--id="activity"--}}
                                {{--name="activity"--}}
                                {{--rows="10" spellcheck="true"--}}
                                {{--class="form-control autosize-target text-left ckeditor">--}}
                    {{--</textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="inclusion">Inclusions</label>--}}
                    {{--<textarea placeholder="List all services and benefits that you'll be covering with your charging fees"--}}
                                {{--id="inclusion"--}}
                                {{--name="inclusion"--}}
                                {{--rows="10" spellcheck="true"--}}
                                {{--class="form-control autosize-target text-left ckeditor">--}}
                    {{--</textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="Exclusion">Exclusions</label>--}}
                    {{--<textarea placeholder="List all services that your charging won't cover"--}}
                                {{--id="exclusion"--}}
                                {{--name="exclusion"--}}
                                {{--rows="10" spellcheck="true"--}}
                                {{--class="form-control autosize-target text-left ckeditor">--}}
                    {{--</textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="policies">Policies</label>--}}
                    {{--<textarea placeholder="List the policies that your clints have to or should abide by"--}}
                                {{--id="policies"--}}
                                {{--name="policies"--}}
                                {{--rows="10" spellcheck="true"--}}
                                {{--class="form-control autosize-target text-left ckeditor">--}}
                    {{--</textarea>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="submit" class="btn btn-primary" value="Add Tour"/>--}}
                {{--</div>			--}}
        {{--</form>--}}
    {{--</div>--}}

