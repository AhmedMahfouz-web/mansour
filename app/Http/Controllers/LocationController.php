<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    //Show Locations
    public function index(){
        $locations = Location::all();

        return view('admin.location.index', compact('locations'));
    }

    //Add Locations
    public function add(){
        

        return view('admin.location.add');
    }

    //Store Locations Into Database
    public function store(Request $request){
        
        $filePath = "";
        if ($request->has("main_img")) {
            $filePath = uploadImg('location', $request->main_img);
            $request->main_img = $filePath;
        } else {
            return back()->withInput()->withErrors(["photo" => "Must Add a Picture"]);
        }
        

        $location = Location::create($request->except(['_token']));

        return redirect()->route('show.locations')->with('success', 'Location Added Successfully');
    }
    
    //Edit Location Page
    public function edit($id)
    {
        $location = Location::find($id);

        if (!$location) {
            return redirect()->route('show.locations');
        }

        return view('admin.location.edit', compact('location'));
    } // End Edit Function

    public function update($id, Request $request)
    {
        try {
            $location = Location::find($id);

            if (!$location) {
                return redirect()->route('show.locations');
            }
            
            $filepath = $location->main_img;

            if ($request->has('main_img')) {
                $filePath = uploadImg('location', $request->main_img);
            }
            $request->main_img = $filepath;


            DB::beginTransaction();

            $location->update([
                'location_name' => $request->location_name,
                'slugan' => $request->slugan,
                'map' => $request->map,
                'main_img' => $filepath,
            ]);

            DB::commit();
            return redirect()->route('show.locations');
        } catch (\Exception $ex) {

            DB::rollback();
            return $ex;
            return redirect()->route('add.location', $id);
        } // End Catch
    } // End Update Function
}
