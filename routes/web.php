<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'show']);

Route::get('/landing', function () {
    return view('landing');
});
