@extends('admin.layout.admin')

@section('title', 'New Project')

@section('path')
{{-- <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="{{route('admin.mainCategories')}}"><i class="fa fa-th-large"
            aria-hidden="true"></i> Main Categories</a></li>
<li class="breadcrumb-item active"><i class="fa fa-plus" aria-hidden="true"></i> Add Main Category</li> --}}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Create New Project</h2>
                </div>
                <form id="wizard_with_validation" action="{{route('store.project')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="content clearfix">
                        <fieldset class="body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <label class="d-block font-weight-bold">Project Photo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupFile01">
                                                <span class="btn btn-tertiary">Upload</span>
                                            </label>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                name="main_img">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose photo</label>
                                        </div>
                                        @error('photo')
                                        <span class="text-danger">هذا الحقل مطلوب</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label class="d-block font-weight-bold">Borchure</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label for="inputGroupFile01">
                                                <span class="btn btn-tertiary">Upload</span>
                                            </label>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile02"
                                                name="borchure">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose PDF</label>
                                        </div>
                                        @error('photo')
                                        <span class="text-danger">هذا الحقل مطلوب</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                {{-- @if (get_languages()->count() > 0)
                                @foreach (get_languages() as $key => $lang) --}}
                                <div class="col-lg-6 col-md-6 mt-2">
                                    <div class="form-group form-float">
                                        <label class="d-block font-weight-bold" for="name">Name </label>
                                        <input type="text" class="form-control valid"
                                            placeholder="Naser City, Mokattm..." name="project_name"
                                            aria-required="true">

                                        {{-- @error("category.$key.name")
                                        <span class="text-danger">هذا الحقل مطلوب</span>
                                        @enderror --}}
                                    </div>
                                </div>

                                <div class="col-md-6 col-md-6 mt-2">
                                    <div class="form-group form-float">
                                        <label class="d-block font-weight-bold" for="location_id">Location</label>
                                        <select class="selectpicker" data-style="btn-none" title="Select Category"
                                            data-live-search="true" data-live-search-placeholder="Search ..."
                                            name="location_id" id="location_id">
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">
                                                    {{ $location->location_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        {{-- @error('main_category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror --}}
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mt-2">
                                    <div class="form-group form-float">
                                        <label class="d-block font-weight-bold" for="name">Slugan </label>
                                        <div id="editor">
                                            <p>Hello World!</p>
                                            <p>Some initial <strong>bold</strong> text</p>
                                            <p><br></p>
                                          </div>
                                        {{-- @error("category.$key.name")
                                        <span class="text-danger">هذا الحقل مطلوب</span>
                                        @enderror --}}
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mt-2 d-none">
                                    <div class="form-group form-float">
                                        <label class="d-block font-weight-bold" for="language">Language</label>
                                        <input type="hidden" class="form-control valid"
                                            placeholder="Example : "
                                            name="" id="language"
                                            aria-required="true" value="">
{{-- 
                                        @error("category.$key.translation_lang")
                                        <span class="text-danger">هذا الحقل مطلوب</span>
                                        @enderror --}}
                                    </div>
                                </div>

                                {{-- <div class="col-lg-12 col-md-12 mb-3">
                                    <label class="d-block font-weight-bold">Status</label>
                                    <label class="toggle-switch">
                                        <input value="1" type="checkbox" name="category">
                                        <span class="toggle-switch-slider rounded-circle"></span>
                                    </label>
                                </div> --}}
                                {{-- @endforeach
                                @endif --}}
                            </div>
                            <a href="{{}}" class="btn btn-secondary float-right"><i
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
@endsection

@section('js')
<script>
    var quill = new Quill('#editor', {
      theme: 'snow'
    });
  </script>    
@endsection