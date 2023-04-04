<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->group(function () {

    //Dashboard
    Route::get('/', function () {
        return view('admin.layout.layout');
    })->name('admin.home');

    //Locations Routes
    Route::controller(LocationController::class)->group(function () {
        Route::prefix('location')->group(function () {
            //Show Locations
            Route::get('/', 'index')->name('show.locations');
            //Add Locations 
            Route::get('/add', 'add')->name('add.location');
            //store Location 
            Route::post('/store', 'store')->name('store.location');
            //Edit Locations 
            Route::get('/edit/{id}', 'edit')->name('edit.location');
            //update Location 
            Route::post('/update/{id}', 'update')->name('update.location');
            //Destroy Location
            Route::put('/destroy/{id}', 'destroy')->name('destroy.location');
        });
    });

    //Project Routes
    Route::controller(ProjectController::class)->group(function () {
        Route::prefix('project')->group(function () {
            //Show Projects
            Route::get('/', 'index')->name('show.projects');
            //Add Projects 
            Route::get('/add', 'add')->name('add.project');
            //store Project 
            Route::post('/store', 'store')->name('store.project');
            //Edit Projects 
            Route::get('/edit/{id}', 'edit')->name('edit.project');
            //update Project 
            Route::post('/update/{id}', 'update')->name('update.project');
            //Destroy Project
            Route::put('/destroy/{id}', 'destroy')->name('destroy.project');
        });
    });

});


