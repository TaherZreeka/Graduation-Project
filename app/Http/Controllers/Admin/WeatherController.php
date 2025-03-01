<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
      public function index()
    {
        return view('pages.admin.weather.index');
    }

    public function getWeather(Request $request)
    {
        $city = $request->input('city');
        $apiKey = config('services.openweathermap.api_key');

        if (!$city) {
            return redirect()->back()->withErrors(['city' => 'اسم المدينة مطلوب']);
        }

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric', // Use metric units for Celsius
        ]);

        if ($response->successful()) {
            $weatherData = $response->json();
            return view('pages.admin.weather.result', ['weather' => $weatherData]);
        } else {
            return redirect()->back()->withErrors(['city' => 'فشل في جلب بيانات الطقس']);
        }
    }
}
