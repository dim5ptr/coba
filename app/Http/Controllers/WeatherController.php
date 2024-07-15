<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherServices;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherServices $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function show(Request $request)
    {
        $city = $request->input('city', 'Malang');
        $weather = $this->weatherService->getWeather($city);

        return view('weather', ['weather' => $weather, 'city' => $city]);
    }
}
