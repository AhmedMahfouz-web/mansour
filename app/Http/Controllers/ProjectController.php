<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
     //Show Projects
     public function index(){
        $projects = Project::all();

        return view('admin.project.index', compact('projects'));
    }

    //Add Project
    public function add(){
        $locations = Location::selection('id', 'location_name')->all();

        return view('admin.project.add', compact('locations'));
    }

}
