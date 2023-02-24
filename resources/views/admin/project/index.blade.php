@extends('admin.layout.admin')

@section('title', 'Locations')

@section('path')
<li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
<li class="breadcrumb-item active"><i class="fa fa-language" aria-hidden="true"></i> Locations</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="tab-pane fade show active" id="More-table" role="tabpanel">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Locations</h2>
                        <a href={{route('add.location')}} class="btn-primary btn float-right"><i
                                class="fa fa-plus" aria-hidden="true"></i> Add</a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Img</th>
                                        <th>Slugan</th>
                                        <th>Map</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($locations)
                                    @foreach ($locations as $key => $location)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $location->location_name }}</td>
                                        <td>{{ $location->img }}</td>
                                        <td>{{ $location->slugan }}</td>
                                        <td> <a href="{{$location->map}}">Google Maps</a> </td>
                                        <td>
                                            <a href="{{route('edit.location', $location->id)}}"
                                                class="btn btn-secondary mr-1"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i> Edit</a>
                                            <a href="{{route('destroy.location', $location->id)}}"
                                                class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                                Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection