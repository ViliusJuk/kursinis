<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $apiKey = '45d4c53d4beba0f5ee316855bf6bb581';
        $city = 'Vilnius';
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=$apiKey";

        $client = new Client();
        $response = $client->get($apiUrl);
        $data = json_decode($response->getBody());

        // Extract the required weather information
        $temperature = $data->main->temp;
        $humidity = $data->main->humidity;
        $description = $data->weather[0]->description;

        return view('weather', compact('temperature', 'humidity', 'description'));
    }

    
}
