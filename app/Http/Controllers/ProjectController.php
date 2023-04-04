<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Location;    
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
     //Show Projects
     public function index(){
        $projects = Project::all();

        return view('admin.project.index', compact('projects'));
    }

    //Add Project
    public function add(){
        $locations = Location::select('id', 'location_name')->get();

        return view('admin.project.add', compact('locations'));
    }

}
