<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
// use App\Http\Controllers\VisitController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('hospital', HospitalController::class);
// Route::resource('visit', VisitController::class)->only(['store']);