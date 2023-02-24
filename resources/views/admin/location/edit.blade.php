@extends('admin.layout.admin')

@section('title', 'Edit Main Category')

@section('path')
    <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="{{ route('show.locations') }}"><i class="fa fa-th-large"
                aria-hidden="true"></i> Locations</a></li>
    <li class="breadcrumb-item active"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Location ({{$location->location_name}}) </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit ({{ $location->location_name }}) Location</h2>
                    </div>
                    <form id="wizard_with_validation" action="{{ route('update.location', $location->id) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $location->id }}">
                        <div class="content clearfix">
                            <fieldset class="body">
                                <div class="row">
                                    <div class="col-12">
                                        <img width="200px" src="{{ asset($location->photo) }}"
                                            alt="{{ $location->location_name . "'s Photo" }}">
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <label class="d-block font-weight-bold">({{ $location->location_name }}) Location
                                            Photo</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="inputGroupFile01">
                                                    <span class="btn btn-tertiary">Upload</span>
                                                </label>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    name="main_img">
                                                {{-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> --}}
                                            </div>
                                            @error('photo')
                                                <span class="text-danger">هذا الحقل مطلوب</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 mt-2">
                                        <div class="form-group form-float">
                                            <label class="d-block font-weight-bold" for="name">Name</label>
                                            <input type="text" class="form-control valid"
                                                placeholder="Electronics, Cloths, Food..." name="location_name"
                                                aria-required="true" value="{{ $location->location_name }}">

                                            @error('category.0.name')
                                                <span class="text-danger">هذا الحقل مطلوب</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 mt-2">
                                        <div class="form-group form-float">
                                        <label class="d-block font-weight-bold" for="map">Map</label>
                                            <input type="text" class="form-control valid"
                                                placeholder="Map" name="map"
                                                aria-required="true" value="{{ $location->map }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 mt-2">
                                        <div class="form-group form-float">
                                        <label class="d-block font-weight-bold" for="slugan">Slugan</label>
                                            <input type="text" class="form-control valid"
                                                placeholder="Slugan" name="slugan"
                                                aria-required="true" value="{{ $location->slugan }}">
                                        </div>
                                    </div>

                                </div>
                                <a href="{{ route('show.locations') }}" class="btn btn-secondary float-right"><i
                                        class="fa fa-close" aria-hidden="true"></i> Cancel</a>
                                <button type="submit" class="btn btn-primary float-right mr-2"><i class="fa fa-floppy-o"
                                        aria-hidden="true"></i> Save</button>
                            </fieldset>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection