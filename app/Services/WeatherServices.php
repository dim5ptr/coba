<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherServices
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('WEATHER_API_KEY');
        $this->baseUrl = env('WEATHER_API_URL');
    }

    public function getWeather($city)
    {
        $response = Http::get($this->baseUrl, [
            'city' => $city,
            'key' => $this->apiKey,
            'units' => 'M' // Metric units
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
