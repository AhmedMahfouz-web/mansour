<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    //Show Locations
    public function index(){
        $locations = Location::all();

        return view('admin.location.index', compact('locations'));
    }

    //Add Locations
    public function add(){
        $locations = Location::all();

        return view('admin.location.add');
    }
}
