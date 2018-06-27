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
